<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php
		$json = file_get_contents('http://python-api/api/requests/v1/profile');
		$obj = json_decode($json);
		echo "<img height=80 width=80 src=$obj></img>";

		echo "<h1> My Repositories </h1> \n";
		$json1 = file_get_contents('http://python-api/api/requests/v1/github');
		$obj1 = json_decode($json1);

		foreach ($obj1 as $content) {
		 	echo "<li>$content</li>";
		 } 
	?>
</body>
</html>
