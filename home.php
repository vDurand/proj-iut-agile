<!DOCTYPE html>

<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Gestion de pizza</title>
		<!-- IUT Caen - DUT Info (2013-2015) -->
	</head>

	<body>
		<h1>Pizza</h1>>
		
		<?php

	if($db = MySQLi_connect("localhost","projetAgile",'pizza', 'Agile', 0, '/media/sds1/home/alx22/private/mysql/socket'))
		echo '';
	else
		echo 'Erreur';
	$i = 2;
	$reponse = mysqli_query($db, "SELECT * FROM Pizza");
	
	while ($donnees = mysqli_fetch_assoc($reponse))
	{
		?>									Nom pizza : <?php echo $donnees['PIZ_Nom']; ?>
			<br/>
			Prix pizza : <?php echo $donnees['PIZ_Prix']; ?>
			<br/><br/>
				        	<?php
	
	}
	mysqli_free_result($reponse);
	?>							
			</body>
	<footer>
		<div>
			Projet Agile <?php echo date('Y');?>
		</div>
	</footer>

</html>