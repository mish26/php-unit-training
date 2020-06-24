<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    public function testDivide(): void
    {
        $counter = new Counter();
        
        $result = 0;
        for ($i = 1; $i <= 50; $i++) {
            $counter->increment();
        }
        $result = $counter->increment();
        $this->assertEquals(
            $result,
            50
        );
    }

}
