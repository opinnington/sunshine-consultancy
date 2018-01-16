<?php include("html/include/forum/header.php"); ?>
<?php
$topic=$_POST['topic'];
$comment=$_POST['comment'];
$name=$_SESSION['username'];
$datetime=date("d/m/y h:i:s");

$sql="INSERT INTO `comments`(`topic`, `comment`, `user`, `view`, `reply`) VALUES('$topic', '$comment', '$name', '0', '0')";
$result=mysqli_query($connection,$sql);

if($result)
{
	echo "successful <br>";
	echo "<a href=main_forum.php>View your topic</a>";
}
else
{
	echo "Error";
	echo "<a href=main_forum.php>Return to main forum</a>";
}

//INSERT INTO `comments`(`topic`, `comment`, `user`, `view`, `reply`) VALUES('ggg', 'ggg', 'andrew21', '0', '0')
?>
<?php include("html/include/forum/footer.php"); ?>
