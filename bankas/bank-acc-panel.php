<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank account panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <img src="./img/Untitled.png" alt="Logo">
        <form action="http://localhost/HomeWork/bankas/eraseAcc.php" method="post">
        <div class="acc-panel">
            <h2>Sąrašas:</h2>
            <div class="table-list">
                <h4>Vardas</h4>
                <h4>Pavardė</h4>
                <h4>Asmens kodas</h4>
                <h4>Sąskaitos numeris</h4>
                <h4>+/-</h4>
                <h4>Likutis</h4>
            </div>
            <div class="list">
    <?php
        require __DIR__ . '/bootstrap-user.php';

        $countAcc = -1;
        foreach ($dataAcc as $key => $value) {
                $countAcc++;
                $valueFormat = number_format(intval($value['amount']), 0);
                echo '<div class="acc-nr">
                        <input class="checkbox" type="checkbox" name="account" id="'.$countAcc.'" value="'.$countAcc.'">
                        <div class="span name"><span>'.$value['name'].'</span></div>
                        <div class="span surname"><span>'.$value['surname'].'</span></div>
                        <div class="span ak"><span>'.$value['ak'].'</span></div>
                        <div class="span account"><span name="saskaita" for="_'.$countAcc.'">'.$value['account'].'</span></div>
                        <input type="text" class="acc-money" name="add'.$countAcc.'">
                        <div class="span eur"><span>'.$valueFormat.' Eur</span><input type="hidden" name="hidden" value="'.$valueFormat.'"></div>
                    </div>';
        }
        
        if (!empty($_GET['erased'])) {
                echo '<script type="text/javascript">alert(\'Sąskaita buvo panaikinta!!!\');</script>';
        }
        if (!empty($_GET['noterased'])) {
                echo '<script type="text/javascript">alert(\'Prieš ištrindami sąskaitą, koreguokite likutį!!!\');</script>';
        }
      
        if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
            header('Location: http://localhost/HomeWork/bankas/'); // GET
            die();
        }

    ?>
            <div class="buttons left">
                <a href="http://localhost/HomeWork/bankas/index.php?logout" class="myButton left">Atsijungti</a>
                <br>
                <br>
                <a href="http://localhost/HomeWork/bankas/newAcc.php" class="myButton left">Nauja sąskaita</a>
                <br>
                <br>
            </div>
            <div class="buttons right">
                <button class="myButton right" type="submit" name="erase-back-account" value="pressed">Ištrinti sąskatą</button>
                <br>
                <br>
                <button class="myButton right" type="submit" name="add-amount" value="pressed">Pridėti lėšų</button>
                <br>
                <br>
                <button class="myButton right" type="submit" name="remove-amount" value="pressed">Nuskaičiuoti lėšas</button>
            </div>
        </div>
    </form>
</body>
</html>