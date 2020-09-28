<?php

namespace App\Domain\Models\ValueObjects;

class TodoContent
{
    private $value;

    public function __construct(string $value)
    {
        if(strlen($value) < 1){
            throw new Exception('TodoContentは1文字以上です');
        }
        $this->value = $value;
    }

    public function get(){
        return $this->value;
    }
}
