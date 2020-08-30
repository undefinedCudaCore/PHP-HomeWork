<?php
namespace Main;

class User
{
    public static function createNew()
    {
        return ['name' => $_POST['user'], 'pass' => md5($_POST['password'])];
    }

    public function userDataCheck()
    {
        if(empty($_POST['user']) || empty($_POST['password'])) {
            $_SESSION['reg'] = '<div class="alert"><h2>Laukeliai negali būti tušti, užpildykite laukelius.</h2></div>';
            header('Location: http://localhost/homeWork/bankas2/public/users/create'); // GET
            die();
        }
        return;
    }
}

