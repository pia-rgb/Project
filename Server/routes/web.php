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
   $shoppinglists= DB::table('shoppinglists')->get();
   return $shoppinglists;

   Route::get('/', 'Shoppinglistcontroller@index');
   Route::get('/shoppinglists', 'Shoppinglistcontroller@index');
   Route::get('/shoppinglists/{shoppinglist}', 'Shoppinglistcontroller@show');
});
