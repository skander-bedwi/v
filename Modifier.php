<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste des etudiant </title>
</head>
<body>

	<?php

		$Param = array ('ID' => $_GET['ID']);

     $Db = new PDO('mysql:host=localhost;dbname=fsegn','root','');
           		$Rq = 'select   ID,  Nom, Prenom, Email from etudiant where ID=:ID ;';

      $Stm = $Db -> prepare ($Rq);
      $Stm -> execute ($Param);
      $etudiant = $Stm -> fetchAll();
      $etudiant = $etudiant[0];

	?>

	    
	     	
  <form action="ModifierAction.php" method="post">
    
    <input type="hidden" name="ID" value="<?=$etudiant['ID'];?>">
  	<p>
  		Nom : <input value="<?=$etudiant['Nom'];?>" type="text" name="Nom" required >
  	</p>
    <p>
      Prenom : <input value="<?=$etudiant['Prenom'];?>" type="text" name="Prenom" required >
    </p>
    <p>
     Email : <input value="<?=$etudiant['Email'];?>" type="text" name="Email" required >
    </p>

  	<p>
  		<input type="submit" name="Envoyer">
  	</p>
  </form>
</body>
</html>