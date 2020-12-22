<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste des etd</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<table>
  <p class="ajouter">
  	Ajouter un etudiant <a href="Ajouter.php">ici</a>
  </p> 


     <th>Nom</th>
     <th>Prenom</th>
     <th>Email</th>
     <th>Modifier</th>
     <th>Supprimer </th>
	<?php

           	$Db = new PDO('mysql:host=localhost;dbname=fsegn','root','');
           		$Rq = 'select   ID,  Nom, Prenom, Email from etudiant  ;';

           			$Result = $Db -> query ($Rq);
           			
           		   $etudiants  = $Result -> fetchAll();
           		   foreach ($etudiants as $etudiant) {
           			
           				# code...
  ?>     			
	<tr>
		
		<td><?php echo $etudiant ['Nom'];?></td>
			
		<td><?php echo $etudiant ['Prenom'];?></td>

		<td><?php echo $etudiant ['Email'];?></td>
		<td><a  href="Modifier.php?ID=<?php echo $etudiant ['ID'];?>">Modifier</a></td>
		<td><a  href="Supprimer.php?ID=<?php echo $etudiant ['ID'];?>">Supprimer</a></td>
	
		</tr>


	      <?php


             }


        ?>





		
</table>
</body>
</html>