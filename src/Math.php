<?php declare(strict_types=1);
final class Math
{
    public function sum(int ...$args): int
    {
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }

        return $sum;
    }
}