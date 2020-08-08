<?php
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/welcome2', function () {
    return view('welcome2');
});
Route::get('/register','AuthController@registration');
Route::get('welcome2', 'AuthController@welcome2');
Route::post('/process','AuthController@process');
Route::get('/master', 'AuthController@master');
Route::get('/data-tables', 'AuthController@data');
Route::get('/pertanyaan/create', 'PostController@createPertanyaan'); //memnampilkan form u/ pertanyaan
Route::get('/pertanyaan', 'PostController@insertPertanyaan'); 

?>
