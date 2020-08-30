<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <img src="./img/Untitled.png" alt="Logo">
    <?php
    require __DIR__ . '/bootstrap-user.php';

    if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
        header('Location: http://localhost/HomeWork/bankas/'); // GET
        die();
    }
    if (!empty($_POST)) {

        foreach ($dataAcc as $user) {
            if ($user['ak'] == $_POST['kodas']) {
                $_SESSION['note'] = '<div class="alert"><h2>Asmens kodas '.$_POST['kodas'] .' jau yra registruotas.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
            if ($user['account'] == $_POST['saskaita']) {
                $_SESSION['note'] = '<div class="alert"><h2>Sąskaitos numeris '.$_POST['saskaita'] .' jau yra registruotas.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
            if (strlen ($_POST['vardas']) <= 3 ||  strlen ($_POST['pavarde']) <= 3) {
                $_SESSION['note'] = '<div class="alert"><h2>Įrašėte per trumpą vardą arba pavardę.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
            $vardoPatykra = ctype_alpha($_POST['vardas']);
            $pavardesPatykra = ctype_alpha($_POST['pavarde']);
            if ($vardoPatykra != true  || $pavardesPatykra != true) {
                $_SESSION['note'] = '<div class="alert"><h2>Vardas ar pavardė negali savyje turėti skaičių.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
            $tru = is_numeric($_POST['kodas']);
            if ($tru != true) {
                $_SESSION['note'] = '<div class="alert"><h2>Asmens kodas negali turėti raidžių.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
            $tru2 = is_numeric($_POST['pinigai']);
            if ($tru2 != true) {
                $_SESSION['note'] = '<div class="alert"><h2>Įveskite sumą skaičiais.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
            $len = strlen($_POST['kodas']);
            if ($len != 11) {
                $_SESSION['note'] = '<div class="alert"><h2>Asmens kodas gali turėti tik 11 skaitmenų, tikrinkite.</h2></div>';
                header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
                die();
            }
        }
        $kodas = $_POST['kodas'];
        $rest1 = substr($kodas, 0, 1); // pirmas asmens kodo skaicius;
        $rest2 = substr($kodas, 1, 2); // gimimo metai;
        $rest3 = substr($kodas, 3, 2); // gimimo metai;
        $rest4 = substr($kodas, 5, 2); // gimimo metai;
        $rest5 = substr($kodas, 7, 3); // gimimo metai;
        $rest6 = substr($kodas, 10, 1); // gimimo metai;

        if ($rest1 > 6) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašytas pirmas asmens kodo skaicius.</h2></div>';
            header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
            die();
        } elseif ($rest2 < 1) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašyti gimimo metai asmens kode.</h2></div>';
            header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
            die();
        } elseif ($rest3 < 1 || $rest3 > 12) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašytas gimimo mėnuo asmens kode.</h2></div>';
            header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
            die();
        } elseif ($rest4 < 1 || $rest4 > 31) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašyta gimimo diena asmens kode.</h2></div>';
            header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
            die();
        } elseif ($rest5 < 1 || $rest5 > 999) {
            $_SESSION['note'] = '<div class="alert"><h2>Ar jus ne iš šitos planetos? O gal dar negimęs?</h2></div>';
            header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
            die();
        }

        $dataAcc[] = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'ak' => $_POST['kodas'], 'account' => $_POST['saskaita'], 'amount' => $_POST['pinigai']];
        usort($dataAcc, function($a, $b) {
            return $a['surname'] <=> $b['surname'];
        });
        $dataAcc = file_put_contents(__DIR__ .'/data-acc.json', json_encode($dataAcc));
        $_SESSION['note'] = '<script type="text/javascript">alert(\'Valio, pridėta piliečio '.$_POST['vardas'].' '.$_POST['pavarde'].', kurio asmens kodas yra '.$_POST['kodas'].' sąskaita '.$_POST['saskaita'].'. Lėšų likutis yra ' .$_POST['pinigai'].' Eurų.\');</script>';

        header('Location: http://localhost/HomeWork/bankas/newAcc.php'); // GET
        die();
    }
    
    if(isset($_SESSION['note'])) {
        echo $_SESSION['note'];
        unset($_SESSION['note']);
    }
    $string1 = '';
    $string2 = '';
    $string3 = '';
    $string4 = '';
    $string1 .= str_pad(rand(0,99), 2, "0", STR_PAD_LEFT);
    $string2 .= str_pad(rand(0,99), 4, "0", STR_PAD_LEFT);
    $string3 .= str_pad(rand(0,99), 4, "0", STR_PAD_LEFT);
    $string4 .= str_pad(rand(0,99), 4, "0", STR_PAD_LEFT);

    ?>
    <div class="login new-acc">
        <form action="http://localhost/HomeWork/bankas/newAcc.php" method="post">
            <label>Įveskite vardą</label><br><input type="text" name="vardas" placeholder="Vardas"><br>
            <label>Įveskite pavardę</label><br><input type="text" name="pavarde" placeholder="Pavardė"><br>
            <label>Įveskite asmens kodą</label><br><input type="text" name="kodas" placeholder="Asmens kodas"><br>
            <label>Įveskite sąskaitos numerį</label><br><input type="text" name="saskaita" placeholder="Sąskaitos numeris" value="<?='LT'.$string1.' '.'7300'.' '.$string2.' '.$string3.' '.$string4?>" readonly><br>
            <label>Įveskite sumą</label><br><input type="text" name="pinigai" placeholder="Pinigai"><br>
            <button type="submit" class="myButton right">Sukurti naują sąskaitą piliečiui</button>
        </form>
        <br>
        <a href="http://localhost/HomeWork/bankas/bank-acc-panel.php" class="myButton right">Grįžti</a>
    </div>
</body>
</html>