<?php include("html/include/forum/header.php");?>

<?php

 function deleteTopics($connection)
				{
					if (isset($_POST['topicDelete']))
					{
						$id= $_POST['id'];
						$sql7 = "DELETE FROM comments WHERE id='$id'";
						//$sql8 = ;
						$result7 = $connection->query($sql7);
					}
				}
?>

<!-- Check to see if the user is logged in-->
	<?php if(isset($_SESSION['username']) && $_SESSION['username'] == true) : ?>

		<?php echo "Welcome to Sunshine ".$_SESSION['username']."!"; ?>
		<br><a href="logout.php">Log out</a>

	<?php else : ?>

		<p>You need to <a href="registration.php">login</a> in order to add a topic or comment on the forum</p>

	<?php endif; ?>

	<?php
		$sql="SELECT * FROM $tbl_comments ORDER BY id DESC";
		$result = mysqli_query($connection,$sql);
	?>

	<table class="topics_table">
		<tr class="table_headers_Topics">
			<th>Topic</th>
			<th>Views</th>
			<th>Date/Time</th>
		</tr>

	<?php
	//loop fethiching topics
			while ($rows=mysqli_fetch_array($result)) {
	?>

	<tr class="A_Topic_TR">
		<td class="Topic_data" ><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a></td>
		<td class="Topic_data" ><?php echo $rows['view']; ?></td>
		<td class="Topic_data" ><?php echo $rows['datetime']; ?></td>


<!--Check to see if the account is the admin-->
<?php if(isset($_SESSION['username']) && $_SESSION['username'] == true) : ?>


		<?php if($_SESSION['username'] == 'OliverP') : ?>
			<?php

			echo "<td>
			<form class='delete-topic-form' method='POST' action='".deleteTopics($connection)."'>
			<input name='id' type='hidden' value='".$rows['id']."'>
			<button name='topicDelete' type='submit'>Delete</button>

			</form>
			";

			  ?>

		</td>

		<?php else : ?>

		<?php endif; ?>
<?php else : ?>
<?php endif; ?>



	</tr>
		<?php
	//exit loop
			}
	?>

<!--Check to see if the user is logged in, if they are they will be able to add a topic, if not then the href will not show-->
	<?php if(isset($_SESSION['username']) && $_SESSION['username'] == true) : ?>
	<tr>
		<td colspan="4"><a href="new_topic.php">Create new topic</a></td>
	</tr>

<?php else : ?>

<?php endif; ?>

	</table>


<?php include("html/include/forum/footer.php");?>
