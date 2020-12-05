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

/*Route::get('/', function () {
    return view('welcome');
});*/

//ROUTE PAR DEFAUT ----------------------------------
use App\Http\Controllers\PostsController;
Route::get('/', [PostsController::class, 'index']);

//ROUTE DU DETAIL D'UN POST ---------------------------

Route::get('/{post}/{slug}', [PostsController::class, 'show'])
                ->where(['post'=> '[1-9][0-9]*',
                         'slug'=>'[a-z0-9][a-z0-9\-]*'])
                ->name('posts.show');

//ROUTE POUR VOYAGER (ADMIN) ---------------------------
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
