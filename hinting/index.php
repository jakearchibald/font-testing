<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<style>
		@font-face {
			font-family: 'josefin';
			src: url('../fonts/josefinfull/josefinslab-regular-webfont.eot');
			src: url('../fonts/josefinfull/josefinslab-regular-webfont.eot#iefix') format('embedded-opentype'),
			     url('../fonts/josefinfull/josefinslab-regular-webfont.woff') format('woff'),
			     url('../fonts/josefinfull/josefinslab-regular-webfont.ttf')  format('truetype'),
			     url('../fonts/josefinfull/josefinslab-regular-webfont.svg#svgFontName') format('svg');
		}
		@font-face {
			font-family: 'josefin-no-hint';
			src: url('../fonts/josefin-no-hint/josefinslab.eot');
			src: url('../fonts/josefin-no-hint/josefinslab.eot#iefix') format('embedded-opentype'),
			     url('../fonts/josefin-no-hint/josefinslab.woff') format('woff'),
			     url('../fonts/josefin-no-hint/josefinslab.ttf')  format('truetype'),
			     url('../fonts/josefin-no-hint/josefinslab.svg#svgFontName') format('svg');
		}
		.josefin {
			font: normal 1em/1 josefin, sans-serif;
		}
		.josefin-no-hint {
			font: normal 1em/1 josefin-no-hint, sans-serif;
		}
		.josefin,
		.josefin-no-hint {
			margin: 0;
		}
	</style>
</head>
<body>
	<h1>hinting</h1>
	<p class="josefin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at enim nec tellus cursus pharetra. Suspendisse vitae sem vel quam dignissim feugiat. Nulla sed justo massa. Proin non dui sed libero pulvinar consectetur eu sed justo. Curabitur facilisis sem id tellus vulputate et iaculis nisl aliquam. Fusce egestas, lacus in aliquam ullamcorper, ante metus luctus nisl, vestibulum consequat ligula dui sed arcu. Vivamus euismod sapien at tortor tincidunt pretium. Mauris id lectus ante. Phasellus porttitor bibendum fermentum. Duis sed nulla dolor</p>
	<h1>sans-hinting</h1>
	<p class="josefin-no-hint">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at enim nec tellus cursus pharetra. Suspendisse vitae sem vel quam dignissim feugiat. Nulla sed justo massa. Proin non dui sed libero pulvinar consectetur eu sed justo. Curabitur facilisis sem id tellus vulputate et iaculis nisl aliquam. Fusce egestas, lacus in aliquam ullamcorper, ante metus luctus nisl, vestibulum consequat ligula dui sed arcu. Vivamus euismod sapien at tortor tincidunt pretium. Mauris id lectus ante. Phasellus porttitor bibendum fermentum. Duis sed nulla dolor</p>
</body>
</html>