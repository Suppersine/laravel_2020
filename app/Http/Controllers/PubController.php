<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\Pubs;
use Illuminate\Http\Request;
use App\Eloq\User;
use App\Eloq\users;
use DB;
use App\Eloq\Transaction;

class PubController extends Controller
{

    public function pubListPage() {
        $row_per_page = 10;
        $PubPaginate = Pubs::OrderBy('updated_at', 'desc')
        ->where('display', 'Y') //only capture the one with display status Y
            ->paginate($row_per_page);
        $Profile = User::all();

    $binding = [
        'title' => 'Publication List',
        'PubPaginate'=> $PubPaginate,
        'Profile'=> $Profile,
    ];
    return view ('pub.listPub', $binding);
   }

   public function pubCreateProcess() {

    //create basic info
       $pub_data = [
        'display' => 'N',
        'created_at' => null,
        'updated_at' => null,
        'date_pub' => null,
        'title' => '',
        'cat' => '', 
        'personel' => '',
        'written_by_1' => null,
        'written_by_2' => null,
        'written_by_3' => null,
        'written_by_4' => null,
        'written_by_5' => null,
        'written_by_6' => null,
        'written_by_7' => null,
        'written_by_8' => null,
        'written_by_9' => null,
        'written_by_10' => null,
        'written_by_11' => null,
        'written_by_12' => null,
        'abstract' => '',
        'intro' => '{According to the project requirement, the topic and the abstract (of a thesis) are enough to create a publication page. Thus, the rest of the form can be omitted}',
        'methods' => '{Not enough article access, or to be filled in later}',
        'result_discn' => '{Not enough article access, or to be filled in later}',
        'conclusions' => '{Not enough article access, or to be filled in later}',
        'refren' => '{Not enough article access, or to be filled in later}',
        'linkz' => '{Not enough article access, or to be filled in later}',
       ];
    $Pub = Pubs::create($pub_data);

    // redirect to pub editor
    return redirect('/pub/'. $Pub->id . '/edit');

   }

   public function pubItemPage($pub_id) {
    $Pub = Pubs::findOrFail($pub_id);
    $Profile = User::all();

    $binding = [
         'title' => $Pub->title,
         'Pub' => $Pub,
         'Profile'=> $Profile,
    ];
    return view('pub.showPub', $binding);
}

   public function pubItemEditPage($pub_id) {
       $Pub = Pubs::findOrFail($pub_id);
       $Profile = User::all();

       $binding = [
            'title' => 'Publication Edit',
            'Pub' => $Pub,
            'Profile'=> $Profile,
       ];
       return view('pub.editPub', $binding);
   }
   
   public function pubItemUpdateProcess($pub_id) {
    $Pub = Pubs::findOrFail($pub_id);
    $Profile = User::all();
    $input = request()->all();
    
        $rules = [
        'display' => ['required', 'in:Y,N'],
        'date_pub' => ['required'],
        'title' => ['required', 'min:1', 'unique:publications,title,' . $pub_id], //the 'unique' rule has to refer to a real table name in the database, no the model name.
        'personel' => ['required', 'min:1'],
        ];
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/pub/'. $Pub->id . '/edit')->withErrors($validator)->withInput();
        }

        $Pub->update($input);
        echo "Pub updated";
        header("refresh:3");
        return redirect('/pub/manage');
        //return redirect()->intended('/');
    }

    public function pubManageListProcess() {
        $row_per_page = 10;
        $PubPaginate = Pubs::OrderBy('updated_at', 'desc')
            ->paginate($row_per_page);
            $Profile = User::all();

    $binding = [
        'title' => 'Publication List',
        'PubPaginate'=> $PubPaginate,
        'Profile'=> $Profile,
    ];
    return view ('pub.managePub', $binding);
    }
}