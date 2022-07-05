<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Questions\QuestionFive;

class TestQuestionFive extends TestCase
{
    public function testParseXml()
    {
        $q = new QuestionFive();
        $this->assertEquals([
            '1P3115' => 'commercial',
            '1P0116' => 'commercial',
            '1P0006' => 'commercial',
            '1P0117' => 'commercial',
        ], $q->parseXml(__DIR__ . '/sample-reaxml.xml'));
    }
}