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
			'WHERE username = :u AND password = :p ';

		$params = [
			':u' => $username,
			':p' => $password
		];
		$korisinici = $db->select('Korisnik', $query, $params);
		foreach ($korisinici as $korisnik) {
			return $korisnik;
		}
		return null;
	}

	public static function changePassword($username, $novi_password) {
		$db = Database::getInstance();

		$query = 'UPDATE korisnici SET password = :p WHERE username = :u';

		$params = [
			':p' => $novi_password,
			':u' => $username
		];

		$db->update('Korisnik', $query, $params);

	}

	public static function getAll() {
		$db = Database::getInstance();

		$query = 'SELECT * FROM korisnici';

		return $db->select('Korisnik', $query);
	}

	public static function obrisi($id) {
		$db = Database::getInstance();
		$query = 'DELETE FROM korisnici WHERE id = :id';
		$params = [':id' => $id];

		$db->delete($query, $params);
	}

	public static function getByName($username) {
		$db = Database::getInstance();

		$query = 'SELECT * FROM korisnici WHERE username = :u';

		$params = [
			':u' => $username
		];

		$korisnici = $db->select('Korisnik', $query, $params);

		foreach ($korisnici as $korisnik) {
			return $korisnik;
		}
		return null;
	}

}