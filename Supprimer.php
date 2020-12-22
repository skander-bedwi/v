<?php 


 $Param = array ('ID' => $_GET['ID']);

     $Db = new PDO('mysql:host=localhost;dbname=fsegn','root','');
           		$Rq = 'delete  from etudiant where ID=:ID ;';

      $Stm = $Db -> prepare ($Rq);
      
      $Retour = $Stm -> execute ($Param);

     if($Retour)
     	header("location:index.php?Message=delete ok");
     else
     	header("location:index.php?Message=echec !!!");
      
?>
