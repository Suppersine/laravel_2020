<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\Awards;
use Intervention\Image\Facades\Image;
use App\Eloq\User;
use App\Eloq\users;
use DB;
use App\Eloq\Transaction;

class AwardsController extends Controller
{

    public function awardsListPage() {
        $row_per_page = 10;
        $AwardsPaginate = Awards::OrderBy('updated_at', 'desc')
            ->where('display', 'Y') //only capture the one with display status Y
            ->paginate($row_per_page);
        $Profile = User::all();
    //set photo url
    foreach ($AwardsPaginate as &$Awards) {
        if (!is_null($Awards->photo)) {
            $Awards->photo = url($Awards->photo);
        }
    }

    $binding = [
        'title' => 'Awards List',
        'AwardsPaginate'=> $AwardsPaginate,
        'Profile'=> $Profile,
    ];
    return view ('awards.listAwards', $binding);
   }

   public function awardsCreateProcess() {

    //create basic info
       $awards_data = [
            'display' => 'N',
            'date_received' => '',    //status creation
            'title' => '',
            'cat' => '', 
            'sponsor' => '', 
            'personel' => '', 
            'given_to_1' => null,
            'given_to_2' => null,
            'given_to_3' => null,
            'given_to_4' => null,
            'given_to_5' => null,
            'given_to_6' => null,
            'given_to_7' => null,
            'given_to_8' => null,
            'given_to_9' => null,
            'given_to_10' => null,
            'given_to_11' => null,
            'given_to_12' => null,  
            'adesc' => '',
            'commentary' => '',
            'photo' => null,
       ];
    $Awards = Awards::create($awards_data);

    // redirect to awards editor
    return redirect('/awards/'. $Awards->id . '/edit');

   }

   public function awardsItemPage($awards_id) {
    $Awards = Awards::findOrFail($awards_id);
    $Profile = User::all();

    if (!is_null($Awards->photo)) {
        $Awards->photo = url($Awards->photo);
    }

    $binding = [
         'title' => $Awards->name,
         'Awards' => $Awards,
         'Profile'=> $Profile,
    ];
    return view('awards.showAwards', $binding);
}

   public function awardsItemEditPage($awards_id) {
       $Awards = Awards::findOrFail($awards_id);
       $Profile = User::all();

       if (!is_null($Awards->photo)) {
           $Awards->photo = url($Awards->photo);
       }

       $binding = [
            'title' => 'Awards Edit',
            'Awards' => $Awards,
            'Profile'=> $Profile,
       ];
       return view('awards.editAwards', $binding);
   }
   
   public function awardsItemUpdateProcess($awards_id) {
    $Awards = Awards::findOrFail($awards_id);
    $Profile = User::all();
    $input = request()->all();
    
        $rules = [
        'display' => ['required', 'in:Y,N'],
        'date_received' => ['required'],
        'title' => ['required', 'min:1', 'unique:awards,title,' . $awards_id],
        'photo' => ['file', 'image', 'max: 8192000'],
        ];
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/awards/'. $Awards->id . '/edit')->withErrors($validator)->withInput();
        }
        if (isset($input['photo'])) {
            $photo = $input['photo'];
            $file_extension = $photo->getClientOriginalExtension(); 
            $file_name = uniqid() . '.' . $file_extension;
            $file_relative_path = 'images\awards'.'\\' . $file_name;
            $file_path = public_path($file_relative_path);
            $image = Image::make($photo) -> fit(150, 100) -> save($file_path);
            $input['photo'] = $file_relative_path;
            }
        $Awards->update($input);
        echo "Awards updated";
        header("refresh:3");
        return redirect('/awards/manage');
    }

    public function awardsManageListProcess() {
        $row_per_page = 10;
        $AwardsPaginate = Awards::OrderBy('updated_at', 'desc')
            ->paginate($row_per_page);
            $Profile = User::all();

    //set photo url
    foreach ($AwardsPaginate as &$Awards) {
        if (!is_null($Awards->photo)) {
            $Awards->photo = url($Awards->photo);
        }
    }

    $binding = [
        'title' => 'Awards List',
        'AwardsPaginate'=> $AwardsPaginate,
        'Profile'=> $Profile,
    ];
    return view ('awards.manageAwards', $binding);
    }
}