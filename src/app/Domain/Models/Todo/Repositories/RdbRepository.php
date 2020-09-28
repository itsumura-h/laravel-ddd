<?php

namespace App\Domain\Models\Todo\Repositories;

use DB;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\ValueObjects\TodoContent;
use App\Domain\Models\Todo\TodoEntity;
use App\Domain\Models\Todo\ITodoRepository;



class RdbRepository implements ITodoRepository
{
    public function getTodoList(): array
    {
        $todoList = DB::table('todo')->get();
        $todoObjList = [];
        foreach($todoList as $todo){
            $todoObjList[] = new TodoEntity(
                new TodoId($todo->id),
                new TodoContent($todo->content)
            );
        }
        return $todoObjList;
    }

    public function storeTodo(string $content): void
    {
        DB::table('todo')->insert([
            'content' => $content
        ]);
    }

    public function getTodoRow(int $id):TodoEntity
    {
        $todo = DB::table('todo')->where('id', '=', $id)->first();
        $todo = new TodoEntity(
            new TodoId($todo->id),
            new TodoContent($todo->content),
        );
        return $todo;
    }

    public function deleteTodo(TodoId $id):void
    {
        DB::table('todo')->delete($id->get());
    }
}
