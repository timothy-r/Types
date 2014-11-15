<?php
use Ace\Types\String;

class StringTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        $obj = new StdClass;
        $obj->name = 'Finbar';

        $test_obj = new TestClass;

        return[
            [1, "1"],
            [1.0, "1"],
            ["1.0.0", "1.0.0"],
            [0, "0"],
            [[], print_r([], 1)],
            [['k' => 'v'], print_r(['k' => 'v'], 1)],
            ["The piper at the gates of dawn", "The piper at the gates of dawn"],
            [$obj, print_r($obj, true)],
            [$test_obj, $test_obj->__toString()],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string)
    {
        $this->assertSame($string, new String($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string)
    {
        $this->assertSame($string, (new String($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValidIsAlwaysTrue($variable, $string)
    {
        $this->assertTrue((new String($string))->valid());
    }
}


class TestClass
{
    private $name = 'Default name';

    public function __toString()
    {
        return '{"name":"' . $this->name . '"}';
    }
}
