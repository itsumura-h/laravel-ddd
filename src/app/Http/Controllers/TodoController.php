<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Usecases\TodoUsecase;

class TodoController extends Controller
{
    public function index(){
        $todoUsecase = new TodoUsecase();
        $todoList = $todoUsecase->getTodoList();
        return view('pages.todo.index', ['todoList'=>$todoList]);
    }

    public function store(Request $request){
        $content = $request->input('content');
        $todoUsecase = new TodoUsecase();
        $todoUsecase->storeTodo($content);
        return redirect('/todo');
    }
}
