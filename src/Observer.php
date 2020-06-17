<?php
class Observer
{
    public function update($argument)
    {
        // なにかをします
    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
        // なにかをします
    }

    // その他のメソッド
}
