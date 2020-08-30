<?php
echo '-------------- 2020-06-16 --------------<br><br>';
echo '<br><br>--------------------------Uzduotis nr. 1<br><br>';

$backgroundColor = 'black';
if(!empty($_GET) && $_GET['color'] == 1) {
    $backgroundColor = 'red';
}
$link1 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php">Pirmas linkas</a>'.'<br>';
$link2 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php?color=1">Antras linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$link1.$link2.'</div>';

echo '<br><br>--------------------------Uzduotis nr. 2<br><br>';

$backgroundColor = 'black';
if(!empty($_GET) && $_GET['color'] == 1) {
    $backgroundColor = 'red';
}
$link1 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php">Pirmas linkas</a>'.'<br>';
$link2 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php">Antras linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'">'.$link1.$link2.'</div>';