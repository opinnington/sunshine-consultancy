<?php include("connection.php");

function getUser($user){
	global $connection;
	$sql="SELECT * FROM `users` WHERE `username`='$user'";
	$result=mysqli_query($connection,$sql) or die();
	if(mysqli_num_rows($result)>0){
		return mysqli_fetch_assoc($result);
	}else{
		return null;
	}
}
function logged_in(){
	return isset($_SESSION['username']);
}
function logged_in_as_admin(){
	return isset($_SESSION['usertype']);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sunshine forum</title>
	<link rel="icon" href="html/img/layout/favicon.png">
	<link rel="stylesheet" type="text/css" href="html/css/main.css">
	<script type="text/javascript" src= "html/js/jquery-1.12.3.min.js"></script>
</head>

<body id="body">
	<div id="hero-forum" class="hero">
		<div class="overlay overlay-forum">

				<div id="hero-text-forum">
					<h1 class="hero-text">Sunshine forum</h1>
				</div>

		</div>
	</div>
	<header>
	<nav>

			<ul>
				<!--Check to see if the user is logged in-->
				<?php if(isset($_SESSION['username']) && $_SESSION['username'] == true) : ?>
				<li><a href="profile.php?username=<?php echo $_SESSION['username']; ?>">Profile</a></li>
			<?php else :?>
			<?php endif; ?>
			<li><a href="index.php">Home</a></li>
			<li><a href="main_forum.php">Main Forum</a></li>
			</ul>
		</div>
	</nav>
	</header>
	<div class="content-container">
