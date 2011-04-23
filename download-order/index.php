<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'MyWebFont';
			src: url('../fonts/josefinfull/josefinslab-bold-webfont.eot'); /* IE9 Compat Modes */
			src: url('../fonts/josefinfull/josefinslab-bold-webfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
			     url('../fonts/josefinfull/josefinslab-bold-webfont.woff') format('woff'), /* Modern Browsers */
			     url('../fonts/josefinfull/josefinslab-bold-webfont.ttf')  format('truetype'), /* Safari, Android, iOS */
			     url('../fonts/josefinfull/josefinslab-bold-webfont.svg#svgFontName') format('svg'); /* Legacy iOS */
		}
	</style>
</head>
<body>
	Hello!
	<p><?php slow_send_lipsum(15000, 0.2, 500) ?></p>
</body>
</html>