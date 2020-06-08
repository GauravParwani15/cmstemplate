<?php



/*

|--------------------------------------------------------------------------

| Application Routes

|--------------------------------------------------------------------------

|

| Here is where you can register all of the routes for an application.

| It's a breeze. Simply tell Laravel the URIs it should respond to

| and give it the Closure to execute when that URI is requested.

|

*/


/**
 * Group Route to redirect all the routes with prefix faculty
 */


Route::group(['prefix'=>'staff', 'middleware' => 'admin'], function() {

    Route::get('/home', 'FacultyController@index');
    
    Route::get('/attendance/faculty', 'FacultyController@facultyattendance');
    Route::get('search/', 'FacultyController@searchStudent');
    Route::get('/booking','FacultyController@book_resource');
    Route::get('/new_booking','FacultyController@new_booking');
    Route::get('/check_availability','FacultyController@check_availability');
    Route::get('booking/booking_data/{id}','FacultyController@booking_data')->name('booking_data');
    Route::get('booking/history_data/{id}','FacultyController@bookinghist_data')->name('history_data');
    Route::post('/store','BookingsController@store');
    Route::post('/search','FacultyController@search');
    Route::get('/manage_resources','FacultyController@manage_resources');
    Route::get('/add_resources','FacultyController@add_resources');

    Route::get('/reports','FacultyController@reports');
    Route::get('/manage_users','FacultyController@manage_users');
 
    Route::post('/add_resources','FacultyController@store_resource');
    Route::post('/searchadmin/1','FacultyController@searchapprovedapplications');
    Route::post('/searchadmin/0','FacultyController@searchnewapplications');
    Route::get('/application_data/{id}','FacultyController@application_data')->name('application_data');
    Route::post('/filter','FacultyController@filter');
    Route::post('/filteradmin/1','FacultyController@filterapprovedapplication');
    Route::post('/filteradmin/0','FacultyController@filternewapplication');
    Route::get('/manage_application','FacultyController@manage_application');
    Route::get('/approved_application', 'FacultyController@approved_application');
    Route::get('/accept/{id}','FacultyController@accept')->name('accept');
    Route::get('/reject/{id}','FacultyController@reject')->name('reject');
    Route::get('/cancel/{id}','FacultyController@cancel')->name('cancel');

    Route::get('/delete_resources/{id}','FacultyController@delete_resources')->name('delete_resources');
});



Route::group(['prefix' => 'theme'], function(){
    Route::get('/red', 'ThemeController@red');
    Route::get('/blue', 'ThemeController@blue');
});

Route::get('login', 'OauthController@login');
//Route::get('social/redirect/google', 'OauthController@redirectToProvider');
//Route::get('social/handle/google', 'OauthController@handleProviderCallback');
Route::resource('remarks', 'CommentController');
Route::get('/logout', 'SessionController@logout');
Route::get('/', 'SessionController@home');

?>