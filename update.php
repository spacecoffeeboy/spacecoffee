<?include("dbconn.php");?>

<?php
$sno=$_REQUEST['sno'];
$sname=$_REQUEST['sname'];
$kor=$_REQUEST['kor'];
$eng=$_REQUEST['eng'];
$math=$_REQUEST['math'];
$hist=$_REQUEST['hist'];

$sql = "update examtbl 
set sno='$sno', 
    sname='$sname', 
    kor='$kor', 
    eng='$eng', 
    math='$math', 
    hist='$hist'
where sno='$sno'";

$conn->query($sql);
$conn->close();

header('location:list.php')
?>