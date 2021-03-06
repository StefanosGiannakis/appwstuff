<?php
use Illuminate\Support\Facades\Request;

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

Route::post('/everypay', 'PayController@tokenCatcher')->name('everypay');

Route::post('/otherPage',     'ViewController@RedirectToOtherPage')->name('otherPage');
Route::get('/finallyTheView',     'ViewController@finallyTheView')->name('finallyTheView');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
