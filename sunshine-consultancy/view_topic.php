<?php include("html/include/forum/header.php");?>
<?php
$id=$_GET['id'];

$sql="SELECT * FROM $tbl_comments WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$rows=mysqli_fetch_array($result);

//the comment the user has left with the topic as the title
?>

<?php

 function deleteComments($connection)
				{
					if (isset($_POST['commentDelete']))
					{
						$id= $_POST['id'];
						$sql7 = "DELETE FROM answer WHERE id='$id'";
						//$sql8 = ;
						$result7 = $connection->query($sql7);
					}
				}



?>




<table width="400px" border="1px" align="center" class="table">
	<tr>
		<td><table width="100% " border="1px">
			<tr>
				<td><?php echo $rows['topic']; ?></td>
			</tr>

			<tr>
				<td><?php echo $rows ['comment'] ?></td>
			</tr>

			<tr>
				<td>By: <?php echo $rows['user']; ?></td>
			</tr>

			<tr>
				<td>Date time: <?php echo $rows['datetime']; ?></td>
			</tr>



		</table></td>
	</tr>
</table>
<br>

<?php
//Showing replys to the comment

$sql2="SELECT * FROM $tbl_answer WHERE question_id='$id'";
$result2=mysqli_query($connection,$sql2);
while ($rows=mysqli_fetch_array($result2)) {
	?>

<table width="400" border="1px" align="center" class="table">
	<tr>
		<td>
		<table width="100%" border="1px">

			<tr>
				<td>User</td>
				<td>:</td>
				<td><?php echo $rows['a_name']; ?></td>
			</tr>
			<tr>
				<td>Answer</td>
				<td>:</td>
				<td><?php echo $rows['a_answer']; ?></td>
			</tr>
			<tr>
				<td>Date/Time</td>
				<td>:</td>
				<td><?php echo $rows['a_datetime']; ?></td>


				<!--Check to see if the user is logged in-->
			<?php if(isset($_SESSION['username']) && $_SESSION['username'] == true) : ?>

			</tr>
			<?php $sql6="SELECT username FROM `users`";
			$result6=mysqli_query($connection,$sql6) or die("invalid");
			$user=mysqli_fetch_array($result6);

			?>
			<!--Check to see if its an admin-->
			<?php if($_SESSION['username'] == 'OliverP') : ?>

			<!--Delete form-->
			<?php
			echo "

			<tr>
				<form class='delete-form' method='POST' action='".deleteComments($connection)."'>
					<input type='hidden' name='id' value='".$rows['id']."'>
					<button name='commentDelete' type='submit'>Delete</button>
				</form>
				"; ?>




			</tr>


			<?php else : ?>
			<?php endif; ?>

		<?php else : ?>
		<?php endif; ?>
		</table>
		<td>
	</tr>
</table>
<br>

<?php
}

$sql3="SELECT view FROM $tbl_comments WHERE id='$id'";
$result3=mysqli_query($connection,$sql3);
$rows=mysqli_fetch_array($result3);
$view=$rows['view'];

if(empty($view)){
	$view=1;
	$sql4="UPDATE $tbl_comments(view) VALUES('$view') WHERE id='$id'";
	$result4=mysqli_query($connection,$sql4);
}

$addview=$view+1;
$sql5="UPDATE $tbl_comments SET view='$addview' WHERE id='$id'";
$result5=mysqli_query($connection,$sql5);

?>

<!--The user can input there anwer-->
<?php if(isset($_SESSION['username']) && $_SESSION['username'] == true) : ?>

<br>
<table border="1px" align="center">
	<tr>
		<form name="form 1" method="post" action="add_answer.php">
			<td>
				<table border="1px">
				<tr>
					<td>User</td>
					<td>:</td>
					<td><?php echo $_SESSION['username']; ?></td>

				</tr>
					<tr>
						<td>Answer</td>
						<td>:</td>
						<td><textarea name="a_answer" id="a_answer" required="required"></textarea></td>
					</tr>
					<tr>
					<td><input name="id" type="hidden" value="<?php echo $id; ?>" ></td>
						<td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="reset"></td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>

<?php else : ?>

<?php endif; ?>




<!--Delete comment function-->


			<?php



			?>
<?php include("html/include/forum/footer.php");?>
