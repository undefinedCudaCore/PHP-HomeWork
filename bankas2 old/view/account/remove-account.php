<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/button.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
    <img src="../../img/Untitled.png" alt="Logo">
    <?php
        if(isset($_SESSION['actions'])) echo $_SESSION['actions'];
        if (isset($_POST['account']) && $_POST['hidden'] != 0 && $_POST['erase-back-account'] == 'pressed') {
            echo '<script type="text/javascript">alert(\'Ištrinti galima tik vartotoją su tuščia sąskaita!\');</script>';
            Main\App::redirect('bank-acc-panel');
        } elseif (isset($_POST['account']) && $_POST['hidden'] == 0 && $_POST['erase-back-account'] == 'pressed') {


            Main\Remove::removeBankAccount();
            Main\App::redirect('bank-acc-panel');
        }
    ?>
    <div class="login" >
        <a href="<?= Main\App::URL ?>bank-acc-panel" style="margin-top: 10px;" class="myButton right">Grįžti</a>

    </div>
</body>
</html>