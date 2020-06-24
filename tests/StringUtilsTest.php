<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class StringUtilsTest extends TestCase
{

    public function testToSnakeCase(): void
    {
        $result = StringUtils::toSnakeCase("HelloWorld");
        assertEquals($result, "hello_world");
    }

}
