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

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Auth::routes();
Route::get('/dashboard', 'dashboardController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('course', function () {
    return view('frontend.course');
});

Route::get('gallery', function () {
    return view('frontend.gallery');
});

Route::get('about_us', function () {
    return view('frontend.about_us');
});

Route::get('contact_us', function () {
    return view('frontend.contact_us');
});




Route::group(['prefix' => 'backend','middleware' => ['auth']], function () {  

    Route::get('dashboard',        			array('as'=>'dashboard','uses'=>'DashboardController@index'));

    Route::get('car',               array('as'=>'car','uses'=>'CarController@index'));

    Route::get('car_create',               array('as'=>'car_create','uses'=>'CarController@create'));
    // Route::get('car/create',               array('as'=>'car/create','uses'=>'CarController@index'));
    Route::post('car/store',               array('as'=>'car/store','uses'=>'CarController@store'));

    Route::get('customer',               array('as'=>'customer','uses'=>'CustomerController@index'));

    Route::get('owner',               array('as'=>'owner','uses'=>'OwnerController@index'));

    Route::get('rent',               array('as'=>'rent','uses'=>'RentController@index'));

    Route::get('register_create',               array('as'=>'registration_create','uses'=>'RegisterController@create'));

    Route::post('register/store',               array('as'=>'store','uses'=>'RegisterController@store'));

    Route::get('profile',                array('as'=>'profile','uses'=>'ProfileController@index'));

    Route::post('profile/{id}',                array('as'=>'profile/update','uses'=>'ProfileController@update'));

    Route::get('change-password', 'PasswordController@index');

Route::post('change-password', 'PasswordController@store')->name('change.password');
});

Route::group(['prefix'=> 'frontend','middleware'=>['auth']], function (){

    
});

/*
sufee-admin-dashboard-master Sample Routes
*/
Route::get('/sampletemplateview', function () {
    return view('sampletemplate_views.index');
});

Route::get('/sampletemplateview/ui-buttons', function () {
    return view('sampletemplate_views.ui-buttons');
});

/*
Testing Routes for email sending
*/
Route::get('email', array('as'=>'email','uses'=>'MailController@index'));

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendbasicemail2','MailController@basic_email2');

Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendhtmlemail2','MailController@html_email2');

Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('sendattachmentemail2','MailController@attachment_email2');
/*
Testing Routes for email sending
*/


/*
Testing Routes for upload
*/
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
/*
Testing Routes for upload
*/

/*
Testing Routes for Ajax
*/
Route::get('ajax',function(){
return view('message');
});
Route::post('/getmsg','AjaxController@index'); 	
/*
Testing Routes for Ajax
*/

Route::get('/error',function(){
	abort(404);
});
Auth::routes();

Route::get('/home', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
