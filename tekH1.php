<?php
echo '-------------- 2020-06-08 --------------';
echo '<br>';
echo '<br>';


echo '--------------------------Uzduotis nr. 1';
echo '<br>';
echo '<br>';

$vardas = 'Tadeuš';
$pavarde = 'Kuncevič';
$gimimoMetai = '1989';
$sieMetai = '2020';
$amzius = $sieMetai - $gimimoMetai;

$info = "Aš esu $vardas $pavarde. Man yra $amzius(ai)."; // Informacija apie žmogų: vardas, pavardė ir amžius.

echo $info;
echo '<br>';
echo '<br>';


echo '--------------------------Uzduotis nr. 2';
echo '<br>';
echo '<br>';

$kintamasisPirmas = rand(0, 4);
$kintamasisAntras = rand(0, 4);

if($kintamasisPirmas > $kintamasisAntras && $kintamasisPirmas != 0 && $kintamasisAntras != 0) {
    $suma = $kintamasisPirmas / $kintamasisAntras;
    $suapvalintaSuma = number_format($suma, 2);
    echo "Rezultatas yra $suapvalintaSuma.";
    echo '<br>';
    echo "Pirmas kintamasis $kintamasisPirmas didesnis uz antraji kintamaji $kintamasisAntras.";
    echo '<br>';
    echo '<br>';
} elseif ($kintamasisPirmas < $kintamasisAntras && $kintamasisPirmas != 0 && $kintamasisAntras != 0) {
    $suma = $kintamasisAntras / $kintamasisPirmas;
    $suapvalintaSuma = number_format($suma, 2);
    echo "Rezultatas yra $suapvalintaSuma.";
    echo '<br>';
    echo "Antras kintamasis $kintamasisAntras didesnis uz pirmaji kintamaji $kintamasisPirmas.";
    echo '<br>';
    echo '<br>';
} else {
    $suapvalintaSuma = number_format(0, 2);
    echo "Rezultatas yra $suapvalintaSuma.";
    echo '<br>';
    echo '<br>';
}


echo '--------------------------Uzduotis nr. 3';
echo '<br>';
echo '<br>';

$kintamasisVienas = rand(0, 25);
$kintamasisDu = rand(0, 25);
$kintamasisTrys = rand(0, 25);

if ($kintamasisVienas == 12) {
   echo "Kintamasis A yra lygus $kintamasisVienas";
   echo '<br>';
} elseif ($kintamasisVienas == 13) {
    echo "Kintamasis A yra lygus $kintamasisVienas";
    echo '<br>';
} else {
    echo 'Searching..';
    echo '<br>';
}
if ($kintamasisDu == 12) {
   echo "Kintamasis B yra lygus $kintamasisDu";
   echo '<br>';
} elseif ($kintamasisDu == 13) {
    echo "Kintamasis B yra lygus $kintamasisDu";
    echo '<br>';
} else {
    echo 'Searching..';
    echo '<br>';
}
if ($kintamasisTrys == 12) {
   echo "Kintamasis C yra lygus $kintamasisTrys";
   echo '<br>';
} elseif ($kintamasisTrys == 13) {
    echo "Kintamasis C yra lygus $kintamasisTrys";
    echo '<br>';
} else {
    echo 'Searching..';
    echo '<br>';
}
echo '<br>';


echo '--------------------------Uzduotis nr. 4';
echo '<br>';
echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "Kintamasis a = $a";
echo '<br>';
echo "Kintamasis b = $b";
echo '<br>';
echo "Kintamasis c = $c";
echo '<br>';
if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
    echo "Kintamasis a = $a, kintamasis b = $b, kintamasis c = $c.";
    echo '<br>';
    echo 'Trikampi pagaminti galima.';
    echo '<br>';
} elseif (($a == $b && $c < $a) || ($a == $c && $b < $a) || ($b == $c && $a < $b) ) {
    echo "Kintamasis a = $a, kintamasis b = $b, kintamasis c = $c.";
    echo '<br>';
    echo 'Trikampi pagaminti galima.';
    echo '<br>';
} elseif ($a >= ($b + $c) || $b >= ($a + $c) || $c >= ($a + $b)) {
    echo "Kintamasis a = $a, kintamasis b = $b, kintamasis c = $c.";
    echo '<br>';
    echo 'Trikampio nepagaminsi.';
    echo '<br>';
}
echo '<br>';


echo '--------------------------Uzduotis nr. 5';
echo '<br>';
echo '<br>';

$penktKintamasisVienas = rand(0, 2);
$penktKintamasisDu = rand(0, 2);
$penktKintamasisTrys = rand(0, 2);
$penktKintamasisKeturi = rand(0, 2);

$nulis = 0;
$vienetas = 0;
$dvejetas = 0;

switch ($penktKintamasisVienas) {
    case '0':
        $nulis++;
        break;
    case '1':
        $vienetas++;
        break;
    case '2':
        $dvejetas++;
        break;
}
switch ($penktKintamasisDu) {
    case '0':
        $nulis++;
        break;
    case '1':
        $vienetas++;
        break;
    case '2':
        $dvejetas++;
        break;
}
switch ($penktKintamasisTrys) {
    case '0':
        $nulis++;
        break;
    case '1':
        $vienetas++;
        break;
    case '2':
        $dvejetas++;
        break;
}
switch ($penktKintamasisKeturi) {
    case '0':
        $nulis++;
        break;
    case '1':
        $vienetas++;
        break;
    case '2':
        $dvejetas++;
        break;
    default:
        $dvejetas = 0;
    break;
}

