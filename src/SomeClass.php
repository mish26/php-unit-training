<?php
class SomeClass
{
    public function doSomething(): int
    { 
        return rand(1,100);
    }

    public function date(): DateTime
    { 
        return new DateTime();
    }
}
