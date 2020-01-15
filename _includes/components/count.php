<?php

$dateinamen = "https://nachhaltige-entwicklung-deutschland.github.io/open-sdg-site-starter/TestCount.txt";
$handle = fopen ($dateinamen, "r");
$inhalt = fread ($handle, filesize ($dateinamen));
fclose ($handle);

$inhalt = $inhalt + 1;
echo "<p>bisher <b>$inhalt</b> Besucher hier</p>";

// Schreiben des neuen Wertes
$handle = fopen ("https://nachhaltige-entwicklung-deutschland.github.io/open-sdg-site-starter/TestCount.txt", "w");
fwrite ($handle, $inhalt);
fclose ($handle);

echo "Wert $inhalt in Datei besucherzaehler.txt geschrieben";
?>
