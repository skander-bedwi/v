<?php

$Param = array ('Nom' => $_POST['Nom'],'Prenom' => $_POST['Prenom'],'Email' => $_POST['Email']);

     $Db = new PDO('mysql:host=localhost;dbname=fsegn','root','');
           		$Rq = 'insert into  etudiant (Nom, Prenom, Email) values (:Nom, :Prenom, :Email) ;';

      $Stm = $Db -> prepare ($Rq);
     $Retour = $Stm -> execute ($Param);

     if($Retour)
     	header("location:index.php?Message=insert ok");
     else
     	header("location:index.php?Message=echec !!!");
      
?>