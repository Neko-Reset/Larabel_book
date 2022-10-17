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

// サンプルルーティング
$html = <<<EOF
    <html>
        <head>
            <title>Hello</title>
            <style>
                body { font-size: 16pt; color: #999; }
                h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px; }
            </style>
        </head>
        <body>
            <h1>Hello</h1>
            <p>サンプルページ</p>
        </body>
    </html>
EOF;

Route::get( 'hello', function () use ( $html ) {
    return $html;
} );
