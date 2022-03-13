<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\RSC;
use Intervention\Image\Facades\Image;
use App\Eloq\User;
use App\Eloq\users;
use DB;
use App\Eloq\Transaction;

class ResearchController extends Controller
{

    public function researchIntroPage () {
        return view('research.infoResearch');
    }

    public function researchListPage() {
        $row_per_page = 10;
        $ResearchPaginate = RSC::OrderBy('updated_at', 'desc')
            ->where('display', 'Y') //only capture the one with display status Y
            ->paginate($row_per_page);
        $Profile = User::all();

    $binding = [
        'title' => 'Research List',
        'ResearchPaginate'=> $ResearchPaginate,
        'Profile'=> $Profile,
    ];
    return view ('research.listResearch', $binding);
   }

   public function researchCreateProcess() {

    //create basic info
       $research_data = [
        'display' => 'N',
        'created_at' => null,
        'updated_at' => null,
        'date_pub' => null,
        'title' => '',
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
        'intro' => '',
        'methods' => '',
        'result_discn' => '',
        'conclusions' => '',
        'refren' => '',
        'linkz' => '',
       ];
    $Research = RSC::create($research_data);

    // redirect to research editor
    return redirect('/research/'. $Research->id . '/edit');

   }

   public function researchItemPage($research_id) {
    $Research = RSC::findOrFail($research_id);
    $Profile = User::all();

    $binding = [
         'title' => $Research->title,
         'Research' => $Research,
         'Profile'=> $Profile,
    ];
    return view('research.showResearch', $binding);
}

   public function researchItemEditPage($research_id) {
       $Research = RSC::findOrFail($research_id);
       $Profile = User::all();

       if (!is_null($Research->photo)) {
           $Research->photo = url($Research->photo);
       }

       $binding = [
            'title' => 'Research Edit',
            'Research' => $Research,
            'Profile'=> $Profile,
       ];
       return view('research.editResearch', $binding);
   }
   
   public function researchItemUpdateProcess($research_id) {
    $Research = RSC::findOrFail($research_id);
    $Profile = User::all();
    $input = request()->all();
    
        $rules = [
            'display' => ['required', 'in:Y,N'],
            'title' => ['required', 'min:1', 'unique:research,title,' . $research_id],
            'personel' => ['required', 'min:1'],
        ];
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/research/'. $Research->id . '/edit')->withErrors($validator)->withInput();
        }

        $Research->update($input);
        echo "Research updated";
        header("refresh:3");
        return redirect('/research/manage');
        //return redirect()->intended('/');
    }

    public function researchManageListProcess() {
        $row_per_page = 10;
        $ResearchPaginate = RSC::OrderBy('updated_at', 'desc')
            ->paginate($row_per_page);
            $Profile = User::all();

    $binding = [
        'title' => 'Research List',
        'ResearchPaginate'=> $ResearchPaginate,
        'Profile'=> $Profile,
    ];
    return view ('research.manageResearch', $binding);
    }
}