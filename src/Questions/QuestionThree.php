<?php
namespace Questions;

class QuestionThree 
{
    public function merge($str1, $str2)
    {
        $chars1 = str_split($str1);
        $chars2 = str_split($str2);
        $output = [];
        foreach ($chars1 as $i1 => $c1) {
            $output[] = $chars1[$i1];
            if (isset($chars2[$i1])) {
                $output[] = $chars2[$i1];
            }
        }
        return implode('', $output);
    }
}