<?php
use PHPUnit\Framework\TestCase;

class SomeClassStubTest extends TestCase
{
    public function testStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->createMock(SomeClass::class);

        // スタブの設定を行います
        $stub->method('doSomething')
             ->willReturn(15);

        // $stub->doSomething() をコールすると
        // 'foo' を返すようになります
        $this->assertSame(15, $stub->doSomething());
    }
}
