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

 Route::get('/admin', function () {
     return view('AdminLTE.HomeContent');
 });



Route::get('/AddSubAdmin', function () {
    return view('AdminLTE.SubAdmin.AddSubadmin');
});

/*
====================================================================

                        Client Route

====================================================================
*/

Route::get('/client', 'ClientController@index')->name('index.client');
Route::get('/create_client', 'ClientController@create')->name('create.client');
Route::post('/store_client', 'ClientController@store')->name('store.client');

/*
====================================================================

                        Bank Route

====================================================================

*/

Route::get('/bank', 'BankController@index')->name('index.bank');
Route::post('/store_bank', 'BankController@store')->name('store.bank');

/*
====================================================================

                        Client Route

====================================================================


*/

Route::get('/credit', 'CreditController@index')->name('index.credit');
Route::get('/create_credit', 'CreditController@create')->name('create.credit');
Route::post('/store_credit', 'CreditController@store')->name('store.credit');

/*
====================================================================

                        Client Route

====================================================================


*/

Route::get('/debit', 'DebitController@index')->name('index.debit');
Route::get('/create_debit', 'DebitController@create')->name('create.debit');
Route::post('/store_debit', 'DebitController@store')->name('store.debit');



Route::get('/sub', function () {
    return view('AdminLTE.Transection.AddDebitTransection');
});

// Route::get('/credit', function () {
//     return view('AdminLTE.Transection.AddcreditTransection');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
