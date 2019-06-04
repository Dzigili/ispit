<?php
require_once __DIR__ . '/../tabele/Kategorija.php';

$kategorije = Kategorija::getAll();
?>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
	$(function(){
		$('.obrisi').on('click', function(){
			var id = $(this).attr('id').split('_')[1];
			var red = $(this).parent().parent();
			$.ajax({
				'url':'logika/obrisi_kategoriju.php',
				'method':'post',
				'data':{
					'id':id
				},
				'success': function(poruka) {
					console.log(poruka);
					var p = JSON.parse(poruka)
					if(p.status === 'uspesno') {
						red.remove();
					} else {
						alert('Doslo je do greske.');
					}
				}
			});
		});
	});
</script>
<h2>Lista Kategorija</h2>
<form method="POST" action="./logika/napravi_kategoriju.php">
    <input type="text" name="naziv_kategorije"
        placeholder="Unesite naziv kategorije"><br>
    <input type="submit" value="Snimi kategoriju"><br>
    <?php if(isset($_GET['error'])) { ?>
        <p id="error">Greska prilikom cuvanja kategorije.</p>  
    <?php } ?>
</form>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Naziv kategorije</th>
			<th>Obrisi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($kategorije as $kategorija): ?>
			<tr>
				<td><?= $kategorija->id ?></td>
				<td><?= $kategorija->ime ?></td>
				<td><button id="obrisi_<?= $kategorija->id ?>" class="obrisi">
				Obrisi</button></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>