<?php
echo '<br><br>--------------------------Uzduotis nr. 5<br><br>';

echo '<div style="display: inline-block; width: 100%; height: 100vh; background: blue;">
        <form action="?getoparametras=red" method="get">
            <button type="submit" name="get" value="red">BLUE</button>
        </form>
    </div>';

if ($_GET['get'] == 'red') {
    header("Location: ./red.php");
    die();
}