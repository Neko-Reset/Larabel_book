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

// ‘/’でhttps://localhost:8000/へサクセス

// return viewでviewsフォルダのテンプレートを使用してる
Route::get('/', function () {
    return view('welcome');
});
