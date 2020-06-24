<?php declare(strict_types=1);
class StringUtils
{
    public static function toSnakeCase(string $text) :string
    {    
        return ltrim(strtolower(preg_replace('/[A-Z]/', '_\0', $text)), '_');        
    }
}