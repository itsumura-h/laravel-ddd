<?php

namespace App\Domain\Models\Todo;

use App\Domain\Models\ValueObjects\TodoContent;


class TodoService
{
    function __construct($repository){
		$this->repository = $repository;
    }

    public function getTodoList(): array
    {
        $todoObjList = $this->repository->getTodoList();
        return $todoObjList;
    }

    public function storeTodo(TodoContent $content): void
    {
        $this->repository->storeTodo($content->get());
    }
}
