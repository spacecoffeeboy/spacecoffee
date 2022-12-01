<? 
$sno = $_REQUEST['sno'];
$sname = $_REQUEST['sname'];
$kor = $_REQUEST['kor'];
$eng = $_REQUEST['eng'];
$math = $_REQUEST['math'];
$hist = $_REQUEST['hist'];

echo "학번: ".$sno." 이름: ".$sname." 국어: ".$kor." 영어: ".$eng ." 수학: ".$math ." 역사: ".$hist;
?>

<?include("dbconn.php");?>
<?php
$sql = "INSERT INTO examtbl (sno, sname, kor, eng, math, hist)
VALUES ($sno, '$sname', $kor, $eng, $math, $hist)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>