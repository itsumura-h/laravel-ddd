<?php

namespace App\Domain\Models\Todo;
use Log;
use DB;

class TodoRepository
{
    public function get_todo_list(){
        Log::debug('===');
        $todo_list = DB::table('todo')->get();
        return $todo_list;
    }
}
