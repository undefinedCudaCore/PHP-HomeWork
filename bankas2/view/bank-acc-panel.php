<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank account panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <img src="../img/Untitled.png" alt="Logo">
        <form action="<?= Main\App::URL ?>account/remove-account" method="post">
        <div class="acc-panel">
            <h2>Sąrašas:</h2>
            <div class="table-list">
                <h4>Vardas</h4>
                <h4>Pavardė</h4>
                <h4>Asmens kodas</h4>
                <h4>Sąskaitos numeris</h4>
                <h4>+/-</h4>
                <h4>Likutis</h4>
            </div>
            <div class="list">
    <?php
        // Main\Show::showAll();
        Main\Show::sort(Main\Show::showAll());
    ?>
            <div class="buttons left">
                <a href="<?= Main\App::URL ?>users/create" class="myButton left">Sukurti prisijungimą</a>
                <br>
                <br>
                <a href="<?= Main\App::URL ?>login" class="myButton left" <?= $_SESSION['wrongLogin'] = ''; ?>>Atsijungti</a>
                <br>
                <br>
                <a href="<?= Main\App::URL ?>account/create-account" class="myButton left">Nauja sąskaita</a>
                <br>
                <br>
            </div>
            <div class="buttons right">
                <button class="myButton right" type="submit" name="erase-back-account" value="pressed">Ištrinti sąskaitą</button>
                <br>
                <br>
                <button class="myButton right" type="submit" name="add-amount" value="pressed">Pridėti lėšų</button>
                <br>
                <br>
                <button class="myButton right" type="submit" name="remove-amount" value="pressed">Nuskaičiuoti lėšas</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>