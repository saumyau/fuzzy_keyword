<?php

$conn = mysqli_connect('localhost','root','','balaji');

if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
else{
	echo "success!";
	$sql = "SELECT * FROM saumya";
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()){
		echo "<p>".$row['rank']."</p><br>";
	}
}

?>