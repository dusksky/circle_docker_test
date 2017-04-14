<?php
include_once('sample.php');

class HelloTest extends PHPUnit_Framework_TestCase
{
    private $msg;

    /**
     * 初期化
     */
    public function setUp()
    {
        $this->msg = 'ringo';
    }

    /**
     * sample
     */
    public function testSample()
    {
        $ex = new Example01Message();
        $this->assertEquals($ex->makeMessage($this->msg), 'Hello - ringo');
    }
}


