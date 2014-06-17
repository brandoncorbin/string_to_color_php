<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String to Color PHP</title>
	<style>
		div.item {
			padding:8px 10px; font-family:Helvetica; 
			font-weight:bold;
			font-size:12px;
			border-bottom:solid 1px rgba(0,0,0,.2);
		}
	</style>
</head>
<body>


	<?php

require('string_to_color.php');

echo string_to_color('Brandon Corbin');

for($i=0;$i<100;$i++) {
	$string = (array_key_exists('str', $_REQUEST)) ? $_REQUEST['str'] : "Brandon Corbin";
	$string = $string." ".rand(0,100000);
	echo "<div class='item' style='background-color:".string_to_color($string).";'>".$string."</div>";

}

?>

	
</body>
</html>