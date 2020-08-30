<style>
    body,
    .on-top{
        background: black;
    }
</style>

<?php
echo '<br><br>--------------------------Uzduotis nr. 10<br><br>';
$random = range(1, rand(3, 10));
$arrayCount = 0;
$charai = 'ABCDEFGHIJ';
$random1 = '';
$count = 0;

?>
<div class="abc" style="display: inline-block; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 0; position: absolute; text-align: center;">

<form action="" method="post">
    <?php
        if (!isset($_POST['button'])) {
            $result = '<h1 style="color: #ffffff">Pasirinkite!</h1><br>';
            echo $result;
        } else {
            $result = '';
        }
        if (isset($_POST['button']) && !isset($_POST["$count"])) {
            $result = '<h1 style="color: #ffffff">Nepasirinkote!</h1><br>';
            echo $result;
        }
        // if ($_POST['button'] = 'pressed') {
        //     echo '<style>
        //             body,
        //             .on-top{
        //                 background: #ffffff;
        //             }
        //         </style>';
        // }

        foreach ($random as $value) {
            $count++;
            $random1 = $charai[rand(0, strlen($charai)-1)];
            echo '<div style="padding-left: 20px; padding-right: 20px; background: white;"><input type="checkbox" 
                    name="'.$count.'" id="_'.$count.'" 
                    value="'.$random1.'">
                <label for="_'.$count.'">'.$random1.'</label></div><br>';
        }

        $arrayCount = count($_POST)-2;

    ?>
    <br>
        <input type="hidden" name="all" value="<?= count($random) ?? 0 ?>">
        <button type="submit" name="button" value="pressed" id="button">DISCO!</button>
        
    </form>
</div>

<?php
if (isset($_POST['button']) && $arrayCount != 0) {

    echo '
        <style>
            body,
            .on-top{
                background: #ffffff;
            }
        </style>
        <div class="on-top" style="display: inline-block; width: 100%; height: 100vh; z-index: 1; position: absolute; text-align: center;">
            <h1 style="font-size: 50px; line-height: 60px; color: blue;">
                Buvo pazymeta: '.$arrayCount.' -checkbox\'u.
            </h1>
            <h2>Buvo sugeneruota checkbox\'u: '.$_POST['all'].'.</h2>
        </div>';
    die();
}

