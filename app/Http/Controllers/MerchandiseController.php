<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\Merchandise;
use Intervention\Image\Facades\Image;
use App\Eloq\User;
use DB;
use App\Eloq\Transaction;

class MerchandiseController extends Controller
{

    public function merchandiseListPage() {
        $row_per_page = 10;
        $MerchandisePaginate = Merchandise::OrderBy('updated_at', 'desc')
            ->where('status', 'S') //only capture the one with status S
            ->paginate($row_per_page);

    //set photo url
    foreach ($MerchandisePaginate as &$Merchandise) {
        if (!is_null($Merchandise->photo)) {
            $Merchandise->photo = url($Merchandise->photo);
        }
    }

    $binding = [
        'title' => 'Merchandise List',
        'MerchandisePaginate'=> $MerchandisePaginate,
    ];
    return view ('merchandise.listMerchandise', $binding);
   }

   public function merchandiseCreateProcess() {

    //create basic info
       $merchandise_data = [
            'status' => 'C',    //status creation
            'name' => '',
            'name_en' => '',
            'introduction' => '',   
            'introduction_en' => '',
            'photo' => null,
            'price' => 0,
            'remain_count' => '0',
       ];
    $Merchandise = Merchandise::create($merchandise_data);

    // redirect to merchandise editor
    return redirect('/merchandise/'. $Merchandise->id . '/edit');

   }

   public function merchandiseItemPage($merchandise_id) {
    $Merchandise = Merchandise::findOrFail($merchandise_id);

    if (!is_null($Merchandise->photo)) {
        $Merchandise->photo = url($Merchandise->photo);
    }

    $binding = [
         'title' => $Merchandise->name,
         'Merchandise' => $Merchandise,
    ];
    return view('merchandise.showMerchandise', $binding);
}

   public function merchandiseItemEditPage($merchandise_id) {
       $Merchandise = Merchandise::findOrFail($merchandise_id);

       if (!is_null($Merchandise->photo)) {
           $Merchandise->photo = url($Merchandise->photo);
       }

       $binding = [
            'title' => 'Merchandise Edit',
            'Merchandise' => $Merchandise,
       ];
       return view('merchandise.editMerchandise', $binding);
   }
   
   public function merchandiseItemUpdateProcess($merchandise_id) {
    $Merchandise = Merchandise::findOrFail($merchandise_id);
    $input = request()->all();
    
        $rules = [
        'status' => ['required', 'in:C,S'],
        'name' => ['required', 'max:80'],
        'name_en' => ['required', 'max:80'],
        'introduction' => ['required', 'max:2000'],
        'introduction_en' => ['required', 'max:2000'],
        'photo' => ['file', 'image', 'max: 10240'],
        'price' => ['required', 'integer', 'min:0'],
        'remain_count' => ['required', 'integer', 'min:0'],
        ];
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/merchandise/'. $Merchandise->id . '/edit')->withErrors($validator)->withInput();
        }
        if (isset($input['photo'])) {
            $photo = $input['photo'];
            $file_extension = $photo->getClientOriginalExtension(); 
            $file_name = uniqid() . '.' . $file_extension;
            $file_relative_path = 'images\merchandise'.'\\' . $file_name;
            $file_path = public_path($file_relative_path);
            $image = Image::make($photo) -> fit(150, 100) -> save($file_path);
            $input['photo'] = $file_relative_path;
            }
        $Merchandise->update($input);
        echo "Merchandise updated";
        header("refresh:3");
        return redirect('/merchandise/manage');
    }

    public function merchandiseManageListProcess() {
        $row_per_page = 10;
        $MerchandisePaginate = Merchandise::OrderBy('updated_at', 'desc')
            ->paginate($row_per_page);

    //set photo url
    foreach ($MerchandisePaginate as &$Merchandise) {
        if (!is_null($Merchandise->photo)) {
            $Merchandise->photo = url($Merchandise->photo);
        }
    }

    $binding = [
        'title' => 'Merchandise List',
        'MerchandisePaginate'=> $MerchandisePaginate,
    ];
    return view ('merchandise.manageMerchandise', $binding);
    }

    public function merchandiseItemBuyProcess($merchandise_id) {

        $Merchandise = Merchandise::findOrFail($merchandise_id);
        $input = request()->all();

            $rules = [
            'buy_count' => ['required', 'integer', 'min:1'],
            ];
            
        $validator = Validator::make($input, $rules);
            if ($validator->fails()) {
                return redirect('/merchandise/'. $Merchandise->id)->withErrors($validator)->withInput();
            } else {

        try {
            $user_id = session()->get('user_id');
            $User = User::findOrFail($user_id);

            DB::beginTransaction(); //Lock DB access

            $Merchandise = Merchandise::findOrFail($merchandise_id);
            $buy_count = $input['buy_count'];

            $remain_count_after_buy=$Merchandise->remain_count - $buy_count;
            if ($remain_count_after_buy < 0) {
                throw new Execption('Not Enough');
            }
            $Merchandise->remain_count = $remain_count_after_buy;
            $Merchandise->save();

            $total_price = $buy_count * $Merchandise->price;

            $transaction_data = [
                'user_id' => $User->id,
                'merchandise_id' => $Merchandise->id,
                'price' => $Merchandise->price,
                'buy_count' => $buy_count,
                'total_price' => $total_price,
            ];

            Transaction::create($transaction_data);

            DB::commit();

            echo "You have bought ".$buy_count." pieces of ".$Merchandise->id." for $".$total_price.".";
            header("refresh:5");
            return redirect('/merchandise/' . $Merchandise->id)->with('buy_success', 'You have bought ' . $buy_count . ' pieces of #' . $Merchandise->id. ', totalling $' . $total_price.'.');
            }//try

        catch (Exception $exception) {
            DB::rollBack();
            
            $error_message = [
                'msg' => [
                    $exception->getMessage(),
                ],
            ];
            return redirect()
                ->back()
                ->withErrors($error_message)
                ->withInput();
            }
        }
    }
}