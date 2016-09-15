<?php
// The strlen() function returns the length of a string.
echo strlen("Hello");
echo "<br>";
// The strpos() function finds the position of the first occurrence of a string inside another string.
echo strpos("I love php, I love php too!", "php");
echo "<br>";
// The substr() function returns a part of a string.
echo substr("Hello world", 6);
echo "<br>";
// The substr_replace() function replaces a part of a string with another string.
echo substr_replace("Hello", "world", 0);
echo "<br>";
// The str_replace() function replaces some characters with some other characters in a string.
echo str_replace("world", "Peter", "Hello world!");
echo "<br>";
// Concatenation of $txt1 and $txt2
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";
// Appends $txt2 to $txt1
$txt1 .= $txt2;
echo $txt1;