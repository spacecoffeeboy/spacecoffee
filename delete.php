<?include("dbconn.php");?>

<?php
$sno=$_REQUEST['sno'];

$sql = "delete from examtbl where sno='$sno'";

$conn->query($sql);
$conn->close();

header('location:list.php')
?>