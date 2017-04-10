<?php
include 'design1.css'; 
//session_start();

if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
}
else{
	echo "You are not logged in!";
}
?>
<br><br>
<html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
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
<body>
</body></body>

</html>

<?php
if(isset($_SESSION['id'])){
	echo "You are already logged in!";
}
else{

	echo "
<body>
	<br>
  
  
 <header>
    <center><h1>Fuzzy Keyword Search Over Encrypted Data</h1></center>
    <header>


	<form name='myform' onsubmit='return validateform()' method='post' class='form-horizontal' action='includes/data.php'>
<div class='bs-example'>
<h3 style='padding-top:5%;padding-bottom:5%;padding-left:40%;' class='bg-primary'>REGISTER</h3>
    

<div class='form-group' style=padding-left:140px;padding-top:20px;'>
      	<label for='firstname' class='control-label col-xs-2'>Firstname</label>
	<div class='col-xs-10'><label>
                <input type='text' class='form-control' name='first' placeholder='Firstname' ></label>
            </div></div>

<div class='form-group' style='padding-left:140px;padding-top:5px;'>
	    <label for='lastname' class='control-label col-xs-2'>Lastname</label>
		<div class='col-xs-10'><label>
        	<input type='text' class='form-control' name='last' placeholder='lastname' ></label>
            </div></div>    

	<div class='form-group' style='padding-left:140px;padding-top:5px;'>
	    <label for='email' class='control-label col-xs-2'>Email Id</label>
		<div class='col-xs-10'><label>
        	<input type='email' class='form-control' name='uid' placeholder='enter your email' ></label>
            </div></div>    	
	
	<div class='form-group' style='padding-left:140px;padding-top:5px;'>
	    <label for='password' class='control-label col-xs-2'>Password</label>
		<div class='col-xs-10'><label>
        	<input type='password' class='form-control' name='pwd' placeholder='...'' ></label>
            </div></div>    	


<div class='form-group' style='padding-left:0px;align:center;padding-right:200px'>
            <div class='col-xs-offset-2 col-xs-10' style='padding-bottom:3px;padding-right:px'>
                <button type='submit' class='btn btn-primary' align='center' style='margin-left:5cm;' >Sign up</button>
		            </div></div>


</form>
</div>
</body>
";
}
?>

