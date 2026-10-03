<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){ return view('index');});
Route::get('/projects', function (){ return view('project');});
Route::get('/about', function (){ return view('about');});
Route::get('/contact', function (){ return view('contact');});