<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use App\Eloq\FXG;
use App\Eloq\User;
use DB;
use App\Eloq\Transaction;

class NewsController extends Controller
{

    public function newsListPage() {
        $row_per_page = 10;
        $NewsPaginate = FXG::OrderBy('newsdate', 'desc')
        ->where('display', 'Y') //only capture the one with display status Y
            ->paginate($row_per_page);

    $binding = [
        'title' => 'News List',
        'NewsPaginate'=> $NewsPaginate,
    ];
    return view ('news.listNews', $binding);
   }

   public function newsCreateProcess() {

    //create basic info
       $news_data = [
            'display' => 'N',
            'type' => '',    //status creation
            'title' => '',
            'ndesc' => '',
            'visits' => 0,
            'newsdate' => null,
       ];
    $News = FXG::create($news_data);

    // redirect to news editor
    return redirect('/news/'. $News->id . '/edit');

   }

   public function newsItemPage($news_id) {
    $News = FXG::findOrFail($news_id);
    session()->put('newid', $News->id);

    $binding = [
         'title' => 'News #'.$News->id,
         'News' => $News,
    ];
    return view('news.showNews', $binding);
}

   public function newsItemEditPage($news_id) {
       $News = FXG::findOrFail($news_id);

       $binding = [
            'title' => 'News Edit',
            'News' => $News,
       ];
       return view('news.editNews', $binding);
   }
   
   public function newsItemUpdateProcess($news_id) {
    $News = FXG::findOrFail($news_id);
    $input = request()->all();
    
        $rules = [
        'display' => ['required', 'in:Y,N'],
        'type' => ['required', 'max:150'],
        'title' => ['required', 'max:3000'],
        'ndesc' => ['required', 'max:6000'],
        'newsdate' => ['required'],
        ];
        
    $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            //var_dump($validator->messages());
            return redirect('/news/'. $News->id . '/edit')->withErrors($validator)->withInput();
        }
        $News->update($input);
        echo "News updated";
        header("refresh:3");
        return redirect('/news/manage');
        //return redirect('/news/' . $News->id . '/edit');
        //return redirect()->intended('/');
    }

    public function newsManageListProcess() {
        $row_per_page = 10;
        $NewsPaginate = FXG::OrderBy('updated_at', 'desc')
            ->paginate($row_per_page);

    $binding = [
        'title' => 'News List',
        'NewsPaginate'=> $NewsPaginate,
    ];
    return view ('news.manageNews', $binding);
    }

    public function newsItemReadProcess($news_id) {
        $news_id = session()->get('newid');
        
        $News = FXG::findOrFail($news_id);
        $input = request()->all();

    $News->increment('visits');
    $News->visits += 1; 

        echo "You have read a piece of news". $news_id . ".";
        session()->forget('newid');
        header("refresh:1");
        return redirect('/news')->with('read_success', 'You have read a piece of news #' . $news_id . '.');
        }//try
        //return redirect()->intended('/');
}