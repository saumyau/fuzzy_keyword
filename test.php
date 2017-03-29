<?php

mysqli_connect('localhost','root','');
$num1 = 10;
$num2 = '10';

$food = array('pasta','pizza','salad','vegetable');

function check($num1,$num2){
global $food;

$offset = 0;
$find = 'string';
$find_length = strlen(find);

$haystack = 'This is a short string!';

$mapp = array('Healthy'=>array('salad','lily','holy'),'Kilo'=>array('lolly','saumya'));
if($num1!=$num2){
	echo 'Hello';
}
else{
	echo 'Yello...<img src="star.png">..!!';
	echo '<br>'.$food[2];
	echo '<br>'.$mapp['Kilo'][1];
}

while($string_pos=strpos($haystack,$find,$offset)){
	echo '<strong>'.$find.'</strong> found at '.$string_pos.'<br>';
	$offset=$string_pos+$find_length;
}
}

check(3,3);
?>