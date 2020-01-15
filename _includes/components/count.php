
<?php

// Simple Counter v1.0
// Für die korrekte Funktionsweise des Counters ist darauf zu
// achten, dass die entsprechenden Schreibrechte auf dem
// Webserver gesetzt sind.

// Counterdateiname
$datei="counter.txt";

$hits=file($datei);

$hits[0]++;

$fp=fopen($datei, "w");

fputs($fp, "$hits[0]");

fclose($fp);

echo $hits[0];
?>
