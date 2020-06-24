<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class CaluculatorTest extends TestCase
{

    public function testDivide(): void
    {
        $this->expectException(Exception::class);
        $calc = new Caluculator();
        $result = $calc->divide(1, 0);    
    }

}
