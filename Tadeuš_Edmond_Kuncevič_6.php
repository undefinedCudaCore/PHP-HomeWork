<?php
echo '-------------- 2020-06-15 --------------<br><br>';
echo '<br><br>--------------------------Uzduotis nr. 1<br><br>';

function funkcija1($h1){
    echo "<h1>$h1</h1>";
    return;
}
funkcija1('Iterpiamas tekstas.');

echo '<br><br>--------------------------Uzduotis nr. 2<br><br>';
// dar reikia dabaigti
$tekstas = 'Iterpiamas tekstas.';
$tagas = rand(1, 6);

function funkcija2($text, $tag){
    echo "<h$tag>$text</h$tag>";
    return;
}
funkcija2($tekstas, $tagas);

echo '<br><br>--------------------------Uzduotis nr. 3<br><br>';

// $stringas = md5(time());

// funkcija1($stringas);

function tag3($tagH) {
	$number = preg_replace( '/\D/', '', html_entity_decode($tagH) );
  	echo "<h1>H1 $number H1</h1>".'</br>';
}
$a = "taxt1 , text1";
tag3($a = md5(time()));

echo '<br><br>--------------------------Uzduotis nr. 4<br><br>';

echo 'Skaicius dalinasi is siu sveikuju skaiciu: ';
function funkcija4($argumentas){
    $count = 0;

    foreach (range(1, $argumentas) as $value) {
        $count++;
        $sum = $argumentas / $count;
        if(is_integer($sum) && $sum != 1 && $argumentas != $sum){
            echo $sum . ' ';
        }
    }
    return;
}
funkcija4(406);

echo '<br><br>--------------------------Uzduotis nr. 5<br><br>';
// Sita turiu dar uzbaigti
$masyvas = [];

foreach (range(1, 100) as $key => $value) {
    $random = rand(33, 77);
    array_push($masyvas, $random);
    funkcija5($masyvas[$key]);
}
$masyvas5 = [];
$masyvas5 = $masyvas;

function funkcija5($argumentas){
    $count = 0;
    $count1 = 0;

    foreach (range(1, $argumentas) as $value) {
        $count++;
        $sum = $argumentas / $count;
        if(is_integer($sum) && $sum != 1 && $argumentas != $sum){
            $count1++;
        }
    }
    echo '<- ' .$count1. ' ->';
    return;
}

rsort($masyvas);
_dc($masyvas);

echo '<br><br>--------------------------Uzduotis nr. 6<br><br>';

// dar reikia dabaigti
function masyvoKurimas() {
    $masyvas6 = [];

    $count = 0;
    foreach (range(1, 100) as $key => $value) {

        $random = rand(333, 777);
        array_push($masyvas6, $random);    
    }

    foreach ($masyvas6 as $key => $value) {
        
        // Driver Code 
        $number = $masyvas6[$key]; 
        $flag = primeCheck($number); 
        if ($flag == 1){
            $masyvas6[$key] = null;
            $masyvas6[$key] = '_________Cia buvo pirminis skaicius.';
        }
    }
    return _dc($masyvas6);
}
masyvoKurimas();

// PHP code to check wether a number is prime or Not 
// function to check the number is Prime or Not 
function primeCheck($number){ 
    if ($number == 1){
        return 0; 
    }
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0){
            return 0; 
        }
    } 
    return 1; 
} 

echo '<br><br>--------------------------Uzduotis nr. 7<br><br>';

$functionRepeatCount = rand(10, 30);
function generateArr($functionRepeatCount){
    static $callCount = 0;
    $callCount++;
    $array = [];
    $randomNumber = rand(10, 20);
    for($i = 0; $i < $randomNumber; $i++){
        if( ($i+1) == $randomNumber){
            if($callCount >= $functionRepeatCount){
                array_push($array, 0);
            }else{
                $newArr = generateArr($functionRepeatCount);
                array_push($array, $newArr);
            }
        }else{
            array_push($array, rand(0, 10));
        }
    }
    return  $array;
}
$generatedArr = generateArr($functionRepeatCount);
echo "Rekursijos gylis: $functionRepeatCount";
echo '<br>';
_dc($generatedArr);

echo '<br><br>--------------------------Uzduotis nr. 8<br><br>';

// 1 variantas
function sum_values($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) $sum += sum_values($value);
        else  $sum += $value;
    }
    return $sum;
}
_dc(sum_values($generatedArr));
// arba 2 variantas

function suma($array)
{
    static $suma = 0;
    foreach ($array as $val) {
        if (is_array($val)) {
            suma($val);
        }
        else {
            $suma += $val;
        }
    }
    return $suma;
}

echo '<br><br>--------------------------Uzduotis nr. 9<br><br>';

function funkcija9(){
    $masyvas9 = [];

    foreach (range(1, 3) as $key => $value) {
        $random = rand(1, 33);
        $random1 = rand(1, 33);
        array_push($masyvas9, $random);

        $number = $masyvas9[$key]; 
        $flag = primeCheck($number); 
        if ($flag == 0){
            array_push($masyvas9, $random1);
        }
    }
    return _dc($masyvas9);
}
funkcija9();

echo '<br><br>--------------------------Uzduotis nr. 10<br><br>';
//dar reikia dabaigti
$array10 = range(1, 10);

foreach ($array10 as $key => &$value) {
    $value = range(1, 10);

    foreach ($value as $key => &$value2) {
        $rand = rand(1, 100);
        $value[$key] = $rand;

        $number = $value[$key]; 
        $flag = primeCheck($number); 
        if ($flag == 1){
            // Echo $number . ', ';
            // echo $number . ' ';
            // $number += $number;
        }
    }
}
_dc($array10);