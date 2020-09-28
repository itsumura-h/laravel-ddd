<?php

namespace App\Domain\Models\Todo\Repositories;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\ValueObjects\TodoContent;
use App\Domain\Models\Todo\TodoEntity;
use App\Domain\Models\Todo\ITodoRepository;

class MockRepository implements ITodoRepository
{
    public function getTodoList()
    {
        return [
            new TodoEntity(
                new TodoId(1),
                new TodoContent('aaa'),
            ),
            new TodoEntity(
                new TodoId(2),
                new TodoContent('bbb'),
            ),
        ];
    }

    public function storeTodo(string $content):void
    {

    }

    public function getTodoRow(int $id):TodoEntity
    {
        return new TodoEntity(
            new TodoId($id),
            new TodoContent('aaaaa')
        );
    }

    public function deleteTodo(TodoId $id):void
    {

    }
}
