<?php
// session_start();
// if(!isset($_SESSION['korisnik_admin_id'])) {
//     header('Location: index.php');
//     die();
// }

require_once __DIR__ . '/../tabele/Kategorija.php';

try {
	Kategorija::obrisi($_POST['id']);
	echo '{"status":"uspesno"}';
} catch(Exception $ex) {
	echo '{"status":"'.$ex->getMessage().'"}';
}