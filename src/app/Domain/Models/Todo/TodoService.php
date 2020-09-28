<?php

namespace App\Domain\Models\Todo;

use Log;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\Todo\TodoEntity;
use App\Domain\Models\Todo\TodoRepository;
use App\Domain\Models\ValueObjects\TodoContent;

class TodoService
{
    function __construct()	{
		$this->repository = new TodoRepository();
    }

    public function getTodoList(): array
    {
        $todoList = $this->repository->getTodoList();
        $todoObjList = [];
        foreach($todoList as $todo){
            $id = new TodoId($todo->id);
            $content = new TodoContent($todo->content);
            $todo = new TodoEntity($id, $content);
            $todoObjList[] = $todo;
        }
        return $todoObjList;
    }

    public function storeTodo(TodoContent $content): void
    {
        $this->repository->storeTodo($content->get());
    }
}
