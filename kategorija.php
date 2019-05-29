<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategorija</title>
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
    <form method="POST" action="./logika/napravi_kategoriju.php">
        <input type="text" name="naziv_kategorije"
            placeholder="Unesite naziv kategorije"><br>
        <input type="submit" value="Snimi kategoriju"><br>
        <?php if(isset($_GET['error'])) { ?>
            <p id="error">Vec postoji korisnik sa tim korisnickim imenom ili e-mailom.</p>  
        <?php } ?>
    </form>
</body>
</html>