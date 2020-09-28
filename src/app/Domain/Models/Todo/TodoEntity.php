<?php

namespace App\Domain\Models\Todo;

use App\Domain\Models\ValueObjects\TodoId;
use App\Domain\Models\ValueObjects\TodoContent;

class TodoEntity
{
    private $id;
    private $content;

    public function __construct(TodoId $id, TodoContent $content)
    {
        $this->id = $id;
        $this->content = $content;
    }

}
