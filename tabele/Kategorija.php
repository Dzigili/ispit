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
}