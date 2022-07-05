<?php

namespace Questions;

class QuestionFour
{
    public function superDigit($n)
    {
        if ($n < 10) {
            return $n;
        }
        $s = (string)$n;
        $chars = str_split($s);
        $output = 0;
        foreach ($chars as $c) {
            $output += $c;
        }
        return $this->superDigit($output);
    }
}