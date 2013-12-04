<?php
use Ace\Types\String;

class StringTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            [1, "1"],
            [1.0, "1"],
            ["1.0.0", "1.0.0"],
            [0, "0"],
            [[], print_r([], 1)],
            [['k' => 'v'], print_r(['k' => 'v'], 1)],
            ["The piper at the gates of dawn", "The piper at the gates of dawn"],
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
        $boolean = new String($variable);
        $this->assertSame($string, $boolean->value());
    }
}
