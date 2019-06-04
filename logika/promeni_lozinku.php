<?php
if(!isset($_POST['username'])) {
	header('Location: ../index.php');
	die();
}

$username = $_POST['username'];
$stari_password = $_POST['stari_password'];
$novi_password = $_POST['novi_password'];
$ponovo_password = $_POST['ponovo_password'];

$stari_password = hash('sha512', $stari_password);
$novi_password = hash('sha512', $novi_password);

require_once __DIR__ . '/../tabele/Korisnik.php';
$korisnik = Korisnik::login($username, $stari_password);

if($korisnik !== null) {
	Korisnik::changePassword($username, $novi_password);
	header('Location: ../index.php');
} else {
	header('Location: ../promena_lozinke.php?error=login');
}
