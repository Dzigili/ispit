<?php
require_once __DIR__ . '/Tabela.php';

class Kategorija extends Tabela {
	public static function napravi($ime)
	{
		$db = Database::getInstance();

		$query = 'INSERT INTO kategorije (ime) VALUES (:i) ';

		$params = [
			':i' => $ime
 		];

 		try {
 			$db->insert('Kategorija', $query, $params);
 		} catch (Exception $e) {
 			var_dump($e); die();
 		}
 		return $db->lastInsertId();
	}

	public static function getAll() {
		$db = Database::getInstance();

		$query = 'SELECT * FROM kategorije';

		return $db->select('Kategorija', $query);
	}

	public static function obrisi($id) {
		$db = Database::getInstance();
		$query = 'DELETE FROM kategorije WHERE id = :id';
		$params = [':id' => $id];

		$db->delete($query, $params);
	}
}