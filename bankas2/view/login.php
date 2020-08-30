<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <img src="../img/Untitled.png" alt="Logo">
    <?php if(isset($_SESSION['wrongLogin'])) echo $_SESSION['wrongLogin']?>
    <div class="login">
        <h2>Norėdami prisijungti įveskite savo duomenis.</h2>
        <form action="<?= Main\App::URL ?>doLogin" method="post">
            <br><label>Įveskite vartotojo vardą</label><br>
            <input type="text" name="user" placeholder="Vartotojo vardas"><br>
            <br><label>Įveskite slaptažodį</label><br>
            <input type="password" name="password" placeholder="Slaptažodis"><br>
            <button class="myButton" type="submit">Prisijungti</button>
        </form>
    </div>
</body>
</html>
