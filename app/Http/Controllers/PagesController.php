<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function todosPage()
    {
        /***
         * Create
         */

        /*$todo = Todo::create([
            'title' => "Дочитать книгу",
            'note' => "Начиная с 99 страницы"
        ]);*/

        /*$todo = new Todo();
        $todo->title = "Дочитать книгу";
        $todo->note = "Начиная с 99 страницы";
        $todo->save();*/


        /***
         * Update table on id
         */

        /*$todo = Todo::find(1);
        if($todo){
            $todo->status = 1;
            $todo->save();
        }*/

        /***
         * Delete data
         */

        /*$todo = Todo::find(8);
            if($todo){
                $todo->delete();
            }*/

        /***
         * Вывод всех полей
         */
        $todos = Todo::all();

        return view('todos_done', [
            "todos" => $todos
        ]);
    }

    public function todosDone()
    {
        $todos = Todo::where('status', 1)->get();

        return view('todos_not_done', [
            "todos" => $todos
        ]);
    }

    public function todosNotDone()
    {
        $todos = Todo::where('status', 0)->get();

        return view('todos_not_done', [
            "todos" => $todos
        ]);
    }

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
}
