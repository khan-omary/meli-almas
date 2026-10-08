<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmplyeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostCommentController;

Route::get('/', function (){ return view('index');});

Route::resource('project', ProjectController::class);
Route::resource('Post_comment', PostCommentController::class);
Route::resource('job', JobController::class);
Route::resource('team', EmplyeeController::class);

Route::get('/about', function (){ return view('about');});
Route::get('/contact', function (){ return view('contact');});
Route::get('/services', function (){ return view('services');});

