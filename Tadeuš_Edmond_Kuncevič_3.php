<?php
echo '-------------- 2020-06-09 --------------<br><br>';

echo '--------------------------Uzduotis nr. 1<br><br>';

    $star = '';
    $count = 0;
    $br = '';
    for ($i=0; $i < 400; $i++) { 
        $star = '*';
        $count++;
        $a = "<div class=\"star\">$star</div>$br";
        
        if($count > 48 && $count < 50) {
            $br = '<br>';
        } elseif ($count >= 50) {
            $br = '';
        }
        if ($count > 98 && $count < 100) {
            $br = '<br>';
        } elseif ($count >= 100) {
            $br = '';
        }
        if ($count > 148&& $count < 150) {
            $br = '<br>';
        } elseif ($count >= 150) {
            $br = '';
        }
        if ($count > 198&& $count < 200) {
            $br = '<br>';
        } elseif ($count >= 200) {
            $br = '';
        }
        if($count > 248&& $count < 250) {
            $br = '<br>';
        } elseif ($count >= 250) {
            $br = '';
        }
        if ($count > 298&& $count < 300) {
            $br = '<br>';
        } elseif ($count >= 300) {
            $br = '';
        }
        if ($count > 348&& $count < 350) {
            $br = '<br>';
        } elseif ($count >= 350) {
            $br = '';
        }
        echo $a;
    }
?>
<style>
    .star{
    display: inline-block;
    word-break: break-all;
    font-size: 20px;
    line-height: 22px;
    }
</style>

<?php
echo '<br><br>--------------------------Uzduotis nr. 2<br><br>';

$count = 0;
$class = '';
$count = 0;
$counter = 0;

for ($i=0; $i < 300; $i++) { 
    $randomas = rand(0, 300);
    $counter++;
    if ($randomas > 150) {
        $count++;
    } 
    if ($randomas > 275) {
        $class = 'class="red"';
    } else {
        $class = '';
    }
    echo "<span $class>$randomas</span>" . ' ';
}
echo "<br><br>Skaiciu didesniu uz 150 yra: $count.";
?>
<style>
    .red {
        color: red;
    }
</style>

<?php
echo '<br><br>--------------------------Uzduotis nr. 3<br><br>';


$sk = 77;
$break = 3000;

for ($i=0; $i < $break; $i++) { 
    echo $sk;
    if (($sk += 77) < $break) {
        echo ', ';
    } else {
        break;
    }
}
echo '.';

// Gycio pavizdys su while ciklu.
// $sk = 0;
// while (true) {
//     echo $sk;
//     if (($sk += 77) < 3000) echo ', ';
//         else break;
// }

echo '<br><br>--------------------------Uzduotis nr. 4 ir 5<br><br>';


$size = 10;
$color = '';
$counter = 1;

for($i = 0; $i < $size; $i++)
{
    echo "<div class='square' style=\"font-size:25; text-align: center;\">";
    $counter++;
    foreach (range(1, $size) as $value) {
        $value++;
        if($counter == $value || $counter + $value == 13) {
            $color = 'color: red;';
        } else {
            $color = 'color: black;';
        }
        echo "<span style=\"padding: 20px; line-height: 50px; $color\">*</span>";
    }
    echo "</div>";
}

echo '<br><br>--------------------------Uzduotis nr. 6<br><br>';

$moneta = rand(0, 1);
$iteracija = rand(rand(1, 25), rand(1, 25));
$herbas = '';
$countHerbas = 0;
$skaicius = '';
$countSkaicius = 0;

foreach (range(1, $iteracija) as $value) {
    if ($moneta == 0) {
        $countHerbas++;
        $herbas = 'H';
        echo $herbas . '<br>';
    } else {
        $skaicius = 'S';
        echo $skaicius;
    }
    if($countHerbas == 1) {
    break;
    }
}

// foreach (range(1, $iteracija) as $value) {
//     if ($moneta == 0) {
//         $countHerbas++;
//         $herbas = 'H';
//         echo $herbas . '<br>';
//     } else {
//         $skaicius = 'S';
//         echo $skaicius;
//     }
//     if($countHerbas == 3) {
//     break;
//     }
// }

echo '<br><br>--------------------------Uzduotis nr. 7<br><br>';

