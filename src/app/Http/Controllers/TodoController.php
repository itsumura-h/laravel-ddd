<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Usecases\TodoUsecase;

class TodoController extends Controller
{
    public function index(){
        $todoUsecase = new TodoUsecase();
        $todos = $todoUsecase->index();
        return view('pages.todo.index', ['todos'=>$todos]);
    }
}
