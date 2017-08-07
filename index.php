<?php
	require('Content.php');
	
	header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Mikhail Kotelnikov, Programmer</title>
		<meta name="viewport" content="width=600, user-scalable=yes" />
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		-->
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
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
					<h1>Mikhail Kotelnikov</h1>
				</div>
				<div>
					<h3><a href="https://woland.me">GNU/Linux Programmer</a></h3>
				</div>
<?php
				new Content([
					[
						['glyphicon-earphone', 'Mobile', ['tel:+79223445533', '+7 (922) 344-55-33']],
						['glyphicon-earphone', 'Mobile', ['tel:+79223445533', '+7 (996) 32-55-33-4']],
						['glyphicon-envelope', 'E-mail', ['mailto:fox@woland.me', 'fox@woland.me']],
						['fa-telegram', 'Telegram', ['tg:resolve?domain=wolandtel','@wolandtel']],
						['glyphicon-globe', 'Site', ['https://woland.me', 'woland.me']],
						['fa-github', 'GitHub', ['https://github.com/wolandtel', 'wolandtel']],
						['fa-gitlab', 'GitLab', ['https://git.woland.me/explore/projects', 'own']],
						['glyphicon-globe', 'МойКруг', ['https://moikrug.ru/wolandtel', 'wolandtel']],
						['fa-linkedin', 'LinkedIn', ['https://www.linkedin.com/in/wolandtel/en/', 'wolandtel']],
						['fa-skype', 'Skype', ['skype:woland.perm.ru?call', 'woland.perm.ru']],
					],
					[
						['fa-vk', 'ВКонтакте', ['https://vk.com/wolandtel', 'wolandtel']],
						['fa-facebook-official', 'Facebook', ['https://www.facebook.com/wolandtel', 'wolandtel']],
						['fa-twitter', 'Twitter', ['https://twitter.com/wolandtel', 'wolandtel']],
						['fa-instagram', 'Instagram', ['https://www.instagram.com/wolandtel', 'wolandtel']],
					],
					[
						['fa-credit-card', 'Номер карты', '5486 7320 5407 865'],
						['fa-paypal', 'PayPal', ['http://paypal.woland.me', 'wolandtel']],
						['fa-rub', 'Яндекс.Деньги', ['http://money.woland.me', '41001364124799']],
					],
					[
						['fa-bank', 'Получатель', 'Котельников Михаил Алексеевич'],
						['fa-bank', 'Номер счёта', '40817810308030023571'],
						['fa-bank', 'Банк', 'АО «Альфа-Банк», г. Москва'],
						['fa-bank', 'БИК', '044525593'],
						/*
						['fa-bank', 'Кор. Счёт', '30101810200000000593'],
						['fa-bank', 'ИНН Банка', '7728168971'],
						['fa-bank', 'КПП Банка', '770801001'],
						['', 'fa-bank', ''],
						*/
					],
				]);
?>
				<!--
				<span class="glyphicon glyphicon-briefcase"></span>
				<a href="http://hh.woland.me" target="_blank">Full CV</a>
				
				<span class="glyphicon glyphicon-education"></span>
				<span>Main skills:</span>
				<div class="col-sm-9 text-justify">
					GNU/Linux,
					C/C++,
					Python,
					Qt,
					PostgreSQL,
					PHP,
					JS,
					Git,
					Vim
				</div>
				-->
			</div>
		</div>
	</body>
</html>
