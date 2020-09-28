<?php

namespace App\Domain\Models\Todo;
use Log;
use DB;
use Illuminate\Support\Collection;

class TodoRepository
{
    public function getTodoList(): Collection
    {
        $todoList = DB::table('todo')->get();
        return $todoList;
    }

    public function storeTodo(string $content): void
    {
        DB::table('todo')->insert([
            'content' => $content
        ]);
    }
}
