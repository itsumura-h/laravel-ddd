<?php

namespace App\Domain\Usecases;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\ValueObjects\TodoContent;
use App\Domain\Models\Todo\TodoService;
use App\Domain\Models\Todo\Repositories\MockRepository;
use App\Domain\Models\Todo\Repositories\RdbRepository;


class TodoUsecase
{
    function __construct()	{
        // $repository = new MockRepository();
        $repository = new RdbRepository();
		$this->service = new TodoService($repository);
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

    public function getTodoRow($id): array
    {
        $id = new TodoId($id);
        $todo = $this->service->getTodoRow($id);
        return $todo->toDict();
    }

    public function deleteTodo($id):void
    {
        $id = new TodoId($id);
        $this->service->deleteTodo($id);
    }
}
