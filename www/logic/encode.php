<?php

$message = $_POST['messageToEncode'];

$messageArray = str_split($message);
$encodedArray = array();

//print_r($messageArray);

foreach($messageArray as $char)
{
    //numbers and spaces
    if($char == "1")
    {
        array_push($encodedArray, "yep"); 
    }
    elseif($char == "2")
    {
        array_push($encodedArray, "nope");
    }
    elseif($char == "3")
    {
        array_push($encodedArray, "hippo");
    }
    elseif($char == "4")
    {
        array_push($encodedArray, "nine");
    }
    elseif($char == "5")
    {
        array_push($encodedArray, "love");
    }
    elseif($char == "6")
    {
        array_push($encodedArray, "insane");
    }
    elseif($char == "7")
    {
        array_push($encodedArray, "amanda");
    }
    elseif($char == "8")
    {
        array_push($encodedArray, "guitar");
    }
    elseif($char == "9")
    {
        array_push($encodedArray, "computers");
    }
    elseif($char == " ")
    {
        array_push($encodedArray, "henry");
    }
    //alphebetic letters
    if($char == "a" || $char == "A")
    {
        array_push($encodedArray, "arizona"); 
    }
    elseif($char == "b" || $char == "B")
    {
        array_push($encodedArray, "hillary");
    }
    elseif($char == "c" || $char == "C")
    {
        array_push($encodedArray, "Ana");
    }
    elseif($char == "d" || $char == "D")
    {
        array_push($encodedArray, "home");
    }
    elseif($char == "e" || $char == "E")
    {
        array_push($encodedArray, "coffee");
    }
    elseif($char == "f" || $char == "F")
    {
        array_push($encodedArray, "Biking");
    }
    elseif($char == "g" || $char == "G")
    {
        array_push($encodedArray, "enforcement");
    }
    elseif($char == "h" || $char == "H")
    {
        array_push($encodedArray, "well");
    }
    elseif($char == "i" || $char == "I")
    {
        array_push($encodedArray, "turn");
    }
    elseif($char == "j" || $char == "J")
    {
        array_push($encodedArray, "Zack");
    }
    if($char == "k" || $char == "K")
    {
        array_push($encodedArray, "Dylan"); 
    }
    elseif($char == "l" || $char == "L")
    {
        array_push($encodedArray, "hills");
    }
    elseif($char == "m" || $char == "M")
    {
        array_push($encodedArray, "broiler");
    }
    elseif($char == "n" || $char == "N")
    {
        array_push($encodedArray, "hat");
    }
    elseif($char == "o" || $char == "O")
    {
        array_push($encodedArray, "hair");
    }
    elseif($char == "p" || $char == "P")
    {
        array_push($encodedArray, "paper");
    }
    elseif($char == "q" || $char == "Q")
    {
        array_push($encodedArray, "tiger");
    }
    elseif($char == "r" || $char == "R")
    {
        array_push($encodedArray, "leaf");
    }
    elseif($char == "s" || $char == "S")
    {
        array_push($encodedArray, "hinge");
    }
    elseif($char == "t" || $char == "T")
    {
        array_push($encodedArray, "ellen");
    }
    if($char == "u" || $char == "U")
    {
        array_push($encodedArray, "marker"); 
    }
    elseif($char == "v" || $char == "V")
    {
        array_push($encodedArray, "golf");
    }
    elseif($char == "w" || $char == "W")
    {
        array_push($encodedArray, "fence");
    }
    elseif($char == "x" || $char == "X")
    {
        array_push($encodedArray, "mini");
    }
    elseif($char == "y" || $char == "Y")
    {
        array_push($encodedArray, "headphones");
    }
    elseif($char == "z" || $char == "Z")
    {
        array_push($encodedArray, "water");
    }
    //special puncuation chars, not in numbers section on keyboard
    elseif($char == ".")
    {
        array_push($encodedArray, "fire");
    }
    elseif($char == "'")
    {
        array_push($encodedArray, "whoops");
    }
    elseif($char == ",")
    {
        array_push($encodedArray, "plane");
    }
    elseif($char == "/")
    {
        array_push($encodedArray, "eighth");
    }
    elseif($char == "|")
    {
        array_push($encodedArray, "by");
    }
    elseif($char == "?")
    {
        array_push($encodedArray, "swimming");
    }
    elseif($char == "<")
    {
        array_push($encodedArray, "omg");
    }
    elseif($char == ">")
    {
        array_push($encodedArray, "me");
    }
    elseif($char == ":")
    {
        array_push($encodedArray, "untrue");
    }
    elseif($char == ";")
    {
        array_push($encodedArray, "weather");
    }
    elseif($char == ";")
    {
        array_push($encodedArray, "weather");
    }
    elseif($char == "`")
    {
        array_push($encodedArray, "dowap");
    }
    elseif($char == "~")
    {
        array_push($encodedArray, "bad");
    }
    elseif($char == "{")
    {
        array_push($encodedArray, "tush");
    }
    elseif($char == "}")
    {
        array_push($encodedArray, "deep");
    }
    elseif($char == "]")
    {
        array_push($encodedArray, "hot");
    }
    elseif($char == "[")
    {
        array_push($encodedArray, "jumbo");
    }
    elseif($char == '"')
    {
        array_push($encodedArray, "eleven");
    }
    elseif($char == "\\")
    {
        array_push($encodedArray, "congrats");
    }
    elseif($char == "-")
    {
        array_push($encodedArray, "help");
    }
    elseif($char == "_")
    {
        array_push($encodedArray, "honey");
    }
    elseif($char == "=")
    {
        array_push($encodedArray, "tape");
    }
    elseif($char == "+")
    {
        array_push($encodedArray, "IT");
    }
    //special chars on number inputs when pressing shift
    elseif($char == "!")
    {
        array_push($encodedArray, "get");
    }
    elseif($char == "@")
    {
        array_push($encodedArray, "Massachutes");
    }
    elseif($char == "#")
    {
        array_push($encodedArray, "celing");
    }
    elseif($char == "$")
    {
        array_push($encodedArray, "fourtenpm");
    }
    elseif($char == "%")
    {
        array_push($encodedArray, "hank");
    }
    elseif($char == "^")
    {
        array_push($encodedArray, "ULF");
    }
    elseif($char == "&")
    {
        array_push($encodedArray, "eraser");
    }
    elseif($char == "*")
    {
        array_push($encodedArray, "reserved");
    }
    elseif($char == "(")
    {
        array_push($encodedArray, "excel");
    }
    elseif($char == ")")
    {
        array_push($encodedArray, "effiencet");
    }
  


}

$implodeArray = implode(" ", $encodedArray);

header("Location: /encode.html?encodedstring=$implodeArray");


?>