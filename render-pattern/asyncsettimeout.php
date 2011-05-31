<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		p {
			background: #aaa;
			padding: 20px;
			font: normal 4em/1 sans-serif;
			margin: 0 0 5px;
		}
		.josefin {
			font: normal 4em/1 josefin, sans-serif;
		}
		.cartoonist {
			font: normal 4em/1 cartoonist, sans-serif;
		}
	</style>
	<script>
		(function() {
			var link = document.createElement('link'),
				head = document.getElementsByTagName('head')[0];
			link.rel = 'stylesheet';
			link.href = 'style.css';
			setTimeout(function() {
				head.insertBefore(link, head.firstChild);
			}, 0);
		})();
	</script>
</head>
<body>
	<p class="josefin">I'm a webfont!</p>
	<p>I'm not!</p>
	<p class="cartoonist">I'm a webfont too!</p>
</body>
</html>