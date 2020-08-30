<?php
require __DIR__ . '/bootstrap-user.php';

   $countEr = -1;
   foreach ($dataAcc as $value) {
       $countEr++;

       if (!empty($_POST['add'.$countEr]) && $_POST['add-amount'] == 'pressed') {

               $dataAcc[$countEr]['amount'] = $dataAcc[$countEr]['amount'] + $_POST['add'.$countEr];
               $number++;

           $dataAcc = array_values($dataAcc);
           file_put_contents('data-acc.json', json_encode($dataAcc));
       
           header('Location: http://localhost/HomeWork/bankas/bank-acc-panel.php');
           die();
       }
   }


   $countEr = -1;
   foreach ($dataAcc as $value) {
       $countEr++;

       if (!empty($_POST['add'.$countEr]) && $_POST['remove-amount'] == 'pressed') {

               $dataAcc[$countEr]['amount'] = $dataAcc[$countEr]['amount'] - $_POST['add'.$countEr];
               $number++;
            if ($dataAcc[$countEr]['amount'] < 0) {
                $dataAcc[$countEr]['amount'] = 0;
            }
           $dataAcc = array_values($dataAcc);
           file_put_contents('data-acc.json', json_encode($dataAcc));
       
           header('Location: http://localhost/HomeWork/bankas/bank-acc-panel.php');
           die();
       }
   }

   if ($_POST['hidden'] != 0) {
         
        header('Location: http://localhost/HomeWork/bankas/bank-acc-panel.php?noterased=20');
        die();
   }

if (isset($_POST['account']) && $_POST['erase-back-account'] == 'pressed') {

    // read json file and decode json to associative array -> requere from bootstrap-user.php
        // if ($_POST['hidden'] = 0 && $_POST['erase-back-account'] == 'pressed') {

            // get array index to delete
            $arr_index = [];
            foreach ($dataAcc as $key => $value)
            {
                if ($key == $_POST['account'])
                {
                    $arr_index[] = $key;
                }
            }

            //delete data
            foreach ($arr_index as $i)
            {
                unset($dataAcc[$i]);
            }

            // rebase array
            $dataAcc = array_values($dataAcc);

            // encode array to json and save to file
            file_put_contents('data-acc.json', json_encode($dataAcc));

            header('Location: http://localhost/HomeWork/bankas/bank-acc-panel.php?erased=10');
            die();
        } else {
  
            header('Location: http://localhost/HomeWork/bankas/bank-acc-panel.php');
            die();
            
    
}

?>
