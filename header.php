<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</script>
<script>
function validateform(){  
   
var pass=document.myform.password.value;  
if(pass.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  

if (name==null || name==""){  
  alert("Name can't be blank");  
  return false; 
}  
}


</script>
<style>
body{background-color:black;}
.bs-example{
    	margin: 70%;
	margin-left:30%;
	margin-top:10%;
	margin-right:30%;
	background-color:#99c2ff;
    }
	
	
	
.form-horizontal .control-label{
        padding-top: 1%;
	padding-left: 0%;
    }
	
h1{
    color: #ff0000;
    font-variant: small-caps;
	font-size:4vw;
}
</style>
</head>

<body>
	<header>
		<nav>
		<ul>
			<li><a href="login.php">HOME</a></li>
			<header>
    <center><h1>Fuzzy Keyword Search Over Encrypted Data</h1></center>
    <header>
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
			echo "<html><form action='includes/check.php' method='POST' name='myform' onsubmit='return validateform()''  class='form-horizontal>
<div class='bs-example1'>
    <h2 style='padding-top:3%;padding-bottom:3%;padding-left:40%;' class='bg-primary'>LOGIN</h2>
    <form class='form-horizontal'>
        <div class='form-group' style='padding-left:25%;padding-top:5%;'>
            <label for='inputEmail' class='control-label col-xs-2'>Username</label>
            <div class='col-xs-10'><label>
                <input type='email' class='form-control' id='inputEmail' placeholder='Username' name='uidy' ></label>
            </div>
        </div>
        <div class='form-group' style='padding-left:25%;'>
            <label for='inputPassword' class='control-label col-xs-2'>Password</label>
            <div class='col-xs-10'><label>
                <input type='password' class='form-control' id='inputPassword' placeholder='Password' name='pwdy'></label>
            </div>
        </div>
        <div class='form-group' style='padding-left:25%;'>
            <div class='col-xs-offset-2 col-xs-10'>
                <div class='checkbox'>
                    <label><input type='checkbox'> Remember me</label>
                </div>
            </div>
        </div>
        <div class='form-group' style='padding-left:25%;'>
            <div class='col-xs-offset-2 col-xs-10' style='padding-bottom:30%;'>
                <button type='submit' button class='btn btn-success' name='signin'>Login</button>
		<a button class='btn btn-primary'  href='signup.php'>Register</button></a>
		<br><br><br>
		<a button class='btn btn-primary' style='margin-left:0%;margin-right:30%;display:block;margin-top:0%;margin-bottom:0%' href='DO.html' >Data Owner Login Here</button></a>
		

</div></div>

			</form></html>"; 
		      }

			?>
			<li><a href="signup.php">SIGN-UP</a></li>
		</ul>
		</nav>
	</header>
</body>
