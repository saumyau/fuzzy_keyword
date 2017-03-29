<?php
//include 'header.php';
//session_set();
session_start();
echo $_SESSION['id'];
echo"<form action='includes/upload.php' method='post' enctype='multipart/form-data'>
			<p>Enter title for file</p><input type='text' name='username'><br><br>
		    <p>Enter the keywords for the file</p>
		    <textarea rows=5 columns=20></textarea>
		    <br><input type='file' name='file'>
		    <input type='submit'>
			</form>";
//exit();
?>