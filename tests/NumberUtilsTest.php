<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class NumberUtilsTest extends TestCase
{

    public function testDivide(): void
    {
        $isEven = NumberUtils::isEven(2);
        
        $this->assertTrue(
            $isEven
        );
    }

}
