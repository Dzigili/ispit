<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventar</title>
</head>
<style>
    form {
        width: 50%;
        min-width: 300px;
        border: solid 2px #999;
        padding: 2em;
        margin: auto;
    }
    input {
        padding: 1em;
        width: 100%;
        display: block;
        box-sizing: border-box;
        font-size: 16px;
    }
</style>
<body>
    <form method="POST" action="logika/napravi_inventar.php">
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