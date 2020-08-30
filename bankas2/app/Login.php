<?php
namespace Main;

use App\DB\JsonDb;
// use App\DB\MySqlDb;

class Login
{
    
    private $loginResult = false;

    public function __construct()
    {
        
        // $data = [
        //     ['name' => 'Petras', 'pass' => md5('123')],
        //     ['name' => 'AloYzas', 'pass' => md5('123')],
        // ];
        $data = json_decode(file_get_contents('./../db/data.json'), 1);

       

        
        if (!empty($_POST)) {
            foreach ($data as $user) {
                if ($user['name'] === $_POST['user'] &&
                $user['pass'] === md5($_POST['password'])) {
                    $_SESSION['login'] = 1;
                    $this->loginResult = true;
                    $_SESSION['wrongLogin'] = '';
                }
                else {
                    self::wrongLogin();
                }
            }
        }
    }

    public function wrongLogin()
    {
        return $_SESSION['wrongLogin'] ='<div class="alert"><h2>Neteisingas prįsijungimo vardas ar slaptažodis.</h2></div>';
    }

    public function result()
    {
        return $this->loginResult;
    }

    public static function auth()
    {
        return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
    }

}



