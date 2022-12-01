<?include("dbconn.php");?>

<?php
$sno=$_REQUEST['sno'];
$sname=$_REQUEST['sname'];
$kor=$_REQUEST['kor'];
$eng=$_REQUEST['eng'];
$math=$_REQUEST['math'];
$hist=$_REQUEST['hist'];

$sql = "INSERT INTO examtbl(sno,sname,kor,eng,math,hist)
VALUES ('$sno', '$sname', '$kor', '$eng', '$math', '$hist')";

$conn->query($sql);
$conn->close();

header('location:list.php')
?>