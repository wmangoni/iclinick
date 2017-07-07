<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('site.index');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::group(['prefix' => 'adm'], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });

    Route::group(['middleware' => 'auth'], function () {
        //Route::get('/', [ 'as' => 'home.index', 'uses' => 'HomeController@index']);
        Route::get('/home', [ 'as' => 'home.index', 'uses' => 'HomeController@index']);
        Route::get('/config', [ 'as' => 'config.index', 'uses' => 'ConfigController@index']);

        Route::group(['middleware' => ['admin_vision']], function(){
            Route::resource('/doctors', 'DoctorsController');
            Route::resource('/modules', 'ModulesController');
        });

        Route::group(['middleware' => ['doctor_vision']], function(){
            Route::resource('/patients', 'PatientsController');
            Route::resource('/payments', 'PaymentsController');
            Route::resource('/schedule', 'ScheduleController');
            Route::resource('/medicines', 'MedicinesController');
            Route::resource('/segments', 'SegmentsController');
            Route::resource('/convenios', 'ConveniosController');
            Route::resource('/exams', 'ExamsController');
            Route::resource('/services', 'ServicesController');
            Route::resource('/professions', 'ProfessionsController');
        });

        //Routs to AJAX
        Route::post('/load-cidades', [ 'as' => 'load-cidades', 'uses' => 'CitiesController@loadCidades']);
    });
});
