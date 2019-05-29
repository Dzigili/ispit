<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registracija</title>
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
    <form method="POST" action="logika/registruj_se.php">
        <input type="text" name="username"
            placeholder="Unesite username"><br>
        <input type="email" name="email"
            placeholder="Unesite E-Mail"><br>
        <input type="password" name="password"
            placeholder="Unesite password"><br>
        <input type="password" name="ponovo_password"
            placeholder="Ponovite password"><br>
        <input type="text" name="ime_prezime"
            placeholder="Unesite Vase ime i prezime"><br>
        <input type="tel" name="telefon"
            placeholder="Unesite broj telefona"><br>
        <input type="submit" value="Registruj se"><br>
        <?php if(isset($_GET['error'])) { ?>
            <p id="error">Vec postoji korisnik sa tim korisnickim imenom ili e-mailom.</p>  
        <?php } ?>
    </form>
</body>
</html>