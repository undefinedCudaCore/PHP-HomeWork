<?php
echo '-------------- 2020-06-16 --------------<br><br>';
echo '<br><br>--------------------------Uzduotis nr. 1<br><br>';

$backgroundColor = 'black';
if(!empty($_GET) && $_GET['color'] == 1) {
    $backgroundColor = 'red';
}
$link1 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php">Pirmas linkas</a>'.'<br>';
$link2 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php?color=1">Antras linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.';">'.$link1.$link2.'</div>';

echo '<br><br>--------------------------Uzduotis nr. 2<br><br>';

$arr = [];
if(!empty($_GET)) {
$arr =
    [hexdec(substr(0, 2)),
     hexdec(substr(2, 2)),
     hexdec(substr(4, 2))];
     
$arr = implode($arr);

$_GET['color'] == $arr;

$backgroundColor = $_GET['color'];
}
$link1 = '<a href="/homeWork/Tadeuš_Edmond_Kuncevič_7.php">Pirmas linkas</a>'.'<br>';
echo '<div style="width: 100%; height: 100vh; background-color:'.$backgroundColor.'; font-size: 60px; line-height: 70px; paddring: 20px; border: 6px solid red; text-decoration: none;">'.$link1.'</div>';

echo '<br><br>--------------------------Uzduotis nr. 3<br><br>';

if(isset($_GET['color']) && isset($_GET['Action'])) {
    if (!empty($_GET['color'])) {
        echo 'Jusu pasirinkta spalva yra atvaizduota uzdavinyje 2.';
    } 
    else {
        echo 'Neirasete spalvos.';
    }
    
 
} else {
    echo 'Iveskite spalvos koda.<br><br>';
}

?>

<form action="" method="get">

<input type="text" name="color" id="spalva" value="<?= $_GET['color'] ?? '' ?>">

<button type="submit" name="Action" value="1">Get COLOR</button>

</form>

<?php

