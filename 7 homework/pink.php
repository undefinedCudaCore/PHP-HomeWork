<?php
echo '<br><br>--------------------------Uzduotis nr. 8 - pink<br><br>';

echo '<style>
            body{
                background: pink;
            }
        </style>';

if (!empty($_POST) && $_POST['pink'] = 'rose') {
    header("Location: http://localhost/homeWork/7 homework/rose.php?rose=1");
    die();
}

?>

<form action="?rose=1" method="post">

    <button type="submit" name="pink" value="rose">GO TO ROSE</button>

</form>