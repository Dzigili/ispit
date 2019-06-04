<?php

require_once __DIR__ . '../includes/Upload.php';

$naziv_predmeta = $_POST['naziv_predmeta'];
$opis_predmeta = $_POST['opis_predmeta'];
$inventarski_broj = $_POST['inventarski_broj'];
$kategorija = $_POST['kategorija'];
// $slika_predmeta = $_POST['slika_predmeta'];
$ispravno = $_POST['ispravno'];

require_once __DIR__ . '/../tabele/Inventar.php';

$factory = Upload::factory('../slike');
var_dump($_FILES); die;

$inventar = Inventar::napravi($naziv_predmeta, $opis_predmeta, $inventarski_broj, $kategorija, $slika->destionation, $ispravno);


if ($inventar !== false) {
	header('Location: ../inventar.php');
} else {
	header('Location: ../inventar.php?error=Greska prilikom cuvanja inventara');
}