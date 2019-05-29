<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$password = hash(sha512, $password);

require_once __DIR__ . '/../tabele/Korisnik.php';
$ulogovanKorisnik = Korisnik::login($username, $password);

if ($ulogovanKorisnik) {
	$_SESSION['ulogovanKorisnik'] = true;
	header('Location: ../inventar.php');
} else {
	header('Location: ../error.php');
}

