<?php

// Premiere ligne
$date = date("j/m/Y");
echo $date;
echo "<br>";

$d = mktime(0, 0, 0, 12, 10, 2018);
echo date("Y.m.d", $d);
echo "<br>";

$d = mktime(11,35,7);
echo date("g:i:s", $d);




