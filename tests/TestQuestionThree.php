<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Questions\QuestionThree;

class TestQuestionThree extends TestCase
{
    public function testMerge()
    {
        $q = new QuestionThree();
        $this->assertEquals('MJIOCRHDAAENL', $q->merge('MICHAEL', 'JORDAN'));
    }
}