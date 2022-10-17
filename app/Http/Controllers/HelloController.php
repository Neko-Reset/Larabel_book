<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
     // ここに中身を書いていく
    // ルートパラメータを使用する
    
    public function index( $id = "no_name", $pass = "unknown" ) {
        return <<<EOF
        <html>
        <head>
            <title>Hello/index</title>
            <style>
                body { font-size: 16pt; color: #999; }
                h1 { font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px; }
            </style>
        </head>
        <body>
            <h1>index</h1>
            <p>indexのページ</p>
            <ul>
                <li>ID:{$id}</li>
                <li>PASS:{$pass}</li>
            </ul>
        </body>
        </html>
        EOF;
    }
}
