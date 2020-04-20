<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
</head>
<body>
	<?php
		echo "<h1> My Repositories </h1> \n";
		$json = file_get_contents('http://python-api/api/requests/v1/github');
		$obj = json_decode($json);

		$contents = $obj -> $contents;
		foreach ($obj as $content) {
		 	echo "<li>$content</li>";
		 } 
	?>
</body>
</html>
