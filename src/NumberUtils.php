<?php declare(strict_types=1);
class NumberUtils
{
    public static function isEven(int $num) :bool
    {
        return $num % 2 == 0;
    }
}