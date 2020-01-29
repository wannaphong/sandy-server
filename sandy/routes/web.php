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

Auth::routes();
Route::get('/delassistant/{ua}','UserAssistantController@Del');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addsandy', 'AssistantController@formAdd')->name('addsandy');
Route::post('/savesandy', 'UserAssistantController@postAdd')->name('saveregsandy');
//saveregsandy

Route::get('/regsandy', 'UserAssistantController@formAdd')->name('regsandy');
// view
Route::get('/viewsandy', 'UserAssistantController@viewall')->name('viewsandy');
Route::get('/configassistant/{aid}', 'ConfigController@form');
// addassistant
Route::post('addassistant','AssistantController@postAdd')->name('addassistant');
Route::post('updateassistant','ConfigController@updateData')->name('updateassistant');
