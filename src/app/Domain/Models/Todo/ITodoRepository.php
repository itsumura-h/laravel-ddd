<?php

namespace App\Domain\Models\Todo;

use App\Domain\Models\ValueObjects\TodoId;

interface ITodoRepository
{
    public function getTodoList();

    public function storeTodo(string $content);

    public function getTodoRow(int $id);

    public function deleteTodo(TodoId $id);
}
