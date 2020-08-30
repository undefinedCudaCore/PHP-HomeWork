<?php
echo '-------------- 2020-06-10 --------------<br><br>';
echo '<br><br>--------------------------Uzduotis nr. 1<br><br>';

$array1a = [];
$array1b = [];
$array1c = [];
$array1d = [];
$array1e = [];
$array1f = [];
$array2b = [];
$array2c = [];
$array2d = [];
$array2e = [];
$array2f = [];
$length = count($array1a);

foreach (range(1, 1) as $key => $value) {
    for ($i=0; $i < 5; $i++) { 
        $rand1 = rand(5, 25);
        $rand2 = rand(5, 25);
        $rand3 = rand(5, 25);
        $rand4 = rand(5, 25);
        $rand5 = rand(5, 25);
        $rand6 = rand(5, 25);
        $rand7 = rand(5, 25);
        $rand8 = rand(5, 25);
        $rand9 = rand(5, 25);
        $rand10 = rand(5, 25);
    
        array_push($array1b, $rand1);
        array_push($array1c, $rand2);
        array_push($array1d, $rand3);
        array_push($array1e, $rand4);
        array_push($array1f, $rand5);
        array_push($array2b, $rand6);
        array_push($array2c, $rand7);
        array_push($array2d, $rand8);
        array_push($array2e, $rand9);
        array_push($array2f, $rand10);
    }
    array_push($array1a, $array1b);
    array_push($array1a, $array1c);
    array_push($array1a, $array1d);
    array_push($array1a, $array1e);
    array_push($array1a, $array1f);
    array_push($array1a, $array2b);
    array_push($array1a, $array2c);
    array_push($array1a, $array2d);
    array_push($array1a, $array2e);
    array_push($array1a, $array2f);
}

_dc($array1a);

echo '<br><br>--------------------------Uzduotis nr. 2<br><br>';
echo 'a) Elementu dydesniu uz 10 yra: ';

$count = 0;

foreach ($array1a as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if ($value2 > 10) {
           $count++;
        }
    }
}
echo $count. '.<br><br>b) Didziausia elemento reiksme yra: ';

$lergestNumber = 0;
foreach ($array1a as $value){
	foreach($value as $key => $value1){
		if ($value1 > $lergestNumber){
        $lergestNumber = $value1;
    	}
	}   	
}
echo $lergestNumber. '.';

echo'<br><br>c) Antro lygio masyvu su vienodais indeksais sumos: ';

$arrTemp0 = [];
$arrTemp1 = [];
$arrTemp2 = [];
$arrTemp3 = [];
$arrTemp4 = [];

foreach ($array1a as $value){
	foreach($value as $key => $value1){
		if ($key == 0){
            array_push($arrTemp0, $value1);
    	}
		if ($key == 1){
            array_push($arrTemp1, $value1);
    	}
		if ($key == 2){
            array_push($arrTemp2, $value1);
    	}
		if ($key == 3){
            array_push($arrTemp3, $value1);
    	}
		if ($key == 4){
            array_push($arrTemp4, $value1);
    	}
	}   	
}

echo '<br>-  0 indeksu suma: ' .array_sum($arrTemp0). '.';
echo '<br>-  1 indeksu suma: ' .array_sum($arrTemp1). '.';
echo '<br>-  2 indeksu suma: ' .array_sum($arrTemp2). '.';
echo '<br>-  3 indeksu suma: ' .array_sum($arrTemp3). '.';
echo '<br>-  4 indeksu suma: ' .array_sum($arrTemp4). '.<br>d) Visus masyvus pailginkite iki 7 elementu: ';

$array1a = [];
$array1b = [];
$array1c = [];
$array1d = [];
$array1e = [];
$array1f = [];
$array2b = [];
$array2c = [];
$array2d = [];
$array2e = [];
$array2f = [];
$length = count($array1a);

foreach (range(1, 1) as $key => $value) {
    for ($i=0; $i < 7; $i++) { 
        $rand1 = rand(5, 25);
        $rand2 = rand(5, 25);
        $rand3 = rand(5, 25);
        $rand4 = rand(5, 25);
        $rand5 = rand(5, 25);
        $rand6 = rand(5, 25);
        $rand7 = rand(5, 25);
        $rand8 = rand(5, 25);
        $rand9 = rand(5, 25);
        $rand10 = rand(5, 25);
    
        array_push($array1b, $rand1);
        array_push($array1c, $rand2);
        array_push($array1d, $rand3);
        array_push($array1e, $rand4);
        array_push($array1f, $rand5);
        array_push($array2b, $rand6);
        array_push($array2c, $rand7);
        array_push($array2d, $rand8);
        array_push($array2e, $rand9);
        array_push($array2f, $rand10);
    }
    array_push($array1a, $array1b);
    array_push($array1a, $array1c);
    array_push($array1a, $array1d);
    array_push($array1a, $array1e);
    array_push($array1a, $array1f);
    array_push($array1a, $array2b);
    array_push($array1a, $array2c);
    array_push($array1a, $array2d);
    array_push($array1a, $array2e);
    array_push($array1a, $array2f);
}

