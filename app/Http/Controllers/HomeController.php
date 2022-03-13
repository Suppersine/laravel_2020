<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Eloq\FXG;
use App\Eloq\User;
use DB;
use App\Eloq\Transaction;

class HomeController extends Controller
{
    public function homenews() {
    $NewsPaginate = FXG::orderBy('newsdate', 'desc')->where('display', 'Y')->limit(5)->get();

    $binding = [
        'NewsPaginate'=> $NewsPaginate,
    ];

    return view ('home', $binding);

    }
}

