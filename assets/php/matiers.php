<?php
session_start();
// get format json display
header('Content-Type: application/json');
$id=$_SESSION['id'];
// connect to database
require_once 'config.php';
// get all matiers
$sql="SELECT * FROM matiers WHERE id_mat not IN (
select matiere FROM grades where student_id=".$id."
)";
// execute query
$res=mysqli_query($db,$sql);

if ($res) {
    $data=[];
    while ($row=mysqli_fetch_assoc($res)) {
        $data[]=$row;
    }
    echo json_encode($data);
}

?>