<?php
namespace Main;

use Main\Login;
use Main\User;
use Main\Acc;
use Main\Remove;
use App\DB\JsonDb as DB;
// use App\DB\MySqlDb as DB;

class App
{
    const DIR = '/homeWork/bankas2/public/';
    const VIEW_DIR = './../view/';
    const URL = 'http://localhost/homeWork/bankas2/public/';
    private static $params = [];

    private static $guarded = ['bank-acc-panel', 'create-account'];

    public static function start()
    {
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);
        if (count(self::$params) == 2) {
            if (self::$params[0] == 'users') {

                if (self::$params[1] == 'addUser') {
                    $newUser = User::createNew();
                    $check = User::userDataCheck();
                    $db = new DB;
                    $db->createUser($newUser);
                }

                if (file_exists(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php')) {
                    require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                }
            }
            if (self::$params[0] == 'account') {

                if (self::$params[1] == 'add-account') {
                    $newAccount = Acc::createNewAccount();
                    $check = Acc::privateDataCheck();
                    $check2 = Acc::personalCodeNumberCheck();

                    $db2 = new DB;
                    $db2->create($newAccount);
                    $cap = new Acc;
                    $newAccount = $cap->capFirstChar($newAccount);

                }

                if (file_exists(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php')) {
                    require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                }
            }
            if (self::$params[0] == 'account') {

                if (self::$params[1] == 'remove-account') {
                    // _dc($_POST['id']);
                    $newId = $_POST['id'];
                    $newSum = Remove::sumItOrNot();
                    // _dc($newSum);
                    $db5 = new DB;
                    $db5->update($newId, $newSum);
                    $db5->show($newId);
                }

                if (file_exists(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php')) {
                    require(self::VIEW_DIR.self::$params[0].'/'.self::$params[1].'.php');
                }
            }
        }
        elseif (count(self::$params) == 1) {
            if (self::$params[0] == 'doLogin') {

                $login = new Login;
    
                if ($login->result()) {
                    self::redirect('bank-acc-panel');
                }
                else {
                    self::redirect('login');
                }
            }

            if (in_array(self::$params[0], self::$guarded)) {
                if (!Login::auth()){
                    self::redirect('login');
                }
            }

            if (file_exists(self::VIEW_DIR.self::$params[0].'.php')) {
                require(self::VIEW_DIR.self::$params[0].'.php');
            }
            // if (self::$params[0] == 'bank-acc-panel') {
            //     $main = Show::showAll();
                
            //     if (file_exists(self::VIEW_DIR.self::$params[0].'.php')) {
            //         require(self::VIEW_DIR.self::$params[0].'.php');
            //     }
            // }
        }

    }

    public static function getUriParams()
    {
        return self::$params;
    }

    public static function redirect($param)
    {
        header('Location: '.self::URL.$param);
        die();
    }
}