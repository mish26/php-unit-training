<?php declare(strict_types=1);
class Math
{
    public function sum(int ...$args): int
    {
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }

        return $sum;
    }

    public function isOne(int $number):bool
    {
        if ($number !== 1) {
            throw new LogicException('Invalid Param : ' . $number);
        }
        return true;
    }

}