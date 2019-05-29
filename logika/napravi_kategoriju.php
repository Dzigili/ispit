<?php

$naziv_kategorije = $_POST['naziv_kategorije'];


require_once __DIR__ . '/../tabele/Kategorija.php';
$inventar = Kategorija::napravi($naziv_kategorije);


if ($inventar !== false) {
	header('Location: ../kategorija.php');
} else {
	header('Location: ../kategorija.php?error=Greska prilikom cuvanja katagorije');
}