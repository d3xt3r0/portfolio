<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header class="headerbar">
		<?php
			$json = file_get_contents('http://python-api/api/requests/v1/profile');
			$obj = json_decode($json);
			echo "<img class=center height=180 width=180 src=$obj></img>";
		?>
		<br>
		<h1 align="center"> Prathap S S </h1>
	</header>
	
<hr>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.
	</p>
	<h1> My Repositories </h1> 
	<?php
		$json1 = file_get_contents('http://python-api/api/requests/v1/github');
		$obj1 = json_decode($json1);

		foreach ($obj1 as $content) {
		 	echo "<li>$content</li>";
		 } 
	?>
</body>
</html>
