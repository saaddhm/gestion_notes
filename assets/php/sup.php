<?php

require_once 'config.php';

$id=$_GET['id'];


echo $id;

$sql="delete from students where id=".$id;


$res=mysqli_query($db,$sql);
if ($res) {
header('location:../../index.php');


}else {
    echo "error";
}



?>