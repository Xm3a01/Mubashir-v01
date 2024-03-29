<?php

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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::view('/hello','hello');


// arabic route

    Route::get('/' , 'Browse\BrowseController@home');
    Route::get('/ar-about' , 'Browse\BrowseController@about');
    Route::get('/ar-project' , 'Browse\BrowseController@project');
    Route::get('/ar-contact' , 'Browse\BrowseController@contact');
    Route::get('/ar-team' , 'Browse\BrowseController@team');
    Route::get('/ar-news/{id}' , 'Browse\BrowseController@news');
    Route::get('/ar-product' , 'Browse\BrowseController@product');
    Route::get('/desc/{id}' , 'Browse\BrowseController@ArDesc');
    Route::get('ar-product/desc/{id}' , 'Browse\BrowseController@proDesc');

//end arabic route


//english route

    Route::get('/en-home' , 'Browse\BrowseController@Enhome');
    Route::get('/en-about' , 'Browse\BrowseController@Enabout');
    Route::get('/en-project' , 'Browse\BrowseController@Enproject');
    Route::get('/en-contact' , 'Browse\BrowseController@Encontact');
    Route::get('/en-team' , 'Browse\BrowseController@Enteam');
    Route::get('/en-news/{id}' , 'Browse\BrowseController@Ennews');
    Route::get('/en-product' , 'Browse\BrowseController@Enproduct');
    Route::get('/desc/{id}' , 'Browse\BrowseController@EnDesc');
    Route::get('product/desc/{id}' , 'Browse\BrowseController@proEnDesc');


//end english route

// Route::view('/dashboard' , 'dashboard.ar.dashboard');


//Contact form route

Route::resource('contacts','Contact\ContactController')->only(['store']);
Route::post('contacts/ar','Contact\ContactController@storeAr')->name('contacts.store.ar');

//company data

Route::resource('teams','Team\TeamController')->except(['create']);
Route::resource('products','Product\ProductController')->except(['create']);
Route::resource('projects','Project\ProjectController')->except(['create']);

// Admin auth routes
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.form');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', 'Dashboard\ControlPanelController@index')->name('admin');
    Route::resource('companies', 'Dashboard\CompanyController');
    Route::resource('news', 'Dashboard\NewsController');
    Route::resource('products', 'Dashboard\ProductController');
    Route::resource('projects', 'Dashboard\ProjectController');
    Route::resource('teams', 'Dashboard\TeamController');
    Route::resource('admins', 'Dashboard\AdminController');

});
