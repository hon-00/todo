<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view('index',compact('todos'));
    }

    public function store(Request $request){
        $todo = $request->only(['content']);
        Todo::create($todo);

        return redirect('/');
    }
}
