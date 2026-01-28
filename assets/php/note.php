<?php
session_start();

require_once 'config.php';

$id=$_SESSION['id'];
$mat=$_POST['matieres'];
$note=$_POST['note'];
$sql="INSERT INTO grades(student_id, matiere, note) VALUES ('".$id."','".$mat."','".$note."')";
$res=mysqli_query($db,$sql);
if ($res) {
   header('location:../pages/note.php?id='.$id);
}else{
    echo "error";
}


?>