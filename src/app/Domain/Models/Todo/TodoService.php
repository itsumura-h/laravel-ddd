<?php

namespace App\Domain\Models\Todo;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\ValueObjects\TodoContent;
use App\Domain\Models\Todo\TodoEntity;


class TodoService
{
    function __construct($repository){
		$this->repository = $repository;
    }

    public function getTodoList():array
    {
        $todoObjList = $this->repository->getTodoList();
        return $todoObjList;
    }

    public function storeTodo(TodoContent $content):void
    {
        $this->repository->storeTodo($content->get());
    }

    public function getTodoRow(TodoId $id):TodoEntity
    {
        $todo = $this->repository->getTodoRow($id->get());
        return $todo;
    }

    public function deleteTodo(TodoId $id):void
    {
        $this->repository->deleteTodo($id);
    }
}
