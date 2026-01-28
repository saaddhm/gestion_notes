<?php
// get format json display
header('Content-Type: application/json');
// connect to database
require_once 'config.php';
// get all students
$sql="select students.* from students WHERE students.id NOT IN (SELECT student_id FROM grades )";
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