<?php
use Ace\Types\AnArray;

class AnArrayTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        $obj = new StdClass;
        $obj->name = 'Ned';

        return[
            [[1], print_r([1], 1), [1]],
            [['a' => 1], print_r(['a' => 1], 1), ['a' => 1]],
            [$obj, print_r(['name' => 'Ned'], 1), ['name' => 'Ned']],
            [null, print_r([], 1), []],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $expected)
    {
        $this->assertSame($string, new AnArray($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $expected)
    {
        $boolean = new AnArray($variable);
        $this->assertSame($expected, $boolean->value());
    }
}
