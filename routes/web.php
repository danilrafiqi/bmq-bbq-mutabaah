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

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees/liat', 'EmployeeController@liat');


Route::resource('employees', 'EmployeeController')->middleware('auth','isadmin');



Route::resource('mahasiswa', 'MahasiswaController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pdf', 'HomeController@pdfku')->name('home');



// Route::middleware(['auth'])->group(function () {
// 	Route::get('mutabaah/mingguan', 'MutabaahController@mingguan');
// 	Route::get('mutabaah/list', 'MutabaahController@list');
// });
// Route::resource('mutabaah', 'MutabaahController',[
//     'except' => ['index']
// ])->middleware('auth');
// Route::get('mutabaah', 'MutabaahController@index')->middleware('auth', 'admin');
Route::resource('tes', 'MutabaahController')->middleware('isadmin');

Route::resource('mutabaah', 'MutabaahController')->middleware('auth', 'isadmin');
Route::get('mutabaah/download/{type}', 'MutabaahController@download');

Route::resource('prodi', 'ProdiController');


Route::get('admin', 'DashboardAdminController@dashboard');



