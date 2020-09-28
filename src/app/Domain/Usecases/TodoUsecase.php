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
        return $todoObjList;
    }

    public function storeTodo(string $content): void
    {
        $content = new TodoContent($content);
        $this->service->storeTodo($content);
    }
}
