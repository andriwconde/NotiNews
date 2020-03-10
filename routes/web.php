<?php
use App\Article;
/*use App\Article;
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
  $articulos = Article::paginate(7);
  $vac = compact("articulos");
    return view('inicio',$vac);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/article/edit/{id}', 'ArticleController@edit');
Route::patch('/article/up/{id}', 'ArticleController@update');
Route::get('/article/create', 'ArticleController@create')->middleware('Escritor');
Route::post('/article', 'ArticleController@index');
Route::post('/article/create', 'ArticleController@store')->middleware('Escritor');
Route::get('/article/delete', 'ArticleController@del')->middleware('Escritor');
Route::delete('/article/{id}', 'ArticleController@destroy')->middleware('Escritor');
Route::get('/article/show/{id}', 'ArticleController@show');
