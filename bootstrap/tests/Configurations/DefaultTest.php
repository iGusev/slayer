<?php


class DefaultTest extends PHPUnit_Framework_TestCase
{
    public function testAppFile()
    {
        dd(config('app')->toArray());

        $this->assertContains();
    }
}