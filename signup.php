<?php
include 'design.html'; 
//session_start();

if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
}
else{
	echo "You are not logged in!";
}
?>
<br><br>
<?php
if(isset($_SESSION['id'])){
	echo "You are already logged in!";
}
else{
	echo "<body><div class='bs-example'>

	<form action='includes/data.php' method='POST' >

<div class='form-group' style=padding-left:140px;padding-top:20px;'>
      	<label for='firstname' class='control-label col-xs-2'>Firstname</label>
	<div class='col-xs-10'><label>
                <input type='text' class='form-control' name='first' placeholder='Firstname' ></label>
            </div></div>

<div class='form-group' style='padding-left:140px;padding-top:5px;'>
	    <label for='lastname' class='control-label col-xs-2'>Lastname</label>
		<div class='col-xs-10'><label>
        	<input type='name' class='form-control' id='last' placeholder='lastname' ></label>
            </div></div>    

	<div class='form-group' style='padding-left:140px;padding-top:5px;'>
	    <label for='email' class='control-label col-xs-2'>Email Id</label>
		<div class='col-xs-10'><label>
        	<input type='email' class='form-control' id='uid' placeholder='enter your email' ></label>
            </div></div>    	
	
	<div class='form-group' style='padding-left:140px;padding-top:5px;'>
	    <label for='password' class='control-label col-xs-2'>Password</label>
		<div class='col-xs-10'><label>
        	<input type='password' class='form-control' id='pwd' placeholder='...'' ></label>
            </div></div>    	


<div class='form-group' style='padding-left:0px;align:center;padding-right:200px'>
            <div class='col-xs-offset-2 col-xs-10' style='padding-bottom:3px;padding-right:px'>
                <button type='submit' class='btn btn-primary' align='center' >Sign up</button>
		            </div></div>


</form>
</div>
</body>
";
}
?>
<?php
echo "<h3>Data owner login here</h3><br>
	  <form action='dataown.php' method='POST'>
	  <button type='submit' name='login'>Login</button>
	  </form>";

?>
