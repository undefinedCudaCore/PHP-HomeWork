<?php
$string1 = '';
$string2 = '';
$string3 = '';
$string1 .= str_pad(rand(0,99), 2, "0", STR_PAD_LEFT);
$string2 .= str_pad(rand(0,99), 5, "0", STR_PAD_LEFT);

foreach (range(1, 9) as $value) {
    $string3 .= rand(0, 9);
}
// echo $string3;
// $string3 .= str_pad(rand(0,99), 9, "0", STR_PAD_LEFT);
// echo $string1;
// echo $string2;