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
    <?php if(isset($_SESSION['note'])) echo $_SESSION['note']; ?>
     <div class="login new-acc">
        <form action="<?= Main\App::DIR ?>account/add-account" method="post">
            <label>Įveskite vardą</label><br><input type="text" name="vardas" placeholder="Vardas"><br>
            <label>Įveskite pavardę</label><br><input type="text" name="pavarde" placeholder="Pavardė"><br>
            <label>Įveskite asmens kodą</label><br><input type="text" name="kodas" placeholder="Asmens kodas"><br>
            <label>Įveskite sąskaitos numerį</label><br><input type="text" name="saskaita" placeholder="Sąskaitos numeris" value="<?= Main\Acc::accountGenerator();?>" readonly><br>
            <label>Įveskite sumą</label><br><input type="text" name="pinigai" placeholder="Pinigai"><br>
            <input type="hidden" name="id" value="<?= Main\Remove::iD(); ?>">
            <button type="submit" class="myButton right">Sukurti naują sąskaitą piliečiui</button>
        </form>
        <br>
        <a href="http://localhost/homeWork/bankas2/public/bank-acc-panel" class="myButton right" <?php $_SESSION['note'] = '';?>>Grįžti</a>
    </div>
</body>
</html>