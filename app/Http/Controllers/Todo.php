<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Todo extends Controller
{
    protected $todos;
    public function index() {
        $this->todos = [
          '1'=>'homework',
          '2'=>'workout',
          '3'=>'cleaning'
        ];
        return view('todo')->with('todos', $this->todos);
    }

    public function greet() {
        return view('welcome');
    }
}