echo "Pirmas kintamasis = $penktKintamasisVienas.";
echo '<br>';
echo "Antras kintamasis = $penktKintamasisDu.";
echo '<br>';
echo "Trecias kintamasis = $penktKintamasisTrys.";
echo '<br>';
echo "Ketvirtas kintamasis = $penktKintamasisKeturi";
echo '<br>';

echo "Nuliu yra $nulis.";
echo '<br>';
echo "Vienetu yra $vienetas.";
echo '<br>';
echo "Dvejetu yra $dvejetas.";
echo '<br>';
echo '<br>';


echo '--------------------------Uzduotis nr. 6';
echo '<br>';
echo '<br>';

$atsitiktinisSkaicius = rand(1, 6);
    switch ($atsitiktinisSkaicius) {
        case 1:
            echo '<h1>1</h1>';
            break;
        case 2:
            echo '<h2>2</h2>';
            break;
        case 3:
            echo '<h3>3</h3>';
            break;
        case 4:
            echo '<h4>4</h4>';
            break;
        case 5:
            echo '<h5>5</h5>';
            break;
        case 6:
            echo '<h6>6</h6>';
            break;
    }
    

echo '--------------------------Uzduotis nr. 7';
echo '<br>';
echo '<br>';

$septUzdPirmasSkaicius = rand(-10, 10);
$septUzdAntrasSkaicius = rand(-10, 10);
$septUzdTreciasSkaicius = rand(-10, 10);

if ($septUzdPirmasSkaicius < 0) {
    echo "<span style=\"color:#75FF79\">$septUzdPirmasSkaicius</span>";
    echo '<br>';
} elseif ($septUzdPirmasSkaicius > 0) {
    echo "<span style=\"color:#0008FF\">$septUzdPirmasSkaicius</span>";
    echo '<br>';
} else{
    echo "<span style=\"color:#FF0000\">$septUzdPirmasSkaicius</span>";
    echo '<br>';
}
if ($septUzdAntrasSkaicius < 0) {
    echo "<span style=\"color:#75FF79\">$septUzdAntrasSkaicius</span>";
    echo '<br>';
} elseif ($septUzdAntrasSkaicius > 0) {
    echo "<span style=\"color:#0008FF\">$septUzdAntrasSkaicius</span>";
    echo '<br>';
} else{
    echo "<span style=\"color:#FF0000\">$septUzdAntrasSkaicius</span>";
    echo '<br>';
}
if ($septUzdTreciasSkaicius < 0) {
    echo "<span style=\"color:#75FF79\">$septUzdTreciasSkaicius</span>";
    echo '<br>';
} elseif ($septUzdTreciasSkaicius > 0) {
    echo "<span style=\"color:#0008FF\">$septUzdTreciasSkaicius</span>";
    echo '<br>';
} else{
    echo "<span style=\"color:#FF0000\">$septUzdTreciasSkaicius</span>";
    echo '<br>';
}
echo '<br>';


echo '--------------------------Uzduotis nr. 8';
echo '<br>';
echo '<br>';

$zvakiuKiekis = rand(5, 3000);

if ($zvakiuKiekis < 1000) {
    $zvakiuKaina = $zvakiuKiekis * 1;
}
if ($zvakiuKiekis >= 1000) {
    $zvakiuKaina = $zvakiuKiekis * 1 * 0.97;
}
if ($zvakiuKiekis >= 2000) {
    $zvakiuKaina = $zvakiuKiekis * 1 * 0.96;
} 
$vioenetoKaina = $zvakiuKaina / $zvakiuKiekis;

echo "Buvo nupirkta $zvakiuKiekis vnt. zvakiu po $vioenetoKaina euru. Viso sumokejo $zvakiuKaina euru.";
echo '<br>';
echo '<br>';


echo '--------------------------Uzduotis nr. 9';
echo '<br>';
echo '<br>';

$devintaUzdKintamasisVienas = rand(0, 100);
$devintaUzdKintamasisDu = rand(0, 100);
$devintaUzdKintamasisTrys = rand(0, 100);

$aritmetinisVidurkisPirmas = number_format(($devintaUzdKintamasisVienas + $devintaUzdKintamasisDu + $devintaUzdKintamasisTrys) / 3, 0);
echo $aritmetinisVidurkisPirmas;
echo '<br>';

$devintaUzdKintamasisVienas = rand(10, 90);
$devintaUzdKintamasisDu = rand(10, 90);
$devintaUzdKintamasisTrys = rand(10, 90);

$aritmetinisVidurkisAntras = number_format(($devintaUzdKintamasisVienas + $devintaUzdKintamasisDu + $devintaUzdKintamasisTrys) / 3, 0);
echo $aritmetinisVidurkisAntras;
echo '<br>';
echo '<br>';

echo '--------------------------Uzduotis nr. 10';
echo '<br>';
echo '<br>';

$valanda = number_format(rand(0, 23), 0);
$minute = number_format(rand(1, 59), 0);
$sekunde = number_format(rand(1, 99), 0);

$papildomasSkaicius = rand(0, 300);
$naujosSekundes = $sekunde + $papildomasSkaicius;
$naujosSekundesDu = $naujosSekundes % 100;
$naujosSekundes = ($naujosSekundes - $naujosSekundesDu) / 100;
$minute = $minute + $naujosSekundes;

$newMinute = $minute % 60;
$newMinuteDu = ($minute - $newMinute) / 60;
$valanda = $valanda + $newMinuteDu;

echo "$valanda val $newMinute min $naujosSekundesDu sec";
echo '<br>';
echo '<br>';

echo '--------------------------Uzduotis nr. 11';
echo '<br>';
echo '<br>';
