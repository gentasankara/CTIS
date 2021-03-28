<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware'=> ['auth','checkRole:manager']],function(){
    Route::get('/testKit','TestController@index');
    Route::post('/testKit/create','TestController@create');
    Route::get('/testKit/{id}/edit','TestController@edit');
    Route::post('/testKit/{id}/update','TestController@update');
    Route::get('/testKit/{id}/delete','TestController@delete');

    Route::get('/users','UserController@index');
    Route::get('/users/newTester','UserController@newTester');
    Route::post('/users/addTester','UserController@addTester');
    Route::get('/users/{id}/delete','UserController@delete');

    Route::get('/testCentre','TestCentreController@index');
    Route::post('/testCentre/create','TestCentreController@create');
    Route::get('/testCentre/{id}/edit','TestCentreController@edit');
    Route::post('/testCentre/{id}/update','TestCentreController@update');
    Route::get('/testCentre/{id}/delete','TestCentreController@delete');
});


Route::group(['middleware'=> ['auth','checkRole:tester']],function(){
    Route::get('/testData','TestDataController@index');
    Route::get('/testData/newTest','TestDataController@newTest');
    Route::post('/testData/recordTest','TestDataController@recordTest');
    Route::post('/testData/createPatient','TestDataController@createPatient');
    Route::get('/testData/{id}/edit','TestDataController@edit');
    Route::post('/testData/{id}/update','TestDataController@update');
    Route::get('/testData/{id}/delete','TestDataController@delete');
    Route::get('/testData/newPatientTest','TestDataController@newPatientTest');
});

Route::group(['middleware'=> ['auth','checkRole:manager,tester']],function(){
    Route::get('/testReport','TestDataController@testReport');
});


Route::group(['middleware'=> ['auth','checkRole:patient']],function(){
    Route::get('/patientHistory','PatientController@index');
    Route::get('/dashboard_p','DashboardController@index');
});


Route::group(['middleware'=> ['auth','checkRole:manager,tester']],function(){
    Route::get('/dashboard','DashboardController@index_officer');
});