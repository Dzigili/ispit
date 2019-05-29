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
</style>
<body>
    <form method="POST" action="#">
        <input type="password" name="novi_password"
            placeholder="Unesite novi password"><br>
        <input type="password" name="ponovo_password"
            placeholder="Ponovite novi password"><br>
        <input type="submit" value="Promeni password"><br>
        <p id="error"></p>
    </form>
</body>
</html>