This is a php quiz with five questions.

Each question is tested by the phpunit.

The quiz questions are:

Exercise 1 - Words without any repeating letters

Create a function that returns TRUE if a word does not have any repeating letter.

Examples of valid words:

    documentarily
    aftershock
    countryside
    six-year-old

Examples of invalid words:

    Double-down
    Euclidean
    epidemic

The function must be in a dedicated class and must be fully unit tested. 

Exercise 2 - Literal date parsing

Create a function taking a description of a date, and returning the actual date in the "YYYY-mm-dd" format.

Example:

"The first Monday of October 2019" => "2019-10-07"

"The third Tuesday of October 2019" => "2019-10-15"

"The last Wednesday of October 2019" => "2019-10-30"

The descriptors you are expected to support are: first, second, third, fourth, fifth, last.

The function must be in a dedicated class and must be fully unit tested.

Exercise 3 - String merge

Write a PHP function that merges two, character by character.

E.g : "MICHAEL", "JORDAN" = "MJIOCRHDAAENL"

The function must be in a dedicated class and must be fully unit tested.

Exercise 4 - Super-digit

Given a positive integer, compute the sum of each individual digit. If the resulting value is a single-digit number, return that number, otherwise repeat the operation until a single-digit number is reached.

For example:

4 --> 4

18 --> 1 + 8 = 9

258 --> 2 + 5 + 8 = 15 --> 1 + 5 = 6

The function must be in a dedicated class and must be fully unit tested.

Exercise 5 - XML import

There is an XML file attached to this email. The format is a standard REAXML (Real Estate XML:  http://reaxml.realestate.com.au/docs/reaxml1-xml-format.html), containing different property types.

Create a function to parse this XML file and store the properties in an associative array, the key being the uniqueID and the value being the property type (property type = node name).

 