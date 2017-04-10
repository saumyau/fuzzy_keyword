<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body{background-color:black;}
.bs-example1{
    	margin: 150px;
	margin-left:300px;
	margin-top:75px;
	margin-right:300px;
	background-color:#99c2ff;
    }
.form-horizontal .control-label{
        padding-top: 2px;
	padding-left: 4px;
    }
h1::first-line {
    color: #ff0000;
    font-variant: small-caps;
}

div.scroll {
    background-color:#0000FF;
    width: 500px;
    height: 100px;
    
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:  	#2F4F4F;
    color: white;
}
</style>
</head>


<?php
session_start();
$x=$_SESSION['id'];
echo $_SESSION['id'];
  echo "<body>
<div>
  <br>
  <br>
  
 <header>
    <center><h1>Fuzzy Keyword Search Over Encrypted Data</h1></center>
    <header>
</div>
    <div class='bs-example1'>
    <h2 style='padding-top:20px;padding-bottom:20px;padding-left:80px;' class='bg-primary'  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Owner</h2>
    <form class='form-horizontal' action='includes/upload.php' method='post' enctype='multipart/form-data'>

    <table style='background-color: red;'>
    <tr>
    <th>Select a file</th>
    <th><input type='file' name='file'></th>
    </tr>
    </table>

        <div class='form-group' style='padding-left:140px;'>
          <div> <br> File Description
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text'  name='firstname' >
 
				</div></div>
                <div class='form-group' style='padding-left:140px;'>
            <div class='col-xs-offset-2 col-xs-10' style='padding-bottom:30px;'>
                
                <input type='submit'>
		<br><br><br>
		</div></div> <div>
    </form>
		
		 <div >



    </div>
    
";
?>
<?php

   $dir = 'C:/xamppy/htdocs/fuzzy/includes/'.$x; 

//print_r($files1);
echo "<table>";
echo   "<tr>";
echo   "<th >Sr.No.</th>";
echo   "<th>Title</th>";
echo   "</tr>";
if (is_dir($dir)){
 
  if ($dh = opendir($dir)){

  $var=1;
    while (($file = readdir($dh)) !== false){ 
        echo "<tr>";
        echo "<td>".$var."</td>";
        echo "<td>".$file." </td>"; 
        echo "</tr>";
         $var++;
    }
    closedir($dh);
  }
}

  
echo "</table>";

?>
</body>
</html>