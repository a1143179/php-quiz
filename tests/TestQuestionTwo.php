<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Questions\QuestionTwo;

class TestQuestionTwo extends TestCase
{

    public function providerTest()
    {
        return [
            ['The first Monday of October 2019', '2019-10-07'],
            ['The third Tuesday of October 2019', '2019-10-15'],
            ['The last Wednesday of October 2019', '2019-10-30'],
        ];
    }

    /**
     * @dataProvider providerTest
     */
    public function testStringToDate($input, $expected)
    {
        $q = new QuestionTwo();
        $this->assertEquals($expected, $q->stringToDate($input));
    }
}