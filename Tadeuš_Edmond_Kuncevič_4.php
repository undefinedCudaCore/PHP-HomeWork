<?php
echo '-------------- 2020-06-10 --------------<br><br>';

echo '<br><br>--------------------------Uzduotis nr. 1<br><br>';

$firstArray = [];

foreach (range(1, 30) as $value) {
    $value = rand(5, 25);
    array_push($firstArray, $value);
}
var_dump($firstArray);

echo '<br><br>--------------------------Uzduotis nr. 2<br><br>';

$length = count($firstArray);
$countA = 0;
$sum = 0;

echo 'Sugeneruoti skaiciai: ';

foreach ($firstArray as $key => $value) {
    // echo $count++ .' ';
    $firstArray[$key] = $value;
    echo $value .' ';
    if( $value > 10) {
        $countA++;
    }
    $sum += $value;
}
echo "<br>a) Reiksmiu didesniu uz 10 yra: $countA.";

$largest= max($firstArray);

echo "<br>b) Didziausias masyvo skaicius yra: $largest.";
echo "<br>c) Visu masyvo reiksmiu suma yra: $sum.<br>";

$secondArray = [];
echo 'd) Suskaiciuotos masyvo reiksmes:<br>';

foreach ($firstArray as $key => $value) {
    $firstArray[$key] = $value;
    $value = $value - $key;
    echo 'Key '. $key .', value ' . $value .'.|| ';
    array_push($secondArray, $value);
}
echo '<br><br>';

var_dump($secondArray);

echo '<br><br>e) Papildytas masyvas: <br>';

foreach (range(1, 10) as $value) {
    $value = rand(5, 25);
    array_push($firstArray, $value);
}

var_dump($firstArray);

echo '<br><br>f) Du nauji masyvai: <br><br>';

$newArray1 = [];
$newArray2 = [];
$mod = 0;

foreach ($firstArray as $key => $value) {
    $firstArray[$key] = $value;
    $mod = $value % 2;

    if($mod == 0) {
        array_push($newArray1, $value);
    } 
    if ($mod == 1) {
        array_push($newArray2, $value);
    }
}
echo 'Pirmas masyvas: <br>';

var_dump($newArray1);

echo '<br><br>Antras masyvas: <br>';

var_dump($newArray2);

echo '<br>';

echo '<br><br>g) Porinai indeksai, kuriu reiksme > uz 15 pakista i 0.<br><br>';
echo 'Indekso numeris, kuris buvo pakeistas: ';

$gArray = [];

foreach ($firstArray as $key => $value) {
    $firstArray[$key] = $value;
    $mod = $key % 2;
    if($mod == 0 && $value > 15){
        $value = 0;
        echo $key.' ';
    }
    array_push($gArray, $value);
}
echo '<br><br>';

var_dump($gArray);

echo '<br><br>h) Pirmas maziausias indeksas, kurio reiksme didesne uz 10.<br><br>';

foreach ($firstArray as $key => $value) {
    $firstArray[$key] = $value;
    if ($value > 10) {
        echo 'Key '. $key .' and value '. $value .'.';
    break; 
    }
}

echo '<br><br>i) Istrinti visi elementai, kuriu indeksas yra porinis.<br><br>';

foreach ($firstArray as $key => $value) {
    $firstArray[$key] = $value;
    $mod = $key % 2;
    if ($mod == 0) {
        unset($firstArray[$key]);
    }
}
var_dump($firstArray);

echo '<br><br>--------------------------Uzduotis nr. 3<br><br>';

$array3 = [];
$charai = 'ABCD';
$rand1 = '';
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

foreach (range(1, 200) as $key => $value) {

    $rand1 = $charai[rand(0, strlen($charai)-1)];
    array_push($array3, $rand1);
    if ($rand1 == 'A') {
        $countA++;
    }
    if ($rand1 == 'B') {
        $countB++;
    }
    if ($rand1 == 'C') {
        $countC++;
    }
    if ($rand1 == 'D') {
        $countD++;
    }
}
echo 'Raide A atspausdinta ' . $countA . ' kartu.<br>' . 'Raide B atspausdinta ' . $countB . ' kartu.<br>' 
    . 'Raide C atspausdinta ' . $countC . ' kartu.<br>' . 'Raide D atspausdinta ' . $countD . ' kartu.<br>';

echo '<br><br>--------------------------Uzduotis nr. 4<br><br>';

sort($array3);
var_dump($array3);

echo '<br><br>--------------------------Uzduotis nr. 5<br><br>';

$array5a = [];
$array5b = [];
$array5c = [];
$charai = 'ABCD';
$rand1 = '';

foreach (range(1, 200) as $key => $value) {

    $rand1 = $charai[rand(0, strlen($charai)-1)];
    $rand2 = $charai[rand(0, strlen($charai)-1)];
    $rand3 = $charai[rand(0, strlen($charai)-1)];
    array_push($array5a, $rand1);
    array_push($array5b, $rand2);
    array_push($array5c, $rand3);
}

$arraySum = [];

foreach (array_keys($array5a + $array5b + $array5c) as $key) {
    $arraySum[$key] = $array5a[$key] . $array5b[$key] . $array5c[$key];
}
// var_dump($arraySum);
print_r(array_count_values($arraySum));

echo '<br><br>--------------------------Uzduotis nr. 6<br><br>';

$array6a = [];
$array6b = [];

foreach (range(1, 100) as $key => $value) {

    $rand1 = rand(100, 999);
    $rand2 = rand(100, 999);

    array_push($array6a, $rand1);
    array_push($array6b, $rand2);
}
array_unique ($array6a);
array_unique ($array6b);

var_dump($array6a);

echo '<br><br>';

var_dump($array6b);

echo '<br><br>--------------------------Uzduotis nr. 7<br><br>';

$array7a = [];

foreach ($array6a as $key => $value) {
    $array6a[$key] = $value;
    if (in_array($value, $array6b, false)) {
        array_push($array7a, $value);
    }
}
var_dump($array7a);

echo '<br><br>--------------------------Uzduotis nr. 8<br><br>';

$array8a = [];

foreach ($array6a as $key => $value) {
    $array6a[$key] = $value;
    if (in_array($value, $array6b, true)) {
        array_push($array8a, $value);
    }
}
foreach ($array6b as $key => $value) {
    $array6b[$key] = $value;
    if (in_array($value, $array6a, true)) {
        array_push($array8a, $value);
    }
}
array_unique ($array8a);
var_dump($array8a);

echo '<br><br>--------------------------Uzduotis nr. 9<br><br>';

$array9a = [];

foreach ($array6b as $key => $value) {
    $array6b[$key] = $value;
    array_push($array9a, $value);
}

$data = [];  // set up a return array
$i = 0 ;

foreach( $array9a as $k=>$v){
    $data[$array6a[$i]] = $v;  // build up the new array
    $i++;
}

var_dump($data);

echo '<br><br>--------------------------Uzduotis nr. 10<br><br>';

$rand1 = rand(5, 25);
$rand2 = rand(5, 25);

$array10a = [$rand1, $rand2];

for($i = 1; $i <= 8; $i++){
    $array10a[] = $array10a[$i]+$array10a[$i-1];
}
var_dump($array10a);
echo '<pre>';
_dc($array10a);

echo '<br><br>--------------------------Uzduotis nr. 11<br><br>';