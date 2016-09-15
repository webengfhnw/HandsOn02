<?php
$Text = "PHP is fantastic!!";
$dz = fopen("test.txt", "w");
fwrite($dz, $Text);
fclose($dz);