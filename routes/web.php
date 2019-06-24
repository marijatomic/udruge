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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//korisnici
Route::get('/users', 'UserController@index')->name('users');
//profil
Route::get('/users/{id}', 'UserController@show')->where('id', '[0-9]+');
//uredjivanje postojeceg korisnika prema proslijedjenom id-u
Route::get('/users/edit')->name('users_edit');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::patch('/users/edit/{id}', 'UserController@update');

//fakulteti
Route::get('/faculties/{id}', 'FacultyController@show')->where('id', '[0-9]+');

//udruge
Route::get('/associations', 'AssociationController@index')->name('associations');
Route::get('/associations/{id}', 'AssociationController@show')->where('id', '[0-9]+');
//uredjivanje postojece udruge prema proslijedjenom id-u
Route::get('/associations/edit')->name('associations_edit');
Route::get('/associations/edit/{id}', 'AssociationController@edit');
Route::patch('/associations/edit/{id}', 'AssociationController@update');

//aktivnosti
Route::get('/activities', 'ActivityController@index')->name('activities');
Route::get('/activities/{id}', 'ActivityController@show')->where('id', '[0-9]+');
//uredjivanje postojece aktivnosti prema proslijedjenom id-u
Route::get('/activities/edit')->name('activities_edit');
Route::get('/activities/edit/{id}', 'ActivityController@edit');
Route::patch('/activities/edit/{id}', 'ActivityController@update');


//dodavanje članova udruge
Route::get('members/create')->name('members_create');
Route::get('members/create/{id}', 'AssociationMemberController@create');
Route::post('/members/create/{id}', 'AssociationMemberController@store');
//brisanje članova udruge
Route::get('/members/delete')->name('members_delete');
Route::get('/members/delete/{id}', 'AssociationMemberController@destroy');

//Admin middleware za zabranu pristupa odredenim rutama
Route::group(['middleware' => ['auth', 'admin']], function () {

    //ADMINISTRACIJA
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //KORISNICI
    //kreiranje novog korisnika
    Route::get('/users/create', 'UserController@create')->name('users_create');
    Route::post('/users/create', 'UserController@store');
    //brisanje postojeceg korisnika prema proslijedjenom id-u
    Route::get('/users/delete')->name('users_delete');
    Route::get('/users/delete/{id}', 'UserController@destroy');

    //FAKULTETI
    Route::get('/faculties', 'FacultyController@index')->name('faculties');
    //kreiranje novog fakulteta
    Route::get('/faculties/create', 'FacultyController@create')->name('faculties_create');
    Route::post('/faculties/create', 'FacultyController@store');
    //uredjivanje postojeceg fakulteta prema proslijedjenom id-u
    Route::get('/faculties/edit')->name('faculties_edit');
    Route::get('/faculties/edit/{id}', 'FacultyController@edit');
    Route::patch('/faculties/edit/{id}', 'FacultyController@update');
    //brisanje postojeceg fakulteta prema proslijedjenom id-u
    Route::get('/faculties/delete')->name('faculties_delete');
    Route::get('/faculties/delete/{id}', 'FacultyController@destroy');

    //UDRUGE
    //kreiranje nove udruge
    Route::get('/associations/create', 'AssociationController@create')->name('associations_create');
    Route::post('/associations/create', 'AssociationController@store');
    //brisanje postojece udruge prema proslijedjenom id-u
    Route::get('/associations/delete')->name('associations_delete');
    Route::get('/associations/delete/{id}', 'AssociationController@destroy');

    //AKTIVNOSTI
    //kreiranje nove aktivnosti
    Route::get('/activities/create')->name('activities_create');
    Route::get('/activities/create/{id}', 'ActivityController@create');
    Route::post('/activities/create/{id}', 'ActivityController@store');
    //brisanje postojece aktivnosti prema proslijedjenom id-u
    Route::get('/activities/delete')->name('activities_delete');
    Route::get('/activities/delete/{id}', 'ActivityController@destroy');
});







