<?php
use Ace\Types\JSON;

class JSONTest extends PHPUnit_Framework_TestCase
{
    public function getValues()
    {
        $obj = new StdClass;
        $obj->name = 'Finbar';
        
        $data = ['title' => 'The Dark Side of the Moon'];
        return[
            [$data, json_encode($data, 1), $data],
            [json_encode($data, 1), json_encode($data, 1), $data],
            [$obj, json_encode($obj, 1), (array)$obj],
            [json_encode($obj, 1), json_encode($obj, 1), (array)$obj],
            [null, '', null],
            ['', '', null],
            ['abcde', '', null],
            [['abcde'], json_encode(['abcde']), ['abcde']],
        ];
    }

    /**
    * @dataProvider getValues
    */
    public function testToString($variable, $string, $value)
    {
        $this->assertSame($string, new JSON($variable) . "");
    }

    /**
    * @dataProvider getValues
    */
    public function testToValue($variable, $string, $value)
    {
        $this->assertSame($value, (new JSON($variable))->value());
    }

    /**
    * @dataProvider getValues
    */
    public function testValid($variable, $string, $value)
    {
        $this->assertSame(!is_null($value), (new JSON($variable))->valid());
    }
}
