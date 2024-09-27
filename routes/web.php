<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title= "Available Jobs";
    $jobs = [
        'Web Developer',
        'Database Admin',
        'Software Engineer',
        'Systems Analyst'
    ];
    return view("jobs.index", compact("title", "jobs"));
})->name('jobs');

Route::get('/jobs/create', function () {
    return view("jobs.create");
})->name('jobs.create');

// Route::get('/posts/{id}', function(string $id){
//     return 'Post ' . $id;
// });

// Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId){
//     return 'Post ' . $id . 'Comment ' . $commentId;
// });