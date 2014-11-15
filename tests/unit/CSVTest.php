<?php
use Ace\Types\CSV;

class CSVTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        return[
            ["a,b,c", "a,b,c", [["a","b","c"]]],
            ["a,b,c\nd,e,f", "a,b,c\nd,e,f", [["a","b","c"],["d","e","f"]]],
            ["a", "a", [["a"]]],
            ["a\nz", "a\nz", [["a"],["z"]]],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $value)
    {
        $this->assertSame($string, new CSV($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $value)
    {
        $this->assertSame($value, (new CSV($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValidIsAlwaysTrue($variable, $string, $value)
    {
        $this->assertTrue((new CSV($variable))->valid());
    }
}
