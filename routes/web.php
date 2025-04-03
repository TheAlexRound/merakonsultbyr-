<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class, 'index'])->name('welcome');

Route::get('/tjanster',[ViewController::class, 'tjanster']);

Route::get('/om-oss',[ViewController::class, 'omOss']);

Route::post('/form', [ViewController::class, 'sendemail']);