_dc($array1a);

echo '<br>e)<br>';

$arrTemp0 = [];
$arrTemp1 = [];
$arrTemp2 = [];
$arrTemp3 = [];
$arrTemp4 = [];
$arrTemp6 = [];

foreach ($array1a as $value){
    array_push($arrTemp6, array_sum($value));
}

_dc($arrTemp6);	

echo '<br><br>--------------------------Uzduotis nr. 3<br><br>';

$charai = 'abcdefghijklmnopqrstuvwxyz';
$masyvas = range(1, 10);

foreach ($masyvas as $key => &$val) {
    $temp = $masyvas[$key];
    $masyvas[$key] = range(1, rand(2, 20));
}

foreach ($masyvas as &$val1) {
    foreach ($val1 as &$val2) {
        $val2 =  $charai[rand(0, strlen($charai)-1)];
        sort($val1);
    }
}

_dc($masyvas);

echo '<br><br>--------------------------Uzduotis nr. 4<br><br>';

$count = 0;

foreach ($masyvas as $key => $value) {
    sort($masyvas);
}

_dc($masyvas);

echo '<br><br>--------------------------Uzduotis nr. 5<br><br>';

$masyvas = range(1, 30);
foreach ($masyvas as $key => &$val) {
    $masyvas[$key] = range(1, 2);
}



foreach ($masyvas as &$val1) {
    unset($val1[0]);
    unset($val1[1]);
    $val1['user_id'] = rand(1, 1000000);
    $val1['place_in_row'] = rand(0, 100);
}
_dc($masyvas);

echo '<br><br>--------------------------Uzduotis nr. 6<br><br>';

usort($masyvas, 
    function($a, $b){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);
_dc($masyvas);

foreach ($masyvas as &$val1) {
    $temp2 = $val1['user_id'];
    unset($val1['user_id']);
    foreach ($val1 as $k=> &$val2) {
        $temp1 = $val1['place_in_row'];
        $val1['user_id'] = $temp1;
    }
    $val1['place_in_row'] = $temp2;
}
usort($masyvas, 
    function($b, $a){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);

_dc($masyvas);

echo '<br><br>--------------------------Uzduotis nr. 7<br><br>';

foreach ($masyvas as &$val1) {
    $val1[2] = '0';
    $val1[3] = '0';
    unset($val1[2]);
    $val1['name'] = $charai[rand(0, strlen($charai)-1)];

    $rand1 = rand(5, 15);
    for ($i=0; $i < $rand1; $i++) { 
        $val1['name'] .= $charai[rand(0, strlen($charai)-1)];
    }
    
    unset($val1[3]);
    $val1['surname'] = $charai[rand(0, strlen($charai)-1)];

    $rand2 = rand(5, 15);
    for ($j=0; $j < $rand2; $j++) { 
        $val1['surname'] .= $charai[rand(0, strlen($charai)-1)];
    }
}

_dc($masyvas);

echo '<br><br>--------------------------Uzduotis nr. 8<br><br>';

$newMasyvas = range(0, 10);

foreach ($newMasyvas as &$value) {
    $random = rand(0, 10);
    $value = range (1, $random);
    if ($random == 0) {
        $value = $random;
    }
}

_dc($newMasyvas);

echo '<br><br>--------------------------Uzduotis nr. 9<br><br>';

usort($newMasyvas, 
    function($a, $b){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);

_dc($newMasyvas);


echo '<br><br>--------------------------Uzduotis nr. 10<br><br>';
// Turiu dar pataisyti
$newMasyvas = range(0, 10);
$charai1 = '#%+*@%';
$charai2 = '0123456789';
$newCharai1 = '';
$newCharai2 = '';

foreach ($newMasyvas as $key => &$value) {
    $newMasyvas[$key] = range (1, 2);
}
for ($i=0; $i < 6; $i++) { 
    $newCharai2 .= $charai2[rand(0, 9)];
    $newCharai1 .= $charai1[rand(0, strlen($charai1)-1)];
}

foreach ($newMasyvas as &$value1) {
    unset($value1[0]);
    unset($value1[1]);
    $value1['value'] = $newCharai1;
    $value1['color'] = '#' . $newCharai2;
}

_dc($newMasyvas);

echo '<br><br>--------------------------Uzduotis nr. 11<br><br>';