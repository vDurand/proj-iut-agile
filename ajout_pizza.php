<!DOCTYPE html>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Gestion de pizza</title>
		<!-- IUT Caen - DUT Info (2013-2015) -->
	</head>

	<body>
		<h1>Ajout de pizza</h1>>
		
		<?php

	if($db = MySQLi_connect("localhost","projetAgile",'pizza', 'Agile', 0, '/media/sds1/home/alx22/private/mysql/socket'))
		echo '';
	else
		echo 'Erreur';
	?>
	
			<form method="post" action="post_pizza.php">
			<fieldset>
			<p>
			<label for="name">Nom : </label><input name="name" type="text" id="name" /><br />
			<label for="price">Prix : </label><input type="text" name="price" id="price" />
			</p>
			</fieldset>
			<table>
			<tr><td><input type="submit" value="Ajouter" /></td>
			<td><input type="reset" value="Reset"></td></tr></table></form><?php
	
						
			</body>
	<footer>
		<div>
			Projet Agile <?php echo date('Y');?>
		</div>
	</footer>

</html>