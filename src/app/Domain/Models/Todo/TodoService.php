<?php

namespace App\Domain\Models\Todo;

use Log;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\Todo\TodoEntity;
use App\Domain\Models\Todo\TodoRepository;
use App\Domain\Models\ValueObjects\TodoContent;

class TodoService
{
    function __construct()	{
		$this->repository = new TodoRepository();
    }

    public function index(){
        $todo_list = $this->repository->get_todo_list();
        $todo_obj_list = [];
        foreach($todo_list as $todo){
            $id = new TodoId($todo['id']);
            $content = new TodoContent($todo['content']);
            $todo = new TodoEntity($id, $content);
            Log::debug(print_r($todo, true));
        }
    }
}
