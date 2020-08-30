<?php
echo '-------------- 2020-06-09 --------------<br><br>';

echo '--------------------------Uzduotis nr. 1<br><br>';

$aktoriausVardas = 'Jensen';
$aktoriausPavarde = 'Ackles';

echo $aktoriausVardas . ' ' . $aktoriausPavarde . '.<br><br>';

echo '--------------------------Uzduotis nr. 2<br><br>';

$aktoriausVardas = 'Jensen';
$aktoriausPavarde = 'Ackles';

echo strtoupper($aktoriausVardas) . ' ' . strtolower($aktoriausPavarde) . '.<br><br>';

echo '--------------------------Uzduotis nr. 3<br><br>';

$aktoriausVardas = 'Jensen';
$aktoriausPavarde = 'Ackles';
$inicialai = $aktoriausVardas[0] . $aktoriausPavarde[0];
echo $inicialai . '.<br><br>';

echo '--------------------------Uzduotis nr. 4<br><br>';

$aktoriausVardas = 'Jensen';
$aktoriausPavarde = 'Ackles';
$paskutinesRaides = substr($aktoriausVardas, -3) . substr($aktoriausPavarde, -3);
echo $paskutinesRaides . '.<br><br>';

echo '--------------------------Uzduotis nr. 5<br><br>';

$amerikietis = '"An American in paris"';
echo 'Kintamasis amerikietis yra lygus = ' . $amerikietis . '.<br>';
$amerikietis = str_replace("a", "*", $amerikietis);
$amerikietis = str_replace("A", "*", $amerikietis);
echo '<br>';
echo $amerikietis;
echo '<br><br>';

echo '--------------------------Uzduotis nr. 6<br><br>';

$amerikietis = '"An American in paris"';
$amerikietis = strtolower($amerikietis);
$amerikietis = substr_count($amerikietis, "a");

echo $amerikietis . '<br><br>';

echo '--------------------------Uzduotis nr. 7<br><br>';

$amerikietis = '"An American in paris"';
$amerikietis = str_ireplace(array('a','e','i','o','u','y',' '), '', $amerikietis);
echo $amerikietis . '<br>';

$pusryciai = '"Breakfast at Tiffany\'s"';
$pusryciai = str_ireplace(array('a','e','i','o','u','y',' '), '', $pusryciai);
echo $pusryciai . '<br>';

$kosmosas = '"2001: A Space Odyssey"';
$kosmosas = str_ireplace(array('a','e','i','o','u','y',' '), '', $kosmosas);
echo $kosmosas . '<br>';

$gyvenymas = '"It\'s a Wonderful Life"';
$gyvenymas = str_ireplace(array('a','e','i','o','u','y',' '), '', $gyvenymas);
echo $gyvenymas . '<br><br>';

echo '--------------------------Uzduotis nr. 8<br><br>';

$stringas = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
echo $stringas . '<br>';
$int = (int) filter_var($stringas, FILTER_SANITIZE_NUMBER_INT);
echo 'Epizodo numeris yra ' . $int . '. <br><br>';

echo '--------------------------Uzduotis nr. 9<br><br>';

$str1a = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
echo 'Duotas stringas: "' . $str1a.'".<br><br>';
$str_arr = explode(' ', $str1a);
$trumpesnisZodis = 0;
$ilgesnisZodis = 0;

$length = count($str_arr);
for ($i = 0; $i < $length; $i++) {
    $zodis = $str_arr[$i];
    $zodzioIlgis = strlen ($str_arr[$i]);
    echo 'Zodzio "' . $zodis . '" ilgis yra - ' . $zodzioIlgis . '<br>';

    if ($zodzioIlgis <= 5) {
        $trumpesnisZodis++;
    }
    if ($zodzioIlgis > 5) {
        $ilgesnisZodis++;
    }
}
echo 'Trumpesniu arba lygiu 5 zodziu yra: ' . $trumpesnisZodis . '.<br>';
echo 'Ilgesniu uz 5 zodziu yra: ' . $ilgesnisZodis . '.<br><br>';

$str1b = 'Tik nereikia gasdinti Pietu Centro geriant sultis pas save kvartale';
echo 'Duotas stringas: "' . $str1b.'".<br><br>';
$str_arr = explode(' ', $str1b);
$trumpesnisZodis = 0;
$ilgesnisZodis = 0;

$length = count($str_arr);
for ($i = 0; $i < $length; $i++) {
    $zodis = $str_arr[$i];
    $zodzioIlgis = strlen ($str_arr[$i]);
    echo 'Zodzio "' . $zodis . '" ilgis yra - ' . $zodzioIlgis . '<br>';

    if ($zodzioIlgis <= 5) {
        $trumpesnisZodis++;
    }
    if ($zodzioIlgis > 5) {
        $ilgesnisZodis++;
    }
}
echo 'Trumpesniu arba lygiu 5 zodziu yra: ' . $trumpesnisZodis . '.<br>';
echo 'Ilgesniu uz 5 zodziu yra: ' . $ilgesnisZodis . '.<br><br>';

echo '--------------------------Uzduotis nr. 10<br><br>';

    $charai = 'abcdefghijklmnopqrstuvwxyz';

    $rand1 = $charai[rand(0, strlen($charai)-1)];
    $rand2 = $charai[rand(0, strlen($charai)-1)];
    $rand3 = $charai[rand(0, strlen($charai)-1)];
    $randomas = $rand1 . $rand2 . $rand3;

echo 'Duotos lotyniskos raides: ' . $charai . '.<br>';
echo 'Sugeneruotas stringas: ' . $randomas . '.<br><br>';

echo '--------------------------Uzduotis nr. 11<br><br>';

$zodiai = $str1a . $str1b;
$padalintiZodziai = explode(' ', $zodiai);

$emptyArray = [];
for ($i=0; $i < 10; $i++) {
    $randomWord = $padalintiZodziai[rand(0, $i)];
    array_push($emptyArray, $randomWord);
}

$emptyArray = array_unique($emptyArray);

// $length = count($emptyArray);
// $len = 10 - $length;
// print_r ($len);

// if ($length  < 10) {
//     for ($i=0; $i < $len; $i++) {
//         $randomWord = $padalintiZodziai[rand(0, $i)];
//         array_push($emptyArray, $randomWord);
//     }
// }


echo '<br>';
echo implode(" ", $emptyArray);
echo '.';