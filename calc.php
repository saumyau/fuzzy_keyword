<!DOCTYPE html>
<body>
	<form>
		<p>Input number 1:<input type="text" name="num1"></p>
		<p>Input number 2:<input type="text" name="num2"></p>
		*Select*
		<p>Select operation:</p>
		<p>
		<select name="opeator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<button type="submit" name="Submit">Submit</button> 
		<p>Answer:</p>
		<?php
			if(isset($_GET['Submit'])){
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];
				$op = $_GET['opeator'];
				switch($op){
					case "None":
					echo "You must choose an operator!";
					break;
					case "Add":
					echo $result1+$result2;
					break;
					case "Subtract":
					echo $result1-$result2;
					break;
					case "Multiply":
					echo $result1*$result2;
					break;
					case "Divide":
					echo $result1/$result2;
					break;
				}
			}
		?>
	</form>
</body>
</html>