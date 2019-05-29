<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="forma">
		<form method="POST" action="logika/napravi_inventar.php">
        <input type="text" name="naziv_predmeta"
            placeholder="Unesite naziv predmeta"><br>
        <input type="text" name="opis_predmeta"
            placeholder="Unesite opis predmeta"><br>
        <input type="text" name="inventarski_broj"
            placeholder="Unesite inventarski broj"><br>
        <input type="text" name="kategorija"
            placeholder="Ponovite kategoriju"><br>
      

        
<input type="file"
       id="avatar" name="avatar"> <br/>
      

        <input type="submit" value= "Napravi inventar"><br>
        <input type="radio" name="ispravno" value="true"> Ispravno <br/>
        <input type="radio" name="ispravno" value="false"> Neispravno <br/>

        <?php if(isset($_GET['error'])) { ?>
            <p id="error"><?php $_GET['error'] ?></p>  
        <?php } ?>
    </form>
	</div>
	<div class="lista_predmeta"></div>
</body>
</html> 