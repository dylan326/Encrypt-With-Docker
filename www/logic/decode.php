<?php

$message = $_POST['messageToDecode'];

$messageArray = explode(" ",$message);
$decodeArray = array();

//print_r($messageArray);

foreach($messageArray as $word)
{
    //numbers and spaces
    if($word == "yep")
    {
        array_push($decodeArray, "1"); 
    }
    elseif($word == "nope")
    {
        array_push($decodeArray, "2");
    }
    elseif($word == "hippo")
    {
        array_push($decodeArray, "3");
    }
    elseif($word == "nine")
    {
        array_push($decodeArray, "4");
    }
    elseif($word == "love")
    {
        array_push($decodeArray, "5");
    }
    elseif($word == "insane")
    {
        array_push($decodeArray, "6");
    }
    elseif($word == "amanda")
    {
        array_push($decodeArray, "7");
    }
    elseif($word == "guitar")
    {
        array_push($decodeArray, "8");
    }
    elseif($word == "computers")
    {
        array_push($decodeArray, "9");
    }
    elseif($word == "henry")
    {
        array_push($decodeArray, " ");
    }
    //alphebetic letters
   if($word == "arizona")
    {
        array_push($decodeArray, "a"); 
    }
    elseif($word == "hillary")
    {
        array_push($decodeArray, "b");
    }
    elseif($word == "Ana")
    {
        array_push($decodeArray, "c");
    }
    elseif($word == "home")
    {
        array_push($decodeArray, "d");
    }
    elseif($word == "coffee")
    {
        array_push($decodeArray, "e");
    }
    elseif($word == "Biking")
    {
        array_push($decodeArray, "f");
    }
    elseif($word == "enforcement")
    {
        array_push($decodeArray, "g");
    }
    elseif($word == "well")
    {
        array_push($decodeArray, "h");
    }
    elseif($word == "turn")
    {
        array_push($decodeArray, "i");
    }
    elseif($word == "Zack")
    {
        array_push($decodeArray, "j");
    }
    if($word == "Dylan")
    {
        array_push($decodeArray, "k"); 
    }
    elseif($word == "hills")
    {
        array_push($decodeArray, "l");
    }
    elseif($word == "broiler")
    {
        array_push($decodeArray, "m");
    }
    elseif($word == "hat")
    {
        array_push($decodeArray, "n");
    }
    elseif($word == "hair")
    {
        array_push($decodeArray, "o");
    }
    elseif($word == "paper")
    {
        array_push($decodeArray, "p");
    }
    elseif($word == "tiger")
    {
        array_push($decodeArray, "q");
    }
    elseif($word == "leaf")
    {
        array_push($decodeArray, "r");
    }
    elseif($word == "hinge")
    {
        array_push($decodeArray, "s");
    }
    elseif($word == "ellen")
    {
        array_push($decodeArray, "t");
    }
    if($word == "marker")
    {
        array_push($decodeArray, "u"); 
    }
    elseif($word == "golf")
    {
        array_push($decodeArray, "v");
    }
    elseif($word == "fence")
    {
        array_push($decodeArray, "w");
    }
    elseif($word == "mini")
    {
        array_push($decodeArray, "x");
    }
    elseif($word == "headphones")
    {
        array_push($decodeArray, "y");
    }
    elseif($word == "water")
    {
        array_push($decodeArray, "z");
    }
    //special puncuation chars, not in numbers section on keyboard
    elseif($word == "fire")
    {
        array_push($decodeArray, ".");
    }
    elseif($word == "whoops")
    {
        array_push($decodeArray, "'");
    }
    elseif($word == "plane")
    {
        array_push($decodeArray, ",");
    }
    elseif($word == "eighth")
    {
        array_push($decodeArray, "/");
    }
    elseif($word == "by")
    {
        array_push($decodeArray, "|");
    }
    elseif($word == "swimming")
    {
        array_push($decodeArray, "?");
    }
    elseif($word == "omg")
    {
        array_push($decodeArray, "<");
    }
    elseif($word == "me")
    {
        array_push($decodeArray, ">");
    }
    elseif($word == "untrue")
    {
        array_push($decodeArray, ":");
    }
    elseif($word == "weather")
    {
        array_push($decodeArray, ";");
    }
   
    elseif($word == "dowap")
    {
        array_push($decodeArray, "`");
    }
    elseif($word == "bad")
    {
        array_push($decodeArray, "~");
    }
    elseif($word == "tush")
    {
        array_push($decodeArray, "{");
    }
    elseif($word == "deep")
    {
        array_push($decodeArray, "}");
    }
    elseif($word == "hot")
    {
        array_push($decodeArray, "]");
    }
    elseif($word == "jumbo")
    {
        array_push($decodeArray, "[");
    }
    elseif($word == 'eleven')
    {
        array_push($decodeArray, '"');
    }
    elseif($word == "congrats")
    {
        array_push($decodeArray, "\\");
    }
    elseif($word == "help")
    {
        array_push($decodeArray, "-");
    }
    elseif($word == "honey")
    {
        array_push($decodeArray, "_");
    }
    elseif($word == "tape")
    {
        array_push($decodeArray, "=");
    }
    elseif($word == "IT")
    {
        array_push($decodeArray, "+");
    }
    //special chars on number inputs when pressing shift
    elseif($word == "get")
    {
        array_push($decodeArray, "!");
    }
    elseif($word == "Massachutes")
    {
        array_push($decodeArray, "@");
    }
    elseif($word == "celing")
    {
        array_push($decodeArray, "#");
    }
    elseif($word == "fourtenpm")
    {
        array_push($decodeArray, "$");
    }
    elseif($word == "hank")
    {
        array_push($decodeArray, "%");
    }
    elseif($word == "ULF")
    {
        array_push($decodeArray, "^");
    }
    elseif($word == "eraser")
    {
        array_push($decodeArray, "&");
    }
    elseif($word == "reserved")
    {
        array_push($decodeArray, "*");
    }
    elseif($word == "excel")
    {
        array_push($decodeArray, "(");
    }
    elseif($word == "effiencet")
    {
        array_push($decodeArray, ")");
    }
  


}

$implodeArray = implode("", $decodeArray);

?>

<form id="jsform" method="post" action="/decode.php">
<input type = "hidden" name="decodedMsg" value = "<?php echo $implodeArray; ?>">
</form>

<script type="text/javascript">
  document.getElementById('jsform').submit();
</script>



