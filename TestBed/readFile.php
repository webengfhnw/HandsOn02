<?php
$content = file("test.txt");
$size = count($content);
for ($i = 0; $i <= ($size - 1); $i++) {
    echo $content[$i] . "<br/>";
}