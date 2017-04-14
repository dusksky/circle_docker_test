<?php
/**
 * サンプル
 */
class Example01Message
{
    public function index()
    {
        $msg = $_GET['msg'];
        echo $this->makeMessage($msg);
    }

    public function makeMessage(string $msg)
    {
        return 'Hello - '.$msg;
    }
}

