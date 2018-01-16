<?php

	include("html/include/forum/header.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>New Topic</title>
</head>
<body>

<table border="1" align="center">
	<tr>
		<form id="form1" name="form1" method="post" action="add_new_topic.php">
			<td>
				<table width="100%" border="1px">
					<tr>
						<td colspan="2">Create new topic</td>
					</tr>
					<tr>
						<td>Topic: </td>

						<td><input type="text" name="topic" id="topic" size="50" required="required" class="text_box_new_topic"</td>
					</tr>
					<tr>
						<td>Detail: </td>
						<td><textarea name="comment" cols="50" rows="3" id="comment" required="required"></textarea></td>
					</tr>
					<tr>
						<td>Name: </td>

						<td><?php echo $_SESSION['username'] ?></td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="createtopicbutton" type="submit" name="submit" value="Submit">
							<input class="createtopicbutton" type="reset" name="submit2" value="Reset">
						</td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>
</body>
</html>

<?php include("html/include/forum/footer.php"); ?>
