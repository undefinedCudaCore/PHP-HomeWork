<?php

namespace Main;

use Main\Login;
use Main\User;
use Main\Acc;
use App\DB\JsonDb as DB;
// use App\DB\MySqlDb as DB;

class Show
{
    public function showAll()
    {
        $data = new DB;
        $data->showAll();
        $dataAcc = $data->showAll();
        $countAcc = -1;


            foreach ($dataAcc as $key => $value) {
                $countAcc++;
                $id = $dataAcc[$key]['id'];
                $valueFormat = number_format(intval($value['amount']), 0);
                echo '<div class="acc-nr">
                        <input class="checkbox" type="checkbox" name="account" id="'.$countAcc.'" value="'.$countAcc.'">
                        <div class="span name"><span>'.ucfirst($value['name']).'</span></div>
                        <div class="span surname"><span>'.ucfirst($value['surname']).'</span></div>
                        <div class="span ak"><span>'.$value['ak'].'</span></div>
                        <div class="span account"><span name="saskaita" for="_'.$countAcc.'">'.$value['account'].'</span></div>
                        <input type="text" class="acc-money" name="add'.$countAcc.'">
                        <div class="span eur"><span>'.$valueFormat.' Eur</span><input type="hidden" name="hidden" value="'.$valueFormat.'">
                        <input type="hidden" name="id" value="'.$id.'"></div>
                    </div>';
            }
        return;
    }
    public function sort(){
        $dataSort = json_decode(file_get_contents('./../db/data-acc.json'), 1);
        usort($dataSort, function($a, $b) {
            return $a['surname'] <=> $b['surname'];
        });
        file_put_contents('./../db/data-acc.json', json_encode($dataSort));
    }
}