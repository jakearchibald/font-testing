<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'josefin';
			src: url('../fonts/throttle.php?f=josefinfull/josefinslab-bold-webfont.eot');
			src: url('../fonts/throttle.php?f=josefinfull/josefinslab-bold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/throttle.php?f=josefinfull/josefinslab-bold-webfont.woff') format('woff'),
			     url('../fonts/throttle.php?f=josefinfull/josefinslab-bold-webfont.ttf')  format('truetype'),
			     url('../fonts/throttle.php?f=josefinfull/josefinslab-bold-webfont.svg#svgFontName') format('svg');
			unicode-range: U+62-66;
		}
		@font-face {
			font-family: 'bangers-a';
			src: url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.eot');
			src: url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.woff') format('woff'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.ttf')  format('truetype'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.svg#svgFontName') format('svg');
			unicode-range: U+61;
		}
		p {
			margin: 10px 0;
		}
		.josefin-bangers {
			font: normal 3em/1 josefin, bangers-a, sans-serif;
		}
	</style>
</head>
<body>
	<p>The next paragraph should use a different font for the first char</p>
	<p class="josefin-bangers">abcdef</p>
</body>
</html>