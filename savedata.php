<?php

 $stu_name = $_POST['name'];
 $stu_dob = $_POST['DoB'];
 $stu_gender = $_POST['gender'];
 $stu_note = $_POST['note'];

$conn = mysqli_connect("localhost","root","","students") or die("Connection Failed");

$sql = "INSERT INTO student(name,dob,gender,note) VALUES ('{$stu_name}','{$stu_dob}','{$stu_gender}','{$stu_note}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/StList/index.php");

mysqli_close($conn);

?>
