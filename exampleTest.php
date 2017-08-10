<?php

class exampleTest extends PHPUnit\Framework\TestCase{

    public function testTrue(){
        $this->assertTrue(true);
    }

    public function testCount(){
        $array = [1,2,3,4];

        $this->assertCount(4, $array);
    }
}

?>