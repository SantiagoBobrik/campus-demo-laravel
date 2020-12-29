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
    return view('cursos');
})->middleware('auth');



Route::get('/cursos', function () {
    return view('cursos');
})->middleware('auth');

Route::get('/materias_pca', function () {
    return view('materias');
})->middleware('auth');

Route::get('/bibliografia_legislacion_pca', function () {
    return view('bibliografia_legislacion_pca');
})->middleware('auth');


Route::get('/legislacion_pca_exa_recuperatorio', function () {
    return view('legislacion_pca_exa_recuperatorio');
})->middleware('auth');

Route::get('/legislacion_pca_exa_final_preguntas', function () {
    return view('legislacion_pca_exa_final_preguntas');
})->middleware('auth');


/* ------------------------------- New Routes ------------------------------- */
Route::get('/legislacion_pca', 'CourseController@menu')->middleware('auth');
Route::post('/send-archive', 'CourseController@sendArchive')->middleware('auth');

Route::get('/legislacion_pca_exa_final', 'ExamController@exam')->middleware('auth');
Route::get('/recuperatorio', 'ExamController@recuperatorio')->middleware('auth');
Route::post('/check-exam', 'ExamController@checkExam')->middleware('auth');
Route::post('/check-exam-recup', 'ExamController@checkExamRecup')->middleware('auth');

Route::get('/anac', 'AnacController@index')->middleware('auth');
Route::get('/user/{id}', 'UserController@index');


Auth::routes();
/* ------------------------------------ x ----------------------------------- */


Route::get('/tp', function () {
    return view('tp');
})->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
