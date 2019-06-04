<?php
session_start();
if(!isset($_SESSION['korisnik_id'])) {
    header('Location: index.php');
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
    <title>Inventar</title>
</head>   
<body>
    <p>Dobrodosao</p>
    <a href="logika/logout.php">Odjavi se</a><br>
    <a href="./promena_lozinke.php">Promeni lozinku</a><br>

    <form method="POST" action="logika/napravi_inventar.php" 
            enctype="multipart/form-data">
        <input type="text" name="naziv_predmeta"
            placeholder="Unesite naziv predmeta"><br>
        <input type="text" name="opis_predmeta"
            placeholder="Unesite opis predmeta"><br>
        <input type="text" name="inventarski_broj"
            placeholder="Unesite inventarski broj"><br>
        <input type="text" name="kategorija"
            placeholder="Ponovite kategoriju"><br>

        <input type="file"
            id="avatar" name="avatar"> <br/>

        <input type="radio" name="ispravno" value="true"> Ispravno <br/>
        <input type="radio" name="ispravno" value="false"> Neispravno <br/>
        <input type="submit" value= "Napravi inventar"><br>
        <?php if(isset($_GET['error'])) { ?>
            <p id="error"><?php $_GET['error'] ?></p>  
        <?php } ?>
    </form>