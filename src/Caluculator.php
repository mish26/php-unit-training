<?php declare(strict_types=1);
class Caluculator
{
    public function divide(int $x, int $y) :int 
    {
        if ($y === 0) {
            throw new Exception();
        }
        return $x / $y;
    }

}