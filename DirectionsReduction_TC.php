<?php
class DirectionReductionTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
        $this->revTest(dirReduc($a), ["WEST"]);
        $b=["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"];
        $this->revTest(dirReduc($b), []);
        $c = ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"];
        $this->revTest(dirReduc($c), ["NORTH"]);
        $d = ["NORTH","NORTH","SOUTH","EAST","NORTH","SOUTH","EAST"];
        $this->revTest(dirReduc($d), ["NORTH","EAST","EAST"]);
    }
}
