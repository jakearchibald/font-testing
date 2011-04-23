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
		}
		@font-face {
			font-family: 'bangers-a';
			src: url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.eot');
			src: url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.woff') format('woff'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.ttf')  format('truetype'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=bangers-a-only/bangers-webfont.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'cabinsketch-b';
			src: url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=cabinsketch-b-only/cabinsketch-bold-webfont.eot');
			src: url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=cabinsketch-b-only/cabinsketch-bold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=cabinsketch-b-only/cabinsketch-bold-webfont.woff') format('woff'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=cabinsketch-b-only/cabinsketch-bold-webfont.ttf')  format('truetype'),
			     url('../fonts/throttle.php?chunk_size=250&sleep=0.3&f=cabinsketch-b-only/cabinsketch-bold-webfont.svg#svgFontName') format('svg');
		}
		.josefin {
			font: normal 4em/1 josefin, sans-serif;
		}
		.bangers-cabinsketch {
			font: normal 4em/1 bangers-a, cabinsketch-b, sans-serif;
		}
	</style>
</head>
<body>
	<p class="josefin">Hello!</p>
	<p><?php throttle_lipsum(15000, 0.2, 500) ?></p>
	<p class="bangers-cabinsketch">ab</p>
</body>
</html>