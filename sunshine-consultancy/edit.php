<?php include("header.php");
//redirect if user is not logged in
if(!logged_in())
	header("Location:registration.php");
$user=getUser($_SESSION['username']);
?>

<h1><?php echo $user['username'] ?></h1>
<table class="personalinfomationtable" border="10px">
<form method="post">
<!--change personal infomation-->
<tr>
	<th colspan="2">Personal infomation</th>
</tr>
	<tr class="editage">
		<th>Age: </th>
		<td><input value="<?php echo $user['age']?>" type="text" name="age"></td>
	</tr>
	<tr>
		<th>Email: </th>
		<td><input value="<?php echo $user['email']?>" type="email" name="email"></td>
	</tr>
	<tr>
	<!--Fix this!!!!!!!!!!!!!!!!!-->
		<th colspan="2">
		<form action="http://www.google.co.uk">
			<input class="createtopicbutton" type="submit" name="Update_info" value="Update"S>

		</form>
		</th>
	</tr>









	<!--change password-->
	<tr>
		<th colspan="2">Change password</th>
	</tr>
	<tr>
	<th>Old password:</th>
	<td><input type="password" name="old_password"></td>
	</tr>
	<tr>
	<th>New password:</th>
	<td><input type="password" name="new_password"></td>
	</tr>
	<tr>
	<th>Retype new password:</th>
	<td><input type="password" name="rt_new_password"></td>
	</tr>
	<tr>
		<th colspan="2"><input type="submit" name="Update_password" value="Update"></th>
	</tr>
	
</form>
</table>

<?php
//update users infomation
if(isset($_POST['Update_info']))
{
	$age=$_POST['age'];
	$email=$_POST['email'];
	$sql2="UPDATE `users` SET `age`='$age',`email`='$email' WHERE `username` = '$_SESSION[username]'";
	mysqli_query($connection,$sql2);
	header('Location: index.php');	
 } 
else
{
	null;
}


if(isset($_POST['Update_password']))
{


	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$rt_new_password=$_POST['rt_new_password'];
	$sql="UPDATE `users` SET `password`='$new_password' WHERE `username` = '$_SESSION[username]'";
	if($old_password == "")
	{
		if($old_password==$user['password'])
		{
		
			if($new_password==$rt_new_password)
			{

				$sql="UPDATE `users` SET `password`='$new_password' WHERE `username` = '$_SESSION[username]'";
				mysqli_query($connection,$sql);

			}else
				{
					echo "<p>Passwords no not match</p>";
				}
		}
		else
		{
			echo "<p>Invalid old password</p>";
		}
	}
	else{
		$sql="UPDATE `users` SET `password`='$new_password' WHERE `username` = '$_SESSION[username]'";
		mysqli_query($connection,$sql);
	}

}

?>
<h3><a href="profile.php?username=<?php echo $_SESSION['username']; ?>">Profile</a></h3>
<?php include("footer.php");?>
