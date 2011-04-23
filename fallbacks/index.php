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
			src: url('../fonts/delay.php?sleep=2&f=cabinsketch-b-only/cabinsketch-bold-webfont.eot');
			src: url('../fonts/delay.php?sleep=2&f=cabinsketch-b-only/cabinsketch-bold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?sleep=2&f=cabinsketch-b-only/cabinsketch-bold-webfont.woff') format('woff'),
			     url('../fonts/delay.php?sleep=2&f=cabinsketch-b-only/cabinsketch-bold-webfont.ttf')  format('truetype'),
			     url('../fonts/delay.php?sleep=2&f=cabinsketch-b-only/cabinsketch-bold-webfont.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'stix';
			src: url('../fonts/delay.php?sleep=2&f=stix/stix.eot');
			src: url('../fonts/delay.php?sleep=2&f=stix/stix.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?sleep=2&f=stix/stix.woff') format('woff'),
			     url('../fonts/delay.php?sleep=2&f=stix/stix.ttf')  format('truetype'),
			     url('../fonts/delay.php?sleep=2&f=stix/stix.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'bangers-a2';
			src: url('../fonts/delay.php?sleep=6&f=bangers-a-only/bangers-webfont.eot');
			src: url('../fonts/delay.php?sleep=6&f=bangers-a-only/bangers-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/delay.php?sleep=6&f=bangers-a-only/bangers-webfont.woff') format('woff'),
			     url('../fonts/delay.php?sleep=6&f=bangers-a-only/bangers-webfont.ttf')  format('truetype'),
			     url('../fonts/delay.php?sleep=6&f=bangers-a-only/bangers-webfont.svg#svgFontName') format('svg');
		}
		p {
			margin: 10px 0;
		}
		.bangers-cabinsketch {
			font: normal 3em/1 bangers-a, cabinsketch-b, sans-serif;
		}
		.cabinsketch {
			font: normal 3em/1 cabinsketch-b, sans-serif;
		}
		.bangers2 {
			font: normal 3em/1 bangers-a2, sans-serif;
		}
		.stix {
			font: normal 3em/1 sans-serif, stix;
		}
	</style>
</head>
<body>
	<h1>webfont (2 sec delay), sans-serif</h1>
	<p>1 webfont is used below, but it only has a glyph for 'b'.</p>
	<p class="cabinsketch">bbbbbbbEEEEEEE</p>
	
	<h1>webfont (2 sec delay), sans-serif</h1>
	<p>As above, just text in a different order</p>
	<p class="cabinsketch">EEEEEEEbbbbbbb</p>
	
	<h1>webfont (6 sec delay), sans-serif</h1>
	<p>1 webfont is used below, but it only has a glyph for 'a'.</p>
	<p class="bangers2">EEEEEEEaaaaaa</p>
	
	<h1>webfont (no delay), webfont (2 sec delay), sans-serif</h1>
	<p>2 webfonts are used in the next paragraph. One has a glyph for 'a', the other for 'b', neither has 'E'.</p>
	<p class="bangers-cabinsketch">aaaaaaEEEEEEEbbbbbbb</p>
	
	<h1>sans-serif, webfont (2 sec delay)</h1>
	<p>This example uses stix, which contains chars that aren't likely to be in your sans-serif font.</p>
	<p>You should see a sans-serif 'Hello' then an italic omega symbol</p>
	<p class="stix">Hello </p>
</body>
</html>