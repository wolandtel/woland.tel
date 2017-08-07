<?php
	require('Content.php');
	
	header("Content-type: text/html; charset=utf-8");
	
	$config = require('config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=$config['title']?></title>
		<meta name="viewport" content="width=600, user-scalable=yes" />
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		-->
		
		<!-- Latest compiled and minified JavaScript -->
		<!--
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		-->
		
		<!-- Font Awesome CDN -->
		<script src="https://use.fontawesome.com/2e3b6ecdb9.js"></script>
		
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script src="main.js"></script>
		<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	</head>
	<body>
		<div id="block1" class="block container">
			<div class="mask"></div>
			<div class="col-lg-3 col-md-4 col-sm-5">
				<div id="face"></div>
			</div>
			<div class="col-lg-9 col-md-8 col-sm-7">
				<div>
					<h1><?=$config['name']?></h1>
				</div>
<?php
	if ($config['description']):
?>
				<div>
					<h3><?=$config['description']?></h3>
				</div>
<?php
	endif;
				new Content($config['content']);
?>
			</div>
		</div>
	</body>
</html>