$taskai1 = rand(10, 20);
$taskai2 = rand(5, 25);
$iteracija = 100;
$limitas = 222;
$vardas1 = 'Petras';
$vardas2 = 'Kazys';
$laimetojas = '';

foreach (range(1, $iteracija) as $key => $value) {
    $taskai1 += $taskai1;
    $taskai2 += $taskai2;
    if ($taskai1 > $limitas || $taskai2 > $limitas) {
    break;
    }
    if($taskai1 > $taskai2){
        $laimetojas = 'Laimejo ' .$vardas1;
    } elseif ($taskai1 == $taskai2) {
        $laimetojas = 'Lygiosios';
    } else {
        $laimetojas = 'Laimejo ' .$vardas2;
    }
}

echo "$vardas1 surinko $taskai1 tasku, o $vardas2 surinko $taskai2 tasku. $laimetojas.";

echo '<br><br>--------------------------Uzduotis nr. 8<br><br>';

?>

<style>
    .diamond {
        line-height: 12px;
        text-align: center;
    }
</style>
<div class="diamond">
<?php
for($i=0;$i<=11;$i++){
      
    for($k=5;$k>=$i;$k--){  
        echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";

        echo "<span style=\"color:$color;\">*  </span>";  
    }  
    echo "<br>";  
}  
    for($i=10;$i>=1;$i--){  
        for($k=5;$k>=$i;$k--){  
            echo "   ";  
        }  
    for($j=1;$j<=$i;$j++){  
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        
        echo "<span style=\"color:$color;\">*  </span>";  
    }  
    echo "<br>";  
}  
for($i=0;$i<=11;$i++){
      
    for($k=11;$k>=$i;$k--){  
        echo "* ";  
    }  
    for($j=1;$j<=$i;$j++){  
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";

        echo "<span style=\"color:$color;\">*  </span>";  
    }  
    echo "<br>";  
}  
    for($i=10;$i>=1;$i--){  
        for($k=11;$k>=$i;$k--){  
            echo "*  ";  
        }  
    for($j=1;$j<=$i;$j++){  
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        
        echo "<span style=\"color:$color;\">*  </span>";  
    }  
    echo "<br>";  
}  
?>
</div>

<?php

echo '<br><br>--------------------------Uzduotis nr. 9<br><br>';

$start = microtime(true);
for ($i=0; $i < 1000000; $i++) { 
    $c = "10 bezdzioniu suvalge 20 bananu.";
};
$end = microtime(true);
$firstTime = $end - $start;
echo 'Dvigubu kabuciu laikas: ' .$firstTime;
echo '<br>';

$start = microtime(true);
for ($i=0; $i < 1000000; $i++) { 
    $c = '10 bezdzioniu suvalge 20 bananu.';
};
$end = microtime(true);
$firstTime = $end - $start;
echo 'Viengubu kabuciu laikas: ' .$firstTime;

echo '<br><br>--------------------------Uzduotis nr. 10<br><br>';
echo 'Dalis a----<br>';

$power1a = rand(5, 20);
$power1b = 0;
$count1 = 0;
$count2 = 0;
$vinis = 850;

for ($i=0; $i < 5; $i++) { 
    $count1++;
    do {
        $power1b += $power1a;
        $count2++;
    }
    while ($power1b < $vinis);
    echo "<br>$count1 vini ikale $power1b mm, smugiavo $count2 kartus.<br>";
    
}

echo '<br>Dalis b----<br>';

$power1a = rand(20, 30);
$power1b = 0;
$count1 = 0;
$count2 = 0;
$vinis = 850;
for ($i=0; $i < 5; $i++) { 
    $count1++;
    do {
        $tikimybe = rand(1, 2);
        if ($tikimybe = 1) {
            $power1b += $power1a;
        } else {
            $power1b = $power1b;
        }

        $count2++;
    }
    while ($power1b < $vinis);
    echo "<br>$count1 vini ikale $power1b mm, smugiavo $count2 kartus.<br>";   
}

echo '<br><br>--------------------------Uzduotis nr. 11<br><br>';


$stringas = '';
for ($i=0; $i < 50; $i++) { 
    $randomas = rand(1, 100);
    $stringas .= $randomas.' ';
}
echo $stringas;