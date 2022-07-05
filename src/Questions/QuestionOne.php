<?php
namespace Questions;

class QuestionOne
{
    public function checkDuplicatedCharacter($word)
    {
        $word = strtolower(preg_replace('/[^a-zA-Z]+/', '', $word));
        $chars = str_split($word);
        $uniqueChars = array_unique($chars);
        return count($uniqueChars) === count($chars);
    }


}

