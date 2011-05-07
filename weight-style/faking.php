<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'josefin';
			font-weight: normal;
			src: url('../fonts/josefinfull/josefinslab-regular-webfont.eot');
			src: url('../fonts/josefinfull/josefinslab-regular-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/josefinfull/josefinslab-regular-webfont.woff') format('woff'),
			     url('../fonts/josefinfull/josefinslab-regular-webfont.ttf')  format('truetype');
		}
		
		.test {
			font-family: josefin;
			font-size: 3em;
			margin: 10px 0;
			font-weight: normal;
		}
		.bold {
			font-weight: bold;
		}
		.italic {
			font-style: italic;
		}
	</style>
</head>
<body>
	<h1>Regular</h1>
	<p class="test">abcdefghijklmnopqrstuvwxyz</p>
	<h1>Bold</h1>
	<p class="test bold">abcdefghijklmnopqrstuvwxyz</p>
	<h1>Italic</h1>
	<p class="test italic">abcdefghijklmnopqrstuvwxyz</p>
	<h1>Bold & italic</h1>
	<p class="test bold italic">abcdefghijklmnopqrstuvwxyz</p>
</body>
</html>