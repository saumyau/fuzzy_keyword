<?php
session_start();
$dirr = $_SESSION['file_name'];
echo $dirr;
$keyword = $_POST['search'];
$path = "cd C:/xamppy/htdocs/fuzzy";
shell_exec($path);
$command = "java project123.searchFile ".$keyword." ".$dirr;
echo $command;
$output = shell_exec($command);
header("Refresh:0; url='searched_display.php'");
?>
