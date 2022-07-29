<?php
session_start();
session_destroy();
$_SESSION = array();
?>

<?php

//Erstellung des Captchas in Farbe Grau und Schwarz
$captcha = imagecreate(250,60);
$grau = imagecolorallocate($captcha,0,0,0);
imagefill($captcha, 0, 0, $grau);
$schwarz = imagecolorallocate($captcha, 211, 211, 211);

//Alle möglichen Zeichen die gemischt und anschließend in einem Array gespeichert werden
$signs = "acefghijkrstvxyz12345781234578";
$signs = str_shuffle($signs);
$signField = mb_str_split($signs);

//Einfügen der Zeichen mit der Schriftart Roboto die auf dem Server gespeichert wurden in leichtem Grau und verschiedenen Winkeln
for($i = 1; $i <= 5; $i++ ){
    $schriftart = 'fonts/Roboto-Medium.ttf';
    imagettftext($captcha, 30, -35 *$i, 45 * $i - 20, 40 - $i * 6, $schwarz, $schriftart, $signField[$i-1]);
}

//Speichern des Bildes und bei erneutem Aufruf der Seite Löschen und Neu erzeugen plus speichern
imagepng($captcha, "captcha.png");
imagedestroy($captcha);


?>