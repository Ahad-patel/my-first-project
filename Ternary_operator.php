<!DOCTYPE html>
<html>

<head>
	<title>Ternary operator</title>
</head>

<body>
	<?php
	$a = "john";
	$b = "Jim";

	echo ($a == "john") ? "My name is $a" : "My name is not $a";
	echo "<br><br>";
	echo ($a == "Jim") ? "My name is $b" : "My name is not $b";
	echo "<br><br>";
	echo (5 == "5") ? "It is Not type specific" : "It is type specific";

	?>
</body>

</html>