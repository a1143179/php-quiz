<?php
namespace Questions;
class QuestionFive
{
    public function parseXml($file)
    {
        $output = [];
        $xml = simplexml_load_file($file);
        foreach ($xml->commercial as $c) {
            $output[(string)$c->uniqueID->__toString()] = 'commercial';
        } 
        return $output;
    }
}