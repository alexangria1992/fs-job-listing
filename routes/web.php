<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);

// Route::get('/posts/{id}', function(string $id){
//     return 'Post ' . $id;
// });

// Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId){
//     return 'Post ' . $id . 'Comment ' . $commentId;
// });