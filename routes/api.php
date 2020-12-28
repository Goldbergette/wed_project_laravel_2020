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


//AJOUT D'UN COMMENTAIRE
//PATTERN: api/store
//CTRL: CommentsController
//ACTION: store

use App\Http\Controllers\CommentsController;
Route::post('commentaires/store', [CommentsController::class, 'store'])
->name('api.commentaires.store');
