<?include("dbconn.php");?>

<?php
//데이터 베이스 커넥션
// dbconn.php 에서 불러오기
// Create connection

$sql = "SELECT sNo, sName,kor,eng,math,hist,kor+eng+math+hist,(kor+eng+math+hist)/4
FROM examtbl";

$result = $conn->query($sql);
?>
<div align="center">
<h2>목록 보기</h2>
<style>
td {
  text-align : center;
}
</style>
<?
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table border=1 width=400 style="margin-left:auto;margin-right:auto;">
    <tr>
    <th>학번</th>
    <th>이름</th>
    <th>국어</th>
    <th>영어</th>
    <th>수학</th>
    <th>역사</th>
    <th>합계</th>
    <th>평균</th>
    </tr>
    <?
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
    <td><?=$row["sNo"]?></td>
    <td>
    <a href=edit.php?sno=<?=$row["sNo"]?>>  
      <?=$row["sName"]?></td>
    <td><?=$row["kor"]?></td>
    <td><?=$row["eng"]?></td>
    <td><?=$row["math"]?></td>
    <td><?=$row["hist"]?></td>
    <td><?=$row["kor+eng+math+hist"]?></td>
    <td><?=round($row["kor+eng+math+hist"]/4)?></td>
  </tr>
<?  }?>
</table>
</div>
<?
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>