<?php

require 'Game.php';

class GameTest extends PHPUnit_Framework_TestCase
{
/*
    public function testCountAllLines() {
        $loc = new Game();
        $this->assertEquals(7,$loc->count());
    }
    public function testCountLinesWithoutOneLineComments() {
        $loc = new Game();
        $this->assertEquals(6,$loc->count('example-code.java'));
    }
*/

    public function testCountForExample1() {
        $loc = new Game();
        $this->assertEquals(3,$loc->count('example-code.java'));
    }

    public function testCountForExample2() {
        $loc = new Game();
        $this->assertEquals(5,$loc->count('example-code2.java'));
    }

}
