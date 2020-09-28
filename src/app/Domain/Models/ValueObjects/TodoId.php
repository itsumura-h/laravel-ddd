<?php

namespace App\Domain\Models\ValueObjects;

class TodoId
{
    private $value;

    public function __construct(int $value)
    {
        if($value < 1){
            throw new Exception('TodoIdはゼロ以上の数字です');
        }
        $this->value = $value;
    }

    public function get(){
        return $this->value;
    }
}
