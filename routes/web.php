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


/*
 * MANAGER Routes
 */

Route::group(['prefix'=>'manager'],function (){

    Route::get('/',['uses'=>'Manager\HomeController@index','as'=>'manager.home']);

    /*
     * Pages Routes
     */
    Route::get('/pages',['uses'=>'Manager\PagesController@index','as'=>'manager.pages']);
    Route::get('/pages/create',['uses'=>'Manager\PagesController@create','as'=>'manager.pages-create']);
    Route::post('/pages/create',['uses'=>'Manager\PagesController@store','as'=>'manager.pages-create-post']);
    Route::get('/pages/edit/{id}',['uses'=>'Manager\PagesController@edit','as'=>'manager.pages-edit']);
    Route::post('/pages/edit',['uses'=>'Manager\PagesController@update','as'=>'manager.pages-edit-post']);
    Route::post('/pages/remove',['uses'=>'Manager\PagesController@delete','as'=>'manager.pages-remove-post']);

    /*
     * Content Routes
    */
    Route::get('/contents',['uses'=>'Manager\ContentController@index','as'=>'manager.contents']);
    Route::get('/contents/create',['uses'=>'Manager\ContentController@create','as'=>'manager.content-create']);
    Route::post('/contents/create',['uses'=>'Manager\ContentController@store','as'=>'manager.content-create-post']);
    Route::get('/contents/edit/{id}',['uses'=>'Manager\ContentController@edit','as'=>'manager.content-edit']);


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
