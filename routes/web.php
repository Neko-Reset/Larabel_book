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

// ブラウザのけつに/testとすると変数の中身がtestになってpでtestが出る仕組み
// getの{}の中に空白があると動かなくなる
// これは必須パラメータというやつ
// 第1引数に値がないとエラーになる /の後に何も入れなかったら

// 任意パラメーターにすれば値がなくてもアクセスできる
// Route::get( 'hello/{msg?}', function ( $msg = "no,message" )
// このようにすればok

// Route::get( 'hello/{msg}', function ( $msg ) {
//     // サンプルルーティング
//     $html = <<<EOF
//     <html>
//         <head>
//             <title>Hello</title>
//             <style>
//                 body { font-size: 16pt; color: #999; }
//                 h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px; }
//             </style>
//         </head>
//         <body>
//             <h1>Hello</h1>
//             <p>{$msg}</p>
//             <p>サンプルページ</p>
//         </body>
//     </html>
//     EOF;
//     return $html;
// } );


// indexのルーティング
route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');
