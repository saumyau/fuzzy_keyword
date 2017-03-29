<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
		<ul>
			<li><a href="login.php">HOME</a></li>
			<?php
			//phpinfo();
			//session_start();
			if(isset($_SESSION['id'])){
				echo "<form action='includes/logout.php'>
						<button>LOG OUT</button>
						</form>";
			}
			else{
			//session_start();
			echo "<html><form action='includes/check.php' method='POST'>
			<input type='text' name='uidy' placeholder='User Id'>
			<input type='password' name='pwdy' placeholder='Password'>

			<button type='submit' name='signin'>Sign in</button>

			</form></html>"; 
		      }

			?>
			<li><a href="signup.php">SIGN-UP</a></li>
		</ul>
		</nav>
	</header>
</body>
