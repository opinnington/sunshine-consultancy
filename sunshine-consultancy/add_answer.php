<?php include("html/include/forum/header.php");?>
<?php

$id=$_POST['id'];

$sql="SELECT MAX(id) AS Maxa_id FROM $tbl_answer WHERE question_id='$id'";
$result=mysqli_query($connection,$sql);
$rows=mysqli_fetch_array($result);

if($rows)
{
	$Maxa_id = $rows['Maxa_id']+1;
}
else
{
	$Maxa_id = 0;
}

$a_user=$_SESSION['username'];
$a_answer=$_POST['a_answer'];

$datetime=date("d/m/y H:i:s");

//INSERT INTO `answer`() VALUES (0,'OliverP','Yes')
$sql2="INSERT INTO $tbl_answer(`question_id`,`a_name`, `a_answer`)VALUES('$id', '$a_user', '$a_answer')";
$result2=mysqli_query($connection,$sql2);

if($result2)
{
	echo "successful<br>";
	echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";

	$sql3="UPDATE $tbl_comments SET reply='$Maxa_id' WHERE id='$id'";
	$result3=mysqli_query($connection,$sql3);
}
else
{
	echo "Error";
}

?>
<?php include("html/include/forum/footer.php");?>
