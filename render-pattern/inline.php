<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'josefin';
			src: url('../fonts/throttle.php?chunk_size=1000&sleep=0.1&f=josefinfull/josefinslab-bold-webfont.eot');
			src: url('../fonts/throttle.php?chunk_size=1000&sleep=0.1&f=josefinfull/josefinslab-bold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/throttle.php?chunk_size=1000&sleep=0.1&f=josefinfull/josefinslab-bold-webfont.woff') format('woff'),
			     url('../fonts/throttle.php?chunk_size=1000&sleep=0.1&f=josefinfull/josefinslab-bold-webfont.ttf')  format('truetype'),
			     url('../fonts/throttle.php?chunk_size=1000&sleep=0.1&f=josefinfull/josefinslab-bold-webfont.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'cartoonist';
			src: url('../fonts/throttle.php?chunk_size=700&sleep=0.1&f=cartoonist/SF_Cartoonist_Hand-webfont.eot');
			src: url('../fonts/throttle.php?chunk_size=700&sleep=0.1&f=cartoonist/SF_Cartoonist_Hand-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/throttle.php?chunk_size=700&sleep=0.1&f=cartoonist/SF_Cartoonist_Hand-webfont.woff') format('woff'),
			     url('../fonts/throttle.php?chunk_size=700&sleep=0.1&f=cartoonist/SF_Cartoonist_Hand-webfont.ttf')  format('truetype'),
			     url('../fonts/throttle.php?chunk_size=700&sleep=0.1&f=cartoonist/SF_Cartoonist_Hand-webfont.svg#svgFontName') format('svg');
		}
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
</head>
<body>
	<p class="josefin">I'm a webfont!</p>
	<p>I'm not!</p>
	<p class="cartoonist">I'm a webfont too!</p>
</body>
</html>