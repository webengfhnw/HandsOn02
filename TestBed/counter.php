<?php
$filename = "count.txt";
if (file_exists($filename)) {
    //open file. r+ means Read/Write. Starts at the beginning of the file
    $pointer = fopen($filename, "r+");
    $number = fgets($pointer);
    $number = (int) $number + 1;
    echo "$number";
    // write value back to file
    rewind($pointer); //Starts at the beginning of the file.
    fwrite($pointer, $number);
    fclose($pointer);
} else {
    $number = 1;
    echo "$number";
    $pointer = fopen($filename, "a");
    fwrite($pointer, $number);
}
