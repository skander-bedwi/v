<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter utilisateur </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	

	    
	   <h1 class="class">Ajouter Utilisateur </h1>  	
  <form action="AjouterAction.php" method="post">
    
    <div class="source">
  	<p class="index">
  		Nom : <input  type="text" name="Nom" required >
  	</p>
    <p class="index">
      Prenom : <input  type="text" name="Prenom" required >
    </p>
    <p class="index">
     Email : <input  type="text" name="Email" required >
    </p>

  	<p>
  		<input type="submit" name="Envoyer">
  	</p>
    </div>
  </form>
</body>
</html>