<?php

$Param = array ('ID' => $_POST['ID'],'Nom' => $_POST['Nom'],'Prenom' => $_POST['Prenom'],'Email' => $_POST['Email']);

     $Db = new PDO('mysql:host=localhost;dbname=fsegn','root','');
           		$Rq = 'Update  etudiant set Nom=:Nom, Prenom=:Prenom, Email=:Email  where ID=:ID ;';

      $Stm = $Db -> prepare ($Rq);
     $Retour = $Stm -> execute ($Param);

     if($Retour)
     	header("location:index.php?Message=Update ok");
     else
     	header("location:index.php?Message=echec !!!");
      
?>