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
Route::get('/registration', ['as'=>'registration.index','uses'=>'RegController@index']);
Route::post('/registration', ['uses'=>'RegController@submit']);



//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);
//Route::get('/login/forgot', ['as'=>'login.forgot'])->name('login.forgot');
// Route::get('/login/forgot',['as'=>'login.forgot','uses'=>'ForgotController@index']);
// Route::post('/login/forgot',['uses'=>'ForgotController@verify']);

// Route::get('/login/forgot/showpass',function(){
// 	return view('login.showpass');
// })->name('login.showpass');


Route::group(['middleware'=>['sess'],['type']], function(){

		Route::get('/home', 'StuffController@index')->name('home.admin');
		
		Route::get('/MemberDetail','StuffController@show')->name('home.MemberDetail');
		Route::get('/details/{id}', 'StuffController@details')->name('home.details');
		Route::post('/details/{id}', 'StuffController@destroy');

		Route::get('/manage/{id}','StuffController@showmanage')->name('home.manage');
		Route::get('/manage/manageedit/{id}','StuffController@manageedit');
		Route::post('/manage/manageedit/{id}','StuffController@manageupdate');



		Route::get('/car','StuffController@showp')->name('home.carDetail');
		Route::get('/caredit/{id}','StuffController@caredit')->name('home.caredit');
		Route::post('/caredit/{id}','StuffController@carupdate');
		Route::get('/cardlt/{id}','StuffController@cardlt')->name('home.cardlt');
		Route::post('/cardlt/{id}', 'StuffController@cardestroy');
		Route::get('/orderedcar','StuffController@showordercar')->name('home.orderedcar');


		Route::get('/entry','StuffController@add');
		Route::post('/entry','StuffController@create');


		Route::get('/home/member', 'StuffController@index1')->name('home.member');
		Route::get('/manageM/{id}','StuffController@showmanageM')->name('home.manageM');
		Route::get('/manageM/manageeditM/{id}','StuffController@manageeditM');
		Route::post('/manageM/manageeditM/{id}','StuffController@manageupdateM');

		Route::get('/order/{id}', 'StuffController@order')->name('home.order');
		Route::post('/order/{id}', 'StuffController@orderup')->name('home.orderup');

		Route::get('/showorder','StuffController@showorder')->name('home.showorder');


		//Route::group(['middleware'=>['type']], function(){

			/*	Route::get('/add', 'HomeController@add');
				Route::post('/add', 'HomeController@create');

				Route::get('/eList', 'HomeController@show')->name('home.elist');

				Route::get('/edit/{eid}', 'HomeController@edit');
				Route::post('/edit/{eid}', 'HomeController@update');
				Route::get('/details/{eid}', 'HomeController@details')->name('home.details');
				Route::get('/delete/{eid}', 'HomeController@delete');
				Route::post('/delete/{eid}', 'HomeController@destroy');

		*/
		//});
	});

Route::get('/logout', 'logoutController@index');
