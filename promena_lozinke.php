<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promena lozinke</title>
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
    a {
        text-decoration: none;
        font-size: 1.5em;
        color: #777;
        float: left;
        display: block;
        width: 100%;
    }
    a:hover {
        color: #000;
    }
</style>
<body>
    <form method="POST" action="./logika/promeni_lozinku.php">
        <input type="text" name="username"
            placeholder="Unesite username"><br>
        <input type="password" name="stari_password"
            placeholder="Unesite stari password"><br>
        <input type="password" name="novi_password"
            placeholder="Unesite novi password"><br>
        <input type="password" name="ponovo_password"
            placeholder="Ponovite novi password"><br>
        <input type="submit" value="Promeni password"><br>
        <?php if(isset($_GET['error'])): ?>
            <p id="error">Pogresno korisnicko ime ili stara lozinka.</p>
        <?php endif ?>
    </form>
    <a href="index.php">Prijavi se</a><br>
    <a href="registracija.php">Registruj se</a><br>
</body>
</html>