<div align="center">
<?include("dbconn.php");?>

<?php
$sno=$_REQUEST['sno'];

$sql = "SELECT sNo, sName,kor,eng,math,hist,kor+eng+math+hist,(kor+eng+math+hist)/4
FROM examtbl where sno=$sno";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>  

<h2>학생 성적 수정하기</h2>
<form action="update.php" method=post>
학번: <input type=text name=sno value="<?=$row['sNo']?>"><br>
이름: <input type=text name=sname value="<?=$row['sName']?>"><br>
국어: <input type=text name=kor value="<?=$row['kor']?>"><br>
영어: <input type=text name=eng value="<?=$row['eng']?>"><br>
수학: <input type=text name=math value="<?=$row['math']?>"><br>
역사: <input type=text name=hist value="<?=$row['hist']?>"><br>
합계: <input type=text name=hist value="<?=$row['kor+eng+math+hist']?>"><br>
평균: <input type=text name=hist value="<?=round($row['kor+eng+math+hist']/4)?>"><br>
<input type=submit value="수정하기"><br><br>
</form>
<hr width=50%>
<a href=form.php>글쓰기</a> &emsp;
<a href=list.php>목록보기</a> &emsp;
<a href=delete.php?sno=<?=$row['sNo']?>>삭제하기</a>
</div>


<?
$conn->close();
?>