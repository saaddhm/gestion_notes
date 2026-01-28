<?php
// get format json display
header('Content-Type: application/json');
// connect to database
require_once 'config.php';
// get all students
$sql="select students.*,TRUNCATE(AVG(grades.note),2) as moy from students,grades 
WHERE students.id=grades.student_id 
GROUP BY students.id
HAVING COUNT(grades.matiere) = 9;";
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