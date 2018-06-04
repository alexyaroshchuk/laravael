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
    return view('layouts/start');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/workers' , [
    'uses' => 'WorkersController@showWorkers'
]);
Route::post('/workers', [
    'uses' => 'WorkersController@showWorkers'
]);

Route::get('/workers/{id_worker}', [
    'uses' => 'WorkerInfoController@workerShow'
])->name('workerShow');

Route::get('/profile/{id_worker}', [
    'uses' => 'WorkerInfoController@workerShow'
])->name('workerShow');

Route::get('/addSS', [
    'uses' => 'SettlementSheetsController@addSS'
])->name('addSS');
Route::post('/addSS', [
    'uses' => 'SettlementSheetsController@storeSS'
])->name('storeSS');

Route::post('/addworker', [
    'uses' => 'WorkerInfoController@storeWorker'
])->name('storeWorker');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
