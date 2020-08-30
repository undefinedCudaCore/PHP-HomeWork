<?php
namespace Main;

use Main\App;
use App\DB\JsonDb;
// use App\DB\MySqlDb;

class Acc
{
    public static function createNewAccount()
    {
        return ['id' => $_POST['id'],'name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'ak' => $_POST['kodas'], 'account' => $_POST['saskaita'], 'amount' => $_POST['pinigai']];

    }

    public function capFirstChar($param)
    {
        foreach ($param as $key => $value) {
            $param['name'] = ucfirst($param['name']);
            $param['surname'] = ucfirst($param['surname']);
        }
        return $param;
    }

    public function accountGenerator()
    {
        $string1 = '';
        $string2 = '';
        $string3 = '';
        $string4 = '';
        $string1 .= str_pad(rand(0,99), 2, "0", STR_PAD_LEFT);
        $string2 .= str_pad(rand(0,99), 4, "0", STR_PAD_LEFT);
        $string3 .= str_pad(rand(0,99), 4, "0", STR_PAD_LEFT);
        $string4 .= str_pad(rand(0,99), 4, "0", STR_PAD_LEFT);

        $generated = 'LT'.$string1.' '.'7300'.' '.$string2.' '.$string3.' '.$string4;

        return $generated;
    }

    public function personalCodeNumberCheck()
    {
        $kodas = $_POST['kodas'];
        $rest1 = substr($kodas, 0, 1); // pirmas asmens kodo skaicius;
        $rest2 = substr($kodas, 1, 2); // gimimo metai;
        $rest3 = substr($kodas, 3, 2); // gimimo menuo;
        $rest4 = substr($kodas, 5, 2); // gimimo diena;
        $rest5 = substr($kodas, 7, 3); // gimimusiu skaicius;
        $rest6 = substr($kodas, 10, 1); // K skaicius;

        if ($rest1 > 6) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašytas pirmas asmens kodo skaicius.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
        } elseif ($rest2 < 1) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašyti gimimo metai asmens kode.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
        } elseif ($rest3 < 1 || $rest3 > 12) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašytas gimimo mėnuo asmens kode.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
        } elseif ($rest4 < 1 || $rest4 > 31) {
            $_SESSION['note'] = '<div class="alert"><h2>Blogai įrašyta gimimo diena asmens kode.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
        } elseif ($rest5 < 1 || $rest5 > 999) {
            $_SESSION['note'] = '<div class="alert"><h2>Ar jus ne iš šitos planetos? O gal dar negimęs?</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
        }
        return;
    }

    public function privateDataCheck()
    {
        $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
        $vardoPatykra = ctype_alpha($_POST['vardas']);
        $pavardesPatykra = ctype_alpha($_POST['pavarde']);
        $tru = is_numeric($_POST['kodas']);
        $tru2 = is_numeric($_POST['pinigai']);
        $len = strlen($_POST['kodas']);

        foreach ($dataAcc as $user) {
            if ($user['ak'] == $_POST['kodas']) {
            $_SESSION['note'] = '<div class="alert"><h2>Asmens kodas '.$_POST['kodas'] .' jau yra registruotas.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
            }

            if ($user['account'] == $_POST['saskaita']) {
            $_SESSION['note'] = '<div class="alert"><h2>Sąskaitos numeris '.$_POST['saskaita'] .' jau yra registruotas.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
            }

            if (strlen ($_POST['vardas']) <= 3 ||  strlen ($_POST['pavarde']) <= 3) {
            $_SESSION['note'] = '<div class="alert"><h2>Įrašėte per trumpą vardą arba pavardę.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
            die();
            }

            if ($vardoPatykra != true  || $pavardesPatykra != true) {
                $_SESSION['note'] = '<div class="alert"><h2>Vardas ar pavardė negali savyje turėti skaičių.</h2></div>';
                header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
                die();
            }

            if ($tru != true) {
                $_SESSION['note'] = '<div class="alert"><h2>Asmens kodas negali turėti raidžių.</h2></div>';
                header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
                die();
            }
            if ($tru2 != true) {
                $_SESSION['note'] = '<div class="alert"><h2>Įveskite sumą skaičiais.</h2></div>';
                header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
                die();
            }

            if ($len != 11) {
                $_SESSION['note'] = '<div class="alert"><h2>Asmens kodas gali turėti tik 11 skaitmenų, tikrinkite.</h2></div>';
                header('Location: http://localhost/homeWork/bankas2/public/account/create-account'); // GET
                die();
            }
        }
        return;
    }
}
