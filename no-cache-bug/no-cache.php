<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'josefin';
			src: url('../fonts/delay.php?no-cache&f=josefinfull/josefinslab-bold-webfont.eot');
			src: url('../fonts/delay.php?no-cache&f=josefinfull/josefinslab-bold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?no-cache&f=josefinfull/josefinslab-bold-webfont.woff') format('woff'),
			     url('../fonts/delay.php?no-cache&f=josefinfull/josefinslab-bold-webfont.ttf')  format('truetype'),
			     url('../fonts/delay.php?no-cache&f=josefinfull/josefinslab-bold-webfont.svg#svgFontName') format('svg');
		}
		.josefin {
			font: normal 4em/1 josefin, sans-serif;
		}
	</style>
</head>
<body>
	<p class="josefin">Hello!</p>
	<p>Result: Works! (could be a race condition though)</p>
</body>
</html>