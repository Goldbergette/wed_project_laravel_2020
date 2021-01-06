<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTE AJAX-------------------------------------------
//MORE POSTS
//PATTERN: api/ajaxMore
//CTRL: PostsController
use App\Http\Controllers\PostsController;
Route::get('/ajax/morePosts', [PostsController::class, 'ajaxMore'])
                ->name('api.posts.ajaxMore');

//AJOUT D'UN COMMENTAIRE
//PATTERN: api/store
//CTRL: CommentsController
use App\Http\Controllers\CommentsController;
Route::get('/ajax/store', [CommentsController::class, 'store'])
               ->name('api.commentaires.store');
