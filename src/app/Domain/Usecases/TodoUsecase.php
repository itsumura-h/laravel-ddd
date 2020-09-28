<?php

namespace App\Domain\Usecases;

use App\Domain\Models\Todo\TodoEntity;
use App\Domain\Models\ValueObjects\TodoContent;
use App\Domain\Models\Todo\TodoService;


class TodoUsecase
{
    function __construct()	{
		$this->service = new TodoService();
	}

    public function getTodoList(): array
    {
        $todoObjList = $this->service->getTodoList();

        $todoList = [];
        foreach($todoObjList as $todoObj){
            $todoList[] = $todoObj->toDict();
        }
        return $todoList;
    }

    public function storeTodo(string $content): void
    {
        $content = new TodoContent($content);
        $this->service->storeTodo($content);
    }
}
