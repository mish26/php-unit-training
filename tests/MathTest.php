<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

    public function testSum(): void
    {
        $math = new Math();
        $result = $math->sum(1,2,3,4,5,6,7,8,9,10);
        $this->assertEquals(
            55,
            $result
        );
    }

    public function testNull(): void
    {
        $this->assertSame(
            55,
            "55",
            "not same"
        );   
    }


    public function testCheckNumberOwnTestExcept(): void
    {
        $this->expectException(LogicException::class);
        $obj = new Math();
        $obj->isOne(2);
    }

    public function testFail(): void
    {
        $this->fail('Not yet implemented');
    }

}
