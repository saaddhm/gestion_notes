<?php


require_once 'config.php';
$id=$_POST['ids'];

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$classe=$_POST['classe'];


$sql="UPDATE students SET nom='".$nom."',prenom='".$prenom."',classe='".$classe."' WHERE id=".$id;

$res=mysqli_query($db,$sql);
if ($res) {
header('location:../../index.php');
}else {
    echo "error";
}

?>