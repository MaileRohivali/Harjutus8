<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-8</title>
</head>
  <body>
  	<h2>Funktsioon "continue"</h2>
  	<?php for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    }

    echo $number . ", ";
	}
	?>

	<?php $number = 1; //while eeldab, et ma tean, mida teen ja alustab igakord kui jõuab viieni taas algusest, sest tegelikult selles koodijupis ei väljendu, et ma tean, mida teen
	/*while ($number <= 10) {
    if ($number == 5) {
        continue; } 
    echo $number . ", ";
     $number++;
	}*/
	?>

	<?php $number = 0; //natuke moditud versioon, mis paneb continue tööle, aga pole päris õige. vist.
	while ($number < 10) {
		$number++; {
    if ($number == 5) {
        continue; } 
    }
    echo $number . ", ";
	}
	?>

	<h2>Funktsioon "break"</h2>
	<?php for ($number = 1; $number <= 10; $number++) {
    if ($number == 6) {
       break; // Kui $nr == 6, siis jääb alljärgnev katki.
    }

    echo $number . ", ";
	}
	?>
