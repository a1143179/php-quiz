<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Questions\QuestionFour;

class TestQuestionFour extends TestCase
{
    public function testSuperDigit()
    {
        $q = new QuestionFour();
        $this->assertEquals(4, $q->superDigit(4));
        $this->assertEquals(9, $q->superDigit(18));
        $this->assertEquals(6, $q->superDigit(258));
    }
}