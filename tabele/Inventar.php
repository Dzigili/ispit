<?php
require_once __DIR__ . '/Tabela.php';

class Inventar extends Tabela {
	public $id;
	public $naziv_predmeta;
	public $opis_predmeta;
	public $inventarski_broj;
	public $kategorija;
	public $slika_predmeta;
	public $datum_unosa;

	public static function napravi($naziv_predmeta, $opis_predmeta, $inventarski_broj, $kategorija, $slika_predmeta, $ispravno)
	{
		$db = Database::getInstance();

		$query = 'INSERT INTO inventari' .
			'(naziv_predmeta, opis_predmeta, inventarski_broj, kategorija, slika_predmeta, datum_unosa, ispravno) ' .
			'VALUES (:n, :o, :i, :k, :s, :d, :is)';

		$params = [
			':n' => $naziv_predmeta,
			':o' => $opis_predmeta,
			':i' => $inventarski_broj,
			':k' => $kategorija,
			':s' => $slika_predmeta,
			':d' => date("Y-m-d"),
			':is' => $ispravno  === 'true'
 		];

 		try {
 			$db->insert('Inventar', $query, $params);
 		} catch (Exception $e) {
 			var_dump($e); die;
 		}
 		return $db->lastInsertId();
	}
}