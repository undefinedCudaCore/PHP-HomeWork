<?php
session_start();

// Naujas prisijungimas

// $dataUser = [
//         ['name' => 'darbuotojas1', 'pass' => hash('md5', 'pss1')],
//         ['name' => 'darbuotojas2', 'pass' => hash('md5', 'pss2')]
// ];

// file_put_contents(__DIR__ .'/data-user.json', json_encode($dataUser));

$dataUser = json_decode(file_get_contents(__DIR__ .'/data-user.json'), 1);


// _d($dataUser);

// Banko sąskaitos

// $dataAcc = [
//     ['name' => 'Petras', 'surname' => 'Petraitis', 'ak' => '37712065569', 'account' => 'LT787290000000130151']
// ];

// file_put_contents(__DIR__ .'/data-acc.json', json_encode($dataAcc));

$dataAcc = json_decode(file_get_contents(__DIR__ .'/data-acc.json'), 1);


// _d($dataAcc);
usort($dataAcc, function($a, $b) {
    return $a['surname'] <=> $b['surname'];
});