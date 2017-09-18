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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-issue','IssueController@createIssue')->name('create-issue')->middleware('auth');

Route::get('/issue-list','IssueController@index')->name('index-issue')->middleware('auth');

Route::post('/create-issue','IssueController@createIssueSubmit')->name('create-issue-submit');

