<?php
session_start();
if(isset($_SESSION['korisnik_id'])) {
    header('Location: inventar.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="./logika/prijavi_se.php">
        <input type="text" name="username"
            placeholder="Unesite username"><br>
        <input type="password" name="password"
            placeholder="Unesite password"><br>
        <input type="checkbox" name="">Zapamti me<br>
        <input type="submit" value="Prijavi se"><br>
        <?php if(isset($_GET['error'])): ?>
            <p id="error">Pogresno korisnicko ime/lozinka</p>
        <?php endif ?>
    </form>
</body>
</html>