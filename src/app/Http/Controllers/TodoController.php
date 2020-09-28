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

    public function show($id){
        $todoUsecase = new TodoUsecase();
        $todo = $todoUsecase->getTodoRow($id);
        return view('pages.todo.show', ['todo'=>$todo]);
    }

    public function destroy($id){
        $todoUsecase = new TodoUsecase();
        $todoUsecase->deleteTodo($id);
        return redirect('/todo');
    }
}
