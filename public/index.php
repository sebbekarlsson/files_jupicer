<?php

	$doc = $_GET["doc"];
	if(!isset($_GET['doc'])){
		$doc = "home.php";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="apps/inputs.js"></script>
	</head>

	<body>
		<?php include("includes/nav.php"); ?>
		<div class="content">
			<?php include("includes/docs/$doc"); ?>
		</div>
	</body>

	<footer>
	</footer>
</html>