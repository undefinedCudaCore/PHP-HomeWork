<?php
echo '<br><br>--------------------------Uzduotis nr. 5<br><br>';

echo '<div style="display: inline-block; width: 100%; height: 100vh; background: red;">
        <form action="?getoparametras=blue" method="post">
            <button type="submit" name="get" value="blue">RED</button>
        </form>
    </div>';

if ($_POST['get'] == 'blue') {
    header("Location: ./blue.php");
    die();
}