<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<script>
		(function() {
            var fonts = ['josefin', 'cartoonist'],
				script = document.createElement('script'),
				firstScript = document.getElementsByTagName('script')[0];
			
			window.WebFontConfig={
				custom:{
					families: fonts,
					urls: ['style.css']
				}
			};
            
			script.src='webfont_debug.js';
            firstScript.parentNode.insertBefore(script, firstScript);
			// YOU ARE HERE
            document.documentElement.className += fonts.join('|').replace(/\s/g, '').toLowerCase().replace(/([^|]+)(?:\||$)/g, ' wf-$1-n4-loading');
        })();
	</script>
	<style>
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
	<script>
		(function() {
			var link = document.createElement('link'),
				head = document.getElementsByTagName('head');
			link.rel = 'stylesheet';
			link.href = 'style.css';
			setTimeout(function() {
				document.getElementsByTagName('head')[0].insertBefore(link, head.firstChild);
			}, 500);
		})();
	</script>
</body>
</html>