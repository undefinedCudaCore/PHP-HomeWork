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
    <?php if(isset($_SESSION['reg']))echo $_SESSION['reg']; ?>
    <div class="login">
        <h2>Norėdami sukurti prisijungimą įveskite duomenis.</h2>
        <form action="<?= Main\App::URL ?>users/addUser" method="post">
            <br><label>Įveskite vartotojo vardą</label><br>
            <input type="text" name="user"><br>
            <br><label>Įveskite slaptažodį</label><br>
            <input type="password" name="password"><br>
            <button type="submit" class="myButton">Sukurti</button><br>
            <a href="http://localhost/homeWork/bankas2/public/bank-acc-panel" class="myButton right" <?php $_SESSION['reg'] = '';?>>Grįžti</a>
        </form>
    </div>
</body>
</html>