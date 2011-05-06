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
		@font-face {
			font-family: 'josefin';
			font-weight: bold;
			src: url('../fonts/bpdots/BPdotsBold-webfont.eot');
			src: url('../fonts/bpdots/BPdotsBold-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/bpdots/BPdotsBold-webfont.woff') format('woff'),
			     url('../fonts/bpdots/BPdotsBold-webfont.ttf')  format('truetype');
		}
		@font-face {
			font-family: 'josefin';
			font-style: italic;
			font-weight: bold;
			src: url('../fonts/hornswoggled/HORNSWOG-webfont.eot');
			src: url('../fonts/hornswoggled/HORNSWOG-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/hornswoggled/HORNSWOG-webfont.woff') format('woff'),
			     url('../fonts/hornswoggled/HORNSWOG-webfont.ttf')  format('truetype');
		}
		@font-face {
			font-family: 'josefin';
			font-style: italic;
			src: url('../fonts/rapscallion/RAPSCALL-webfont.eot');
			src: url('../fonts/rapscallion/RAPSCALL-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/rapscallion/RAPSCALL-webfont.woff') format('woff'),
			     url('../fonts/rapscallion/RAPSCALL-webfont.ttf')  format('truetype');
		}
		@font-face {
			font-family: 'josefin';
			font-weight: lighter;
			src: url('../fonts/cartoonist/SF_Cartoonist_Hand-webfont.eot');
			src: url('../fonts/cartoonist/SF_Cartoonist_Hand-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/cartoonist/SF_Cartoonist_Hand-webfont.woff') format('woff'),
			     url('../fonts/cartoonist/SF_Cartoonist_Hand-webfont.ttf')  format('truetype');
		}
		
		.test {
			font-family: josefin;
			font-size: 3em;
			margin: 10px 0;
		}
		.bold {
			font-weight: bold;
		}
		.italic {
			font-style: italic;
		}
		.lighter {
			font-weight: lighter;
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
	<h1>Lighter</h1>
	<p class="test lighter">abcdefghijklmnopqrstuvwxyz</p>
</body>
</html>