<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'bangers-a';
			src: url('../fonts/bangers-a-only/bangers-webfont.eot');
			src: url('../fonts/bangers-a-only/bangers-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/bangers-a-only/bangers-webfont.woff') format('woff'),
			     url('../fonts/bangers-a-only/bangers-webfont.ttf')  format('truetype'),
			     url('../fonts/bangers-a-only/bangers-webfont.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'cabinsketch-b';
			src: url('../fonts/delay.php?sleep=0&f=cabinsketch-b-only/cabinsketch-bold-webfont.eot');
			src: url('../fonts/delay.php?sleep=0&f=cabinsketch-b-only/cabinsketch-bold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?sleep=0&f=cabinsketch-b-only/cabinsketch-bold-webfont.woff') format('woff'),
			     url('../fonts/delay.php?sleep=0&f=cabinsketch-b-only/cabinsketch-bold-webfont.ttf')  format('truetype'),
			     url('../fonts/delay.php?sleep=0&f=cabinsketch-b-only/cabinsketch-bold-webfont.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'stix';
			src: url('../fonts/delay.php?sleep=0&f=stix/stix.eot');
			src: url('../fonts/delay.php?sleep=0&f=stix/stix.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?sleep=0&f=stix/stix.woff') format('woff'),
			     url('../fonts/delay.php?sleep=0&f=stix/stix.ttf')  format('truetype'),
			     url('../fonts/delay.php?sleep=0&f=stix/stix.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'bangers-a2';
			src: url('../fonts/delay.php?sleep=0&f=bangers-a-only/bangers-webfont.eot');
			src: url('../fonts/delay.php?sleep=0&f=bangers-a-only/bangers-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?sleep=0&f=bangers-a-only/bangers-webfont.woff') format('woff'),
			     url('../fonts/delay.php?sleep=0&f=bangers-a-only/bangers-webfont.ttf')  format('truetype'),
			     url('../fonts/delay.php?sleep=0&f=bangers-a-only/bangers-webfont.svg#svgFontName') format('svg');
		}
		p {
			margin: 10px 0;
			font-size: 5em;
		}
		.bangers-cabinsketch {
			font-family: bangers-a, cabinsketch-b, sans-serif;
		}
		.cabinsketch {
			font-family: cabinsketch-b, sans-serif;
		}
		.bangers2 {
			font-family: bangers-a2, sans-serif;
		}
		.stix {
			font-family: sans-serif, stix;
			font-size: 3em;
		}
		h1 {
			font: bold 1.1em sans-serif;
			margin: 0;
		}
		.test {
			text-align: center;
			width: 300px;
			display: inline-block;
			vertical-align: top;
			*float: left;
		}
	</style>
</head>
<body>
	<div class="test">
		<h1>font-family: font1, sans-serif</h1>
		<p class="cabinsketch">bc</p>
	</div>
	
	<div class="test">
		<h1>font-family: font1, font2, sans-serif</h1>
		<p class="bangers-cabinsketch">abc</p>
	</div>
	
	<div class="test">
		<h1>font-family: sans-serif, stix</h1>
		<p class="stix">c</p>
	</div>
	
</body>
</html>