<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{

    public function test_sum(): void
    {
        $math = new Math();
        $result = $math->sum(1,2,3,4,5,6,7,8,9,10);
        $this->assertEquals(
            55,
            $result
        );
    }

}
