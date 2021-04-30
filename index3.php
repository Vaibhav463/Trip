<?php
$str="This is a string";
echo$str;
echo"<br>";
$len=strlen($str);
echo"The length of this string is ".$len. ". Hello"."<br>";
// echo$len;
echo"The number of words in this string is ". str_word_count($str). ". Hello";
echo"<br> The reverse string is ". strrev($str);
echo"<br> The search for a is ". strpos($str,"a");
echo"<br> The replaced sting is ". str_replace("This","Here",$str);
?>
