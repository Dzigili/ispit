<?php

require_once __DIR__ . '/Tabela.php';

class Korisnik extends Tabela {
	public $id;
	public $username;
	public $password;
	public $email;
	public $ime_prezime;
	public $telefon;
	public $slika;

	public static function register($username, $password, $email, $ime_prezime, $telefon) {
		$db = Database::getInstance();

		$query = 'INSERT INTO korisnici' .
			'(username, password, email, ime_prezime, telefon) ' .
			'VALUES (:u, :p, :e, :i, :t)';

		$params = [
			':u' => $username,
			':p' => $password,
			':e' => $email,
			':i' => $ime_prezime,
			':t' => $telefon
 		];

 		try {
 			$db->insert('Korisnik', $query, $params);
 		} catch (Exception $e) {
 			return false;
 		}
 		return $db->lastInsertId();
	}

	public static function login($username, $password) {
		$db = Database::getInstance();

		$query = 'SELECT * FROM korisnici ' .
			'WHERE username = :u and password = :p ';

		$params = [
			':u' => $username,
			':p' => $password
		];
		$korisinik = $db->select('Korisnik', $query, $params);
		if (empty($korisinik)) {
			return false;
		}

		return true;

	} 
}