<?php
require_once __DIR__ . '/../tabele/Korisnik.php';

$korisnici = Korisnik::getAll();
?>
<script>
	$(function(){
		$('.obrisi').on('click', function(){
			var id = $(this).attr('id').split('_')[1];
			var red = $(this).parent().parent();
			$.ajax({
				'url':'logika/obrisi.php',
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
						alert('Postoje korisnici za tu ulogu.');
					}
				}
			});
		});
	});
</script>
<h2>Lista Korisnika</h2>

<table>
	<thead>
		<tr>
			<th>Ime i prezime</th>
			<th>Telefon</th>
			<th>Korisnicko ime</th>
			<th>Lozinka</th>
			<th>Slika</th>
			<th>Obrisi</th>
			<th>Odobri</th>
			<th>Snimi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($korisnici as $korisnik): ?>
			<tr>
				<td><?= $korisnik->ime_prezime ?></td>
				<td><?= $korisnik->telefon ?></td>
				<td><?= $korisnik->username ?></td>
				<td><?= $korisnik->password ?></td>
				<td><?= $korisnik->slika ?></td>
				<td><button id="obrisi_<?= $korisnik->id ?>" class="obrisi">
				Obrisi</button></td>
				<td><button id="odobri_<?= $korisnik->id ?>" class="odobri">
				Odobri</button></td>
				<td><button id="snimi_<?= $korisnik->id ?>" class="snimi">
				Snimi</button></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>