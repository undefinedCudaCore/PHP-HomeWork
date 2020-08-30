<?php
namespace Main;

use Main\Login;
use Main\User;
use Main\Acc;
use App\DB\JsonDb as DB;
// use App\DB\MySqlDb as DB;
use Ramsey\Uuid\Uuid;

class Remove
{
    private $dataAcc;
    public function removeBankAccount()
    {       
        $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
        $db3 = new DB;
        $db3->delete($dataAcc);
                    
        $_POST['account'] = null;
    }
    public function iD()
    {
        $uuidAs = (string) Uuid::uuid4();
        return $uuidAs;
    }
    public function findUserId()
    {
        $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
        
        if (empty($dataAcc)) {
            $add = 0;

        } else {
            $add = 0;
            foreach ($dataAcc as $key => $value) {
                $add++;
            }
        }
        return $add;
    }

    public function sumItOrNot()
    {
        $dataAcc = json_decode(file_get_contents('./../db/data-acc.json'), 1);
        // _dc($dataAcc);  
        $countEr = -1;
        foreach ($dataAcc as $key => $value) {
            $countEr++;

            if (!empty($_POST['add'.$countEr])) {
                // _dc($dataAcc[$key]['amount']);
                if ($_POST['add'.$countEr] < 0) {
                    echo '<script type="text/javascript">alert(\'Iš sąskaitos nuskaičiuota '.$_POST['add'.$countEr].' eur!\');</script>';
                    // header('Location: http://localhost/homeWork/bankas2/public/bank-acc-panel');
                    // die();
                } else {

                    echo '<script type="text/javascript">alert(\'Sąskaita papildyta '.$_POST['add'.$countEr].' eur!\');</script>';
                }
                $dataAcc[$key]['amount'] = $dataAcc[$key]['amount'] + $_POST['add'.$countEr];
                // _dc($dataAcc[$key]['amount']);
                // $dataAcc = array_values($dataAcc);
                // _dc($dataAcc);  
                // file_put_contents('./../data-acc.json', json_encode($dataAcc));
                // header('Location: http://localhost/homeWork/bankas2/public/bank-acc-panel');
                // die();
                return $dataAcc;
            }
        }

        // $countEr = -1;
        // foreach ($dataAcc as $key => $value) {
        //     $countEr++;

        //     if (!empty($_POST['add'.$countEr])) {
        //         // _dc($dataAcc[$key]['amount']);
        //         if ($_POST['add'.$countEr] < 0) {
        //             $_POST['add'.$countEr] = 0;
        //             echo '<script type="text/javascript">alert(\'Negalima įrašyti neigiamo skaičiaus!\');</script>';
        //             // header('Location: http://localhost/homeWork/bankas2/public/bank-acc-panel');
        //             // die();
        //         }
        //         $dataAcc[$key]['amount'] = $dataAcc[$key]['amount'] - $_POST['add'.$countEr];
        //         // _dc($dataAcc[$key]['amount']);
        //         if ($dataAcc[$key]['amount'] < 0) {
        //             $dataAcc[$key]['amount'] = 0;
        //         }
        //         $dataAcc = array_values($dataAcc);
                
        //         echo '<script type="text/javascript">alert(\'Iš sąskaitos nuskaičiuota '.$_POST['add'.$countEr].' eur!\');</script>';
        //         // header('Location: http://localhost/homeWork/bankas2/public/bank-acc-panel');
        //         // die();
        //         // _dc($dataAcc);
        //         // Main\App::redirect('bank-acc-panel');
        //     }
        //     return $dataAcc;

        // }
    }
}
                