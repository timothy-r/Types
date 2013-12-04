<?php
use Ace\Types\String;

class StringTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            [1, "1", "1"],
            [1.0, "1.0", "1.0"],
            ["1.0.0", "1.0.0", "1.0.0"],
            [0, "0", "0"],
            [[], "[]", "[]"],
            ["The piper at the gates of dawn", "The piper at the gates of dawn", "The piper at the gates of dawn"],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($value, $string, $value)
    {
        $boolean = new String($value);
        $this->assertSame($string, "$boolean");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($value, $string, $value)
    {
        $boolean = new String($value);
        $this->assertSame($value, $boolean->value());
    }
}
