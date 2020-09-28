<?php

namespace App\Domain\Models\Todo;

interface ITodoRepository
{
    public function getTodoList();

    public function storeTodo(string $content);
}
