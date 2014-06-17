<?php require('string_to_color.php'); ?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>String to Color</title>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
		<script src="string_to_color.js"></script>
		<style>
			body  {
				font-family : 'Helvetica Neue', helvetica, arial, 'sans-serif';
				padding : 20px;
				text-align: center;
			}
			.output {
				margin:20px auto;
				width:300px;
				border-radius:5px;
				padding:20px;
				text-align: center;
				font-weight:bold;
				color:#FFF;
				text-shadow:0px 1px 0px rgba(0,0,0,.3);
			}
			input[type=text] {
				font-size:120%;
				border-radius:4px;
				padding:6px 10px;
				border:solid 1px #EEE;
				width:300px;
			}
			.tags .tag {
				display:inline-block;
				font-size:11px;
				font-weight:bold;
				padding:4px 10px;
				margin-right:10px;
			}
			.icorbin {
				font-size:12px;
				text-decoration: none;
				padding:5px 10px;
				background-color:#EEE;
				border-radius:4px;
				margin:10px auto;
				color:#111;
			}
			h1 {
				margin-bottom:0px;
				padding-bottom:0px;
				font-weight:100;
			}
			p {
				font-size:11px;
				margin-top:0px;
				padding-top:0px;
				margin-bottom:40px;
			}
			code {
				margin-bottom:20px;
				max-width:500px;
				margin: 10px auto 20px;
				background-color:#EEE;
				padding:20px;
				display:block;
				}
			code span {
				font-weight:bold;
				font-family:'Helvetica Neue', Helvetica, sans-serif;
				font-size:33px;
			}
			hr {
				border:none;
				border-bottom:solid 1px rgba(0,0,0,.1);
				margin:10px auto;
			}
			.item {
				padding:10px 15px;
				border-bottom:solid 1px rgba(0,0,0,.2);
				font-family:'Helvetica Neue', helvetica, sans-serif;
				color:#FFF;
				text-shadow:0px 1px 2px rgba(0,0,0,.4);
			}
		</style>
	</head>
	<body>
		
		<h1>String to Color (PHP)</h1>
		<p>Generate a consistent (and good looking) color for any string using PHP</p>
		<code>
			require('string_to_color.php');<br />
			echo '#'.string_to_color("This is my string");
			<hr>
			<span class="color" style="color:<?php echo "#".string_to_color("This is my string"); ?>"><?php echo "#".string_to_color("This is my string"); ?></span>
		</code>
		<?php
			for($i=0;$i<20;$i++) {
				$string = (array_key_exists('str', $_REQUEST)) ? $_REQUEST['str'] : "Brandon Corbin";
				$string = $string." ".rand(0,100000);
				echo "<div class='item' style='background-color:#".string_to_color($string).";'>".$string."</div>";
			}
		?>
		<hr style="border:none; margin-bottom:10px;" />
		<a href="http://icorbin.com" class="icorbin">By Brandon Corbin</a>
		<a href="https://github.com/brandoncorbin/string_to_color_php" class="icorbin">Fork on Github</a>
		
	</body>
</html>