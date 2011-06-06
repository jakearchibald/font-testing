<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<script>
		setTimeout(function(){var a=document,g,b={families:(g=
		["josefin","cartoonist"]),urls:["style.css"]},
		c="webfont_debug.js",d="script",
		e=a.createElement(d),f=a.getElementsByTagName(d)[0],h=g.length;WebFontConfig
		={custom:b},e.src=c,f.parentNode.insertBefore(e,f);for(;h--;a.documentElement
		.className+=' wf-'+g[h].replace(/\s/g,'').toLowerCase()+'-n4-loading');},0)
	</script>
	<style>
		p {
			padding: 20px;
			font: normal 4em/1 sans-serif;
			margin: 0;
		}
		.test {
			background: #aaa;
			margin: 0 0 5px;
		}
		
		.josefin {
			font: normal 4em/1 josefin, sans-serif;
		}
		.wf-josefin-n4-loading .josefin {
			visibility: hidden;
		}
		
		.cartoonist {
			font: normal 4em/1 cartoonist, sans-serif;
		}
		.wf-cartoonist-n4-loading .cartoonist {
			font: normal 3em/1.31 sans-serif;
		}
	</style>
</head>
<body>
	<div class="test">	
		<p class="josefin">I'm a webfont!</p>
	</div>
	<div class="test">
		<p>I'm not!</p>
	</div>
	<div class="test">
		<p class="cartoonist">I'm a webfont too!</p>
	</div>
</body>
</html>