<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use Questions\QuestionOne;

class TestQuestionOne extends TestCase
{

    public function providerCheckDuplicateCharacter()
    {
        return [
            ['documentarily', 'Double-down'],
            ['aftershock', 'Euclidean'],
            ['countryside', 'epidemic'],
            ['six-year-old', 'aba'],
        ];
    }

    /**
     * @dataProvider providerCheckDuplicateCharacter
     */
    public function testCheckDuplicateCharacter($validString, $invalidString)
    {
        $q = new QuestionOne();
        $this->assertTrue($q->checkDuplicatedCharacter($validString));
        $this->assertFalse($q->checkDuplicatedCharacter($invalidString));
    }
}
