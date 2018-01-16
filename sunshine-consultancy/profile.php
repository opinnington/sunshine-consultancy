<?php include("html/include/forum/header.php");
	if(!isset($_GET['username']))
		die("<p>No user has been specified</p>");
	if (getUser($_GET['username'])==null)
		die("<p>User $_GET[username] not found<p>");
	$user=getUser($_GET['username']);
?>

<h1><?php echo $_GET['username']?></h1>

<?php
//edit profile
	if(logged_in() && $_GET['username'] == $_SESSION['username']){
?>
<h3><a href="edit.php">Edit infomation</a></h3>
<?php
	}
?>

<table>
	<tr>
		<th class="personalinfomationtable">
			Age:
		</th>
		<td align="left">
			<?php echo $user['age'];?>
		</td>
	</tr>
	<tr>
		<th class="personalinfomationtable">
			Email:
		</th>
		<td class="personalinfomationtabledata">
			<?php echo $user['email'];?>
		</td>
	</tr>
</table>

<?php include("html/include/forum/footer.php");?>
