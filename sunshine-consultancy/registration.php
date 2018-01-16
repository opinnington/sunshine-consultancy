<?php include("html/include/forum/header.php");?>

	<table border="1px" class="register_and_sign_in_table table">
		<tr>
			<th class="table_header_CA">Create an account</th>
			<th class="table_header_SI">Sign in</th>
			<th class="table_header_GV">Guest visit</th>
		</tr>
		<tr>
		<td class="registerform">
		<?php //register?>
			<form method="post">
				<p class="input_register"><label for="r_username">Username:</label><input type="text" name="r_username" required="required" class=""></p>
				<p class="input_register" ><label for="r_email">Email:</label><input type="email" name="r_email" required="required" class=""></p>
				<p class="input_register"><label for="r_password">Password:</label><input type="password" name="r_password" required="required" class=""></p>
				<p class="input_register"><label for="r_password2">Retype Password:</label><input type="password" name="r_password2" required="required" class=""></p>
				<p class="input_register"><input type="submit" name="register" value="Register"></p>
			</form>
			</td>
			<td>
			<?php //login?>
			<form method="post">

				<p class="input_signin"><label for="username">Username:</label><input type="text" name="username" required="required"></p>
				<p class="input_signin"><label for="password">Password:</label><input type="password" name="password" required="required"></p>
				<p class="input_signin"><input type="submit" name="login" class="" value="Sign in"></p>
			</form>
			<td>
				<p><a href="main_forum.php">continue as guest.</a></p>
			</td>
		</tr>
	</table>

	<?php
	//Creating an account
	if(isset($_POST['register']))
	{
		$username=$_POST['r_username'];
		$email=$_POST['r_email'];
		$password=$_POST['r_password'];
		$password2=$_POST['r_password2'];
		//validation
		if(!strpos($email,"@")| !strpos($email,".")| strpos($email," "))
			die("<p>Invalid email address</p>");
		if($password !=$password2)
			die("<p>Passwords do not match</p>");
		$username_exists = mysqli_query($connection,"SELECT * FROM `users` WHERE `username` LIKE '$username'") or die();
		$email_exists = mysqli_query($connection,"SELECT * FROM `users` WHERE `email` LIKE '$email'") or die();
		if(mysqli_num_rows($username_exists)> 0 | mysqli_num_rows($email_exists)> 0)
			die("<p>username or email already exist</p>");
		//account creation
		$sql="INSERT INTO `users`(`username`,`email`,`password`)VALUES('$username','$email','$password')";
		mysqli_query($connection,$sql);

		echo "<p>the account $username has been created</p>";
	}

	//Login an account
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT*FROM `users` WHERE `username`='$username' && `password`='$password'";
		$result = mysqli_query($connection,$sql)or die("Invalid");
	if(mysqli_num_rows($result)>0) //correct login infomation
	{
		while($user = mysqli_fetch_assoc($result))
		{//creation of the session
			$_SESSION['username']=$user['username'];
			header("Location: main_forum.php");
		}
	}
	else //incorrect login infomation
	{
		echo "Invalid username or password";
	}

	}

	include("html/include/forum/footer.php");
?>
