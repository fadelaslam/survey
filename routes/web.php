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

Route::get('/ngetesuskses', function () {
    return view('responden/non-petikemas/sukses');
});

Route::get('/report', 'ReportController@index');
Route::get('/petikemas', 'ReportController@dataPetikemas');
Route::get('/nonpetikemas', 'ReportController@dataNonPetikemas');
Route::get('/kapal', 'ReportController@dataKapal');
Route::get('/penumpang', 'ReportController@dataPenumpang');


// Fungsi login petikemas
Route::get('login/petikemas', 'PetikemasController@loginPetikemas');
Route::post('source/petikemas', 'PetikemasController@sourcePetikemas');
Route::get('/responden/petikemas/main-survey', 'PetikemasController@startSurvey');
Route::get('/responden/petikemas/end-survey', 'PetikemasController@submitSurveyPetikemas');
Route::get('logoutpetikemas', 'PetikemasController@logout');

// Fungsi login non-petikemas
Route::get('login/non-petikemas', 'NonPetikemasController@loginNonPetikemas');
Route::post('source/non-petikemas', 'NonPetikemasController@sourceNonpetikemas');
Route::get('/responden/non-petikemas/main-survey', 'NonPetikemasController@startSurvey');
Route::get('/responden/non-petikemas/end-survey', 'NonPetikemasController@submitSurveyPetikemas');
Route::get('logoutkapal', 'NonPetikemasController@logout');

// Fungsi login kapal
Route::get('login/kapal', 'KapalController@loginKapal');
Route::post('source/kapal', 'KapalController@sourceKapal');
Route::get('/responden/kapal/main-survey', 'KapalController@startSurvey');
Route::get('/responden/kapal/end-survey', 'KapalController@submitSurveyKapal');
Route::get('logoutkapal', 'KapalController@logout');

Route::get('/terimakasih', function(){
    return view('responden/end_survey');
});

