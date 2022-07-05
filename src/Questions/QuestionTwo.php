<?php
namespace Questions;

class QuestionTwo {
    public function stringToDate($string)
    {
        $string = str_replace('The', '', $string);
        return date('Y-m-d', strtotime($string));
    }
}