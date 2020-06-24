<?php declare(strict_types=1);
class Counter
{
    private $count = 0;

    public function increment() :int 
    {
        return $this->count++;
    }
}