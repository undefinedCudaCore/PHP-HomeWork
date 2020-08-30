<?php
namespace App\DB;

use Main\App;
use Main\Remove;
use App\DB\DataBase;
use Ramsey\Uuid\Uuid;

class MySqlDb 
{

    private static $pdo = [];
    private $dataAcc;

    public function __construct()
    {
  
        $host = 'localhost';
        $db   = 'bankas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
             $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
    
    public function createUser(array $userData) : void
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS bankas (id, name, pass) VALUES (?, ?, ?)";
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute([
                (string) Uuid::uuid4(),
                $userData['name'], 
                $userData['pass']
            ]);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
    public function create(array $userData) : void
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS bankas (id, name, surname, ak, account, amount) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute([
                (string) Uuid::uuid4(),
                $userData['name'],
                $userData['surname'],
                $userData['ak'],
                $userData['account'],
                $userData['amount']
            ]);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

    }
 
    // public function update(string $userId, array $userData) : void
    // {
    //     $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
    //     // _dc($userId);
    //     // _dc($userData);
    //     // _dc($dataAcc);
    //     foreach ($dataAcc as $key => $value) {
    //         // _dc($dataAcc[$key]);
    //         if($userId == $dataAcc[$key]){
    //             // _dc($userId);
    //             $userData = $dataAcc;
    //         }
    //         // _dc($userData);
    //     }
    //     file_put_contents('./../db/data-acc.json', json_encode($userData));

    // }
 
    // public function delete( $userId) : void
    // {
        
    //     // get array index to delete
    //     $arr_index = [];
    //     foreach ($userId as $key => $value)
    //     {
    //         if ($key == $_POST['account'])
    //         {
    //             $arr_index[] = $key;
    //         }
    //     }

    //     //delete data
    //     foreach ($arr_index as $i)
    //     {
    //         unset($userId[$i]);
    //     }

    //     // rebase array
    //     $userId = array_values($userId);

    //     // encode array to json and save to file
    //     file_put_contents('./../db/data-acc.json', json_encode($userId));



 
    // }
 
    // public function show(string $userId) : array
    // {
    //     $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
    //     // _dc($userId);
    //     // _dc($userData);
    //     // _dc($dataAcc);
    //     foreach ($dataAcc as $key => $value) {
    //         // _dc($_POST['add'.$countEr]);
    //         if($userId == $value['id']){
    //             $valueFormat = number_format(intval($value['amount']), 0);
    //             echo '
    //                 <div style="display: inline-block; width: 100%; float: left; top: 40%; left: 50%; transform: translate(-50%, -50%); position: absolute;">
    //                     <div style="display: inline-block; width: 15%; float: left; text-align: center;">Vardas: '.ucfirst($value['name']).'</div>
    //                     <div style="display: inline-block; width: 15%; float: left; text-align: center;">Pavardė: '.ucfirst($value['surname']).'</div>
    //                     <div style="display: inline-block; width: 20%; float: left; text-align: center;">Asmens kodas: '.$value['ak'].'</div>
    //                     <div style="display: inline-block; width: 30%; float: left; text-align: center;">Sąskaitos nr.: '.$value['account'].'</div>
    //                     <div style="display: inline-block; width: 20%; float: left; text-align: center;">Suma: '.$valueFormat.' Eur</div>
    //                 </div>';
    //         }
    //     }
    //     return $dataAcc;
    // }
    
    // public function showAll() : array
    // {
    //     return $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
    // }

    // private function save()
    // {
    //     file_put_contents('./../db/data.json', json_encode($this->data));
    // }
    // private function saveAcc()
    // {
    //     file_put_contents('./../db/data-acc.json', json_encode($this->dataAcc));
    // }


}