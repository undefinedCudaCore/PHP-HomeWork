<?php
    // Pradžia
    session_start();
    ?>
    <!DOCTYPE html>
    <html>
    <body>
    
    <?php
    $x = $_SESSION['x'] ?? 45;
    echo $x. '<br>';
    $x=$x+100;

    $_SESSION['x'] = $x;
    // Sesijos kintamieji
    $_SESSION['favcolor'] = 'green';
    $_SESSION['favanimal'] = 'cat';
    echo 'Sesijos kintamieji įrašyti.';

    // session_unset();
    // session_destroy();


$i=10;
$x= ++$i - $i++;
echo $x;

$z=array(""=>5, null=>6);
echo sizeof($z);

$x=5;

if($x=2)
	echo "Lygu";
else
    echo "Nelygu";
    
    $z=array(1, 6=>2, 3);
$suma=0;
foreach ($z as $k=>$v){
    $suma+=$k;
}
echo $suma;

$x=null;
$y="";
 
if ($x===$y){
    echo "Lygu";
}else{
    echo "Nelygu";
}

$x=10;
$y=5;
 
echo $x<=>$y;

$i=10;
$x= ++$i - $i++;
echo $x;
$x=5;
 
echo $x>5?"Mažiau":"Daugiau";
$status = "0";
if($status)
	echo "Welcome ";
else
	echo "Login ";
echo " user";	

$user='jonas';
$password='labas';

if($user=="JONAS"){
  if ($password=="LABAS"){
    echo "Sėkmingai prisijungta";
  }else{
    echo "Slaptažodis neteisingas";
  }
 
}else{
   echo "Neteisingas vartotojo vardas";
}

$x=1;
$y=2;
echo $x%$y;


$i=5;
$x= $i++ + ++$i;
echo $x;    
$suma=0;
for ($i=0; $i<5;$i++){
    $suma+= $i++;
}
echo $suma;
function suma($x, $y = 0) {
    echo $x + $y;
}
?>
<?php
echo suma(5, 5);
echo suma(3);
echo '<br>';
$x=15;
$y=10;
if($x>10 || $y<5)
	echo "Teisinga";
else
	echo "Neteisinga";