<?php

namespace App\Domain\Usecases;

use App\Domain\Models\Todo\TodoService;


class TodoUsecase
{
    function __construct()	{
		$this->service = new TodoService();
	}

    public function index(){
        $this->service->index();
    }
}
