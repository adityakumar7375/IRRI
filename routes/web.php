<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CsvImportController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\VarietyCodeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CommonController;


Route::get('/sign-up', [UserController::class, 'sign_up'])->name('sign-up');
Route::post('/sign-up', [RegisterController::class, 'register']);
Route::post('/search-result', [CommonController::class, 'search_result']);


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/forgot-password', [UserController::class, 'forgot_password'])->name('forgot-password');


//WebController
Route::get('/index', [WebController::class, 'index'])->name('index');
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/whatwedo', [WebController::class, 'whatwedo'])->name('whatwedo');
Route::get('/results', [WebController::class, 'results'])->name('results');
Route::get('/biofortification', [WebController::class, 'biofortification'])->name('biofortification');
Route::get('/interative-map', [WebController::class, 'interative_map'])->name('interative-map');
Route::get('/gallery', [WebController::class, 'gallery'])->name('gallery');
Route::get('/get-states', [WebController::class, 'getStates']);
// Route::get('/get-variety', [WebController::class, 'getVariety']);

// UserController







Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::middleware('auth')->group(function () {

    // web
    Route::get('/my-profile', [UserController::class, 'my_profile'])->name('my-profile');
    Route::post('/update/user/account', [UserController::class, 'update_account']);
    
    Route::get('/change-password', [UserController::class, 'change_password'])->name('change-password');
    Route::post('/change-password', [UserController::class, 'update_password']);
    


    // Admin


    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    //ProfileController

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'updatePassword']);

    //GalleryController

    Route::get('/gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/store', [GalleryController::class, 'store'])->name('store');

    // account
        Route::get('/location', [LocationController::class, 'index'])->name('location');
        Route::post('/state', [LocationController::class, 'state'])->name('state');
        Route::post('/country', [LocationController::class, 'country'])->name('country');
    

    // upload-excle
    
    Route::post('/upload-bulk-data', [CsvImportController::class, 'upload'])->name('upload.bulk.data');
    Route::get('/upload-excle', [CsvImportController::class, 'index'])->name('upload-excle');
    Route::get('csv/import', [CsvImportController::class, 'showForm']);
    Route::post('csv/import', [CsvImportController::class, 'import'])->name('csv.import');
    
    Route::get('csv/detail/{id}', [CsvImportController::class, 'detail'])->name('csv.detail');




    // UserAdminController
    Route::get('/user/list', [UserAdminController::class, 'index'])->name('user.list');

    //end  UserAdminController

    //TrackController
    Route::get('/track/user', [TrackController::class, 'index'])->name('track.user');

    //HistoryController 
    Route::get('/history/list', [HistoryController::class, 'index'])->name('history.list');  



    //VarietyCodeController
    Route::get('/variety/code', [VarietyCodeController::class, 'index'])->name('variety.code'); 
    Route::post('/variety/store', [VarietyCodeController::class, 'store'])->name('variety.store'); 


    //RegionController

    Route::get('/region', [RegionController::class, 'index'])->name('region'); 
    Route::post('/region/store', [RegionController::class, 'store'])->name('region.store'); 

    //  commoun model

    Route::get('/delete/{id}/{any}', [CommonController::class, 'delete'])->name('delete');
    Route::get('/update-status/{id}/{any}/{status}', [CommonController::class, 'update'])->name('update-status');
    

});


Route::get('/get-states/{country_id}', [CommonController::class, 'getStates'])->name('get-states');
Route::get('/get-variety/{state_id}', [CommonController::class, 'getVariety'])->name('get-variety');
