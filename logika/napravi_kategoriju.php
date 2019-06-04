<?php

$naziv_kategorije = $_POST['naziv_kategorije'];


require_once __DIR__ . '/../tabele/Kategorija.php';
Kategorija::napravi($naziv_kategorije);

header('Location: ../admin.php?strana=kategorije');