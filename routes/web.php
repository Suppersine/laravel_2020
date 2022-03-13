<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/home', 'HomeController@homenews');

Route::get('/', function () {
    return view('cover');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/user/profile', 'ProfileController@profileListPage', function () {
    return view('listProfile');
});

Route::get('/news', 'NewsController@newsListPage', function () {
    return view('listNews');
});

Route::get('/awards', 'AwardsController@awardsListPage', function () {
    return view('listAwards');
});

Route::get('/pub', 'PubController@pubListPage', function () {
    return view('listPub');
});

Route::get('/research/info', function () {
    return view('infoResearch');
});

Route::get('/hello', function () {
    return 'Hello, World!';
    });

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::group(['prefix'=>'user'], function(){
        Route::group(['prefix'=>'auth'], function(){
            Route::get('/sign-up', 'UserAuthController@signUpPage');
            Route::post('/sign-up', 'UserAuthController@signUpProcess');
            Route::get('/sign-in', 'UserAuthController@signInPage');
            Route::post('/sign-in', 'UserAuthController@signInProcess');
            Route::get('/forgetpassword', 'UserAuthController@forgetPasswordPage');
            Route::post('/forgetpassword', 'UserAuthController@forgetPasswordProcess'); 
            Route::get('/sign-out', 'UserAuthController@signOut');            
        });
        
        Route::group(['prefix'=>'profile'], function(){
            Route::get('/', 'ProfileController@profileListPage');
            Route::get('/faculty', 'ProfileController@profileListPageFA');
            Route::get('/postgrad', 'ProfileController@profileListPagePG');
            Route::get('/undergrad', 'ProfileController@profileListPageUG');
            Route::get('/alumni-p', 'ProfileController@profileListPageAG');
            Route::get('/alumni-u', 'ProfileController@profileListPageAU');
            Route::get('/create', 'ProfileController@profileCreatePage')
            ->middleware(['user.auth.admin']);
            Route::get('/create', 'ProfileController@profileCreateProcess')
            ->middleware(['user.auth.admin']);
            Route::get('/manage', 'ProfileController@profileManageListProcess')
            ->middleware(['user.auth']);
            
            Route::group(['prefix'=>'{user_id}'], function(){
                Route::get('/', 'ProfileController@profileUserPage');
                Route::get('/edit_a', 'ProfileController@profileUserEditPageA')
                ->middleware(['user.auth.admin']);
                Route::put('/', 'ProfileController@profileUserUpdateProcessA')
                ->middleware(['user.auth.admin']);
                Route::get('/edit_n', 'ProfileController@profileUserEditPageN')
                ->middleware(['user.auth.admin']);
                Route::put('/', 'ProfileController@profileUserUpdateProcessN')
                ->middleware(['user.auth.admin']);
                Route::get('/edit_g', 'ProfileController@profileUserEditPageG')
                ->middleware(['user.auth']);
                Route::put('/', 'ProfileController@profileUserUpdateProcessG')
                ->middleware(['user.auth']);
                Route::get('/changepw', 'ProfileController@profileChangePasswordPage')
                ->middleware(['user.auth']);
                Route::post('/', 'ProfileController@profileChangePasswordProcess')
                ->middleware(['user.auth']);      
            });
        });
    });

    Route::group(['prefix'=>'news'], function(){
        Route::get('/', 'NewsController@newsListPage');
        Route::get('/create', 'NewsController@newsCreateProcess')
        ->middleware(['user.auth.admin']);
        Route::get('/manage', 'NewsController@newsManageListProcess')
        ->middleware(['user.auth.admin']);
        
        Route::group(['prefix'=>'{news_id}'], function(){
            Route::get('/', 'NewsController@newsItemPage');
            Route::get('/edit', 'NewsController@newsItemEditPage')
            ->middleware(['user.auth.admin']);
            Route::put('/', 'NewsController@newsItemUpdateProcess')
            ->middleware(['user.auth.admin']);
            Route::post('/read', 'NewsController@newsItemReadProcess');        
        });
    
    });

    Route::group(['prefix'=>'gallery'], function(){
        Route::get('/', 'GalleryController@galleryListPage');
        Route::get('/create', 'GalleryController@galleryCreateProcess')
        ->middleware(['user.auth.admin']);
        Route::get('/manage', 'GalleryController@galleryManageListProcess')
        ->middleware(['user.auth.admin']);
        
        Route::group(['prefix'=>'{gallery_id}'], function(){
            Route::get('/', 'GalleryController@galleryItemPage');
            Route::get('/edit', 'GalleryController@galleryItemEditPage')
            ->middleware(['user.auth.admin']);
            Route::put('/', 'GalleryController@galleryItemUpdateProcess')
            ->middleware(['user.auth.admin']);
        });
    
    });

    Route::group(['prefix'=>'awards'], function(){
        Route::get('/', 'AwardsController@awardsListPage');
        Route::get('/create', 'AwardsController@awardsCreateProcess')
        ->middleware(['user.auth.admin']);
        Route::get('/manage', 'AwardsController@awardsManageListProcess')
        ->middleware(['user.auth.admin']);
        
        Route::group(['prefix'=>'{awards_id}'], function(){
            Route::get('/', 'AwardsController@awardsItemPage');
            Route::get('/edit', 'AwardsController@awardsItemEditPage')
            ->middleware(['user.auth.admin']);
            Route::put('/', 'AwardsController@awardsItemUpdateProcess')
            ->middleware(['user.auth.admin']);
        });
    
    });

    Route::group(['prefix'=>'pub'], function(){
        Route::get('/', 'PubController@pubListPage');
        Route::get('/create', 'PubController@pubCreateProcess')
        ->middleware(['user.auth.admin']);
        Route::get('/manage', 'PubController@pubManageListProcess')
        ->middleware(['user.auth.admin']);
        
        Route::group(['prefix'=>'{pub_id}'], function(){
            Route::get('/', 'PubController@pubItemPage');
            Route::get('/edit', 'PubController@pubItemEditPage')
            ->middleware(['user.auth.admin']);
            Route::put('/', 'PubController@pubItemUpdateProcess')
            ->middleware(['user.auth.admin']);
        });
    
    });    

    Route::group(['prefix'=>'research'], function(){
        Route::get('/', 'ResearchController@researchIntroPage');
        Route::get('/list', 'ResearchController@researchListPage');
        Route::get('/create', 'ResearchController@researchCreateProcess')
        ->middleware(['user.auth.admin']);
        Route::get('/manage', 'ResearchController@researchManageListProcess')
        ->middleware(['user.auth.admin']);
        
        Route::group(['prefix'=>'{research_id}'], function(){
            Route::get('/', 'ResearchController@researchItemPage');
            Route::get('/edit', 'ResearchController@researchItemEditPage')
            ->middleware(['user.auth.admin']);
            Route::put('/', 'ResearchController@researchItemUpdateProcess')
            ->middleware(['user.auth.admin']);
        });
    
    });    

Route::group(['prefix'=>'merchandise'], function(){
    Route::get('/', 'MerchandiseController@merchandiseListPage');
    Route::get('/create', 'MerchandiseController@merchandiseCreateProcess')
    ->middleware(['user.auth.admin']);
    Route::get('/manage', 'MerchandiseController@merchandiseManageListProcess')
    ->middleware(['user.auth.admin']);
    
    Route::group(['prefix'=>'{merchandise_id}'], function(){
        Route::get('/', 'MerchandiseController@merchandiseItemPage');
        Route::get('/edit', 'MerchandiseController@merchandiseItemEditPage')
        ->middleware(['user.auth.admin']);
        Route::put('/', 'MerchandiseController@merchandiseItemUpdateProcess')
        ->middleware(['user.auth.admin']);
        Route::post('/buy', 'MerchandiseController@merchandiseItemBuyProcess')
        ->middleware(['user.auth']);        
    });

});

Route::get('/transaction', 'TransactionController@transactionListPage');
