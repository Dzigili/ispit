<?php
session_start();
if(!isset($_SESSION['korisnik_admin_id'])) {
    header('Location: index.php');
    die();
}
require_once __DIR__ . '/tabele/Korisnik.php';
$korisnik = Korisnik::getById($_SESSION['korisnik_admin_id'],'korisnici','Korisnik');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p>Dobrodosao <?= $korisnik->username ?></p>
    <a href="logika/logout.php">Odjavi se</a><br>
    <nav>
    	<ul>
    		<li><a href="admin.php?strana=korisnici">Lista korisnika</a></li>
    		<li><a href="admin.php?strana=kategorije">Lista kategorija</a></li>
    		<li><a href="inventar.php">Inventar</a></li>
    	</ul>
    </nav>
    <hr>
    <?php if(isset($_GET['strana'])): ?>
    	<?php if($_GET['strana'] === 'korisnici'): ?>
    		<?php require_once __DIR__ . '/administracija/lista_korisnika.php'; ?>
		<?php elseif($_GET['strana'] === 'kategorije'): ?>
			<?php require_once __DIR__ . '/administracija/lista_kategorija.php'; ?>
		<?php endif ?>
	<?php endif ?>
</body>
</html>