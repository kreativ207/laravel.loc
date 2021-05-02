<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function helloPage()
    {
        $res = [
            'name' => 'Nikolay',
            'skills' => ['HTML5', 'CSS3', 'VUE.js', 'laravel']
        ];

        if (1 == 1){
            $res['stringTest'] = Str::random(10);
        }

        return view('hello', $res);
    }

    public function testPage()
    {
        return view('test');
    }
}
