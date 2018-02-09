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

Route::get('/invited}', function () {
    return redirect('/');
});



Route::post('/invalid', 'CheckCode@auc')->name('inv');
Route::get('/invited/{id}', 'CheckCode@show')->name('invget');


//test  http://localhost/test/1  :  aaaa@aaaa.com
Route::get('test/{u}', function (App\User $u) {
    return $u->email;
});
//IMPORTANT : ASTA DEDESUPT FUNCTIONEAZA IMPREUNA CU ROUTE BINDING DIN BOOT in ROUTE SERVICE PROVIDER
Route::get('tester/{user}', function ($a) {
return $a->name;
});

//Route::get('/invited/{id}', function($id){
//    return view('invited', ['shit' => $id]);
//})->name('invget');

Route::get('proba/{caca}', function ($pipi) {
    return 'User '.$pipi;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'menu'], function(){

    Route::get('lesson8', 'NewOrderController@showMenuLesson8');
    Route::get('all', 'NewOrderController@showMenu');
    Route::post('postOrder', 'NewOrderController@postOrder');
});
