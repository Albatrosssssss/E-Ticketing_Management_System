<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 1</title>
</head>
<body>

	<h1>Page 1</h1>

	<form action="Page2.php" method="POST">
		Full Name: <input type="text" name="fullname">
		<input type="submit">
	</form>

	<?php 
		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>

</body>
</html>