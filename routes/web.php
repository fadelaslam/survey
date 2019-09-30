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
    return view('survey');
});

Route::get('/report', 'ReportController@index');
Route::get('/petikemas', 'ReportController@dataPetikemas');
Route::get('/nonpetikemas', 'ReportController@dataNonPetikemas');
Route::get('/kapal', 'ReportController@dataKapal');
Route::get('/penumpang', 'ReportController@dataPenumpang');


Route::get('/responden/kapal', function () {
    return view('responden/kapal/welcome_survey');
});

Route::get('/responden/kapal/main-survey', function () {
    return view('responden/kapal/survey');
});

Route::get('/responden/kapal/end-survey', function () {
    return view('responden/kapal/end_survey');
});

Route::get('/responden/non-petikemas', function () {
    return view('responden/non-petikemas/welcome_survey');
});

Route::get('/responden/non-petikemas/main-survey', function () {
    return view('responden/non-petikemas/survey');
});

Route::get('/responden/non-petikemas/end-survey', function () {
    return view('responden/non-petikemas/end_survey');
});

Route::get('/responden/petikemas', function () {
    return view('responden/petikemas/welcome_survey');
});

Route::get('/responden/petikemas/main-survey', function () {
    return view('responden/petikemas/survey');
});

Route::get('/responden/petikemas/end-survey', function () {
    return view('responden/petikemas/end_survey');
});


// Fungsi login
Route::get('login/kapal', 'KapalController@loginKapal');
Route::post('source/kapal', 'KapalController@sourceKapal');
Route::get('logoutkapal', 'KapalController@logout');


