<?php

require_once 'config.php';


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$classe=$_POST['classe'];
$sql="INSERT INTO students( nom, prenom, classe) 
VALUES('".$nom."','".$prenom."','".$classe."')";


$res=mysqli_query($db,$sql);

if ($res) {
   echo json_encode(["message"=>"success"]);
}
else {
      echo json_encode(["message"=>"error"]);

}

?>