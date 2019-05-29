<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <form method="POST" action="./logika/prijavi_se.php">
        <input type="text" name="username"
            placeholder="Unesite username"><br>
        <input type="password" name="password"
            placeholder="Unesite password"><br>
        <input type="checkbox" name="">Zaspamti me<br>
        <input type="submit" value="Prijavi se"><br>
        <p id="error"></p>
    </form>
</body>
</html>