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

Route::get('b/section',                 array('as' => 'section.index',      'uses' => 'Backend\SectionController@index'));
Route::get('b/section/datatable',       array('as' => 'section.datatable',  'uses' => 'Backend\SectionController@datatable'));
Route::post('b/section/create',         array('as' => 'section.create',     'uses' => 'Backend\SectionController@create'));
Route::get('b/section/edit/{id}',       array('as' => 'section.edit',       'uses' => 'Backend\SectionController@edit'));
Route::post('b/section/delete/{id}',    array('as' => 'section.destroy',    'uses' => 'Backend\SectionController@destroy'));
// Route::post('b/section/update/{id}',    array('as' => 'section.update',     'uses' => 'Backend\SectionController@update'));
// Route::get('b/section/show/{id}',       array('as' => 'section.show',       'uses' => 'Backend\SectionController@show'));
