<?php
 $stu_id = $_POST['sid'];
 $stu_name = $_POST['name'];
 $stu_dob = $_POST['DoB'];
 $stu_gender = $_POST['gender'];
 $stu_note = $_POST['note'];

include 'config.php';

$sql = "UPDATE student SET name = '{$stu_name}', dob = '{$stu_dob}',gender = '{$stu_gender}', note = '{$stu_note}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/StList/index.php");

mysqli_close($conn);

?>
