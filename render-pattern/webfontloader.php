<?php include '../includes/lib.php' ?><!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title></title>
	<!--[if gt IE 8]><!-->
		<script>
			/*(function() {
				if (window.opera) {return;}
				var doc = document,
					families = ["josefin","cartoonist"],
					scriptStr = "script",
					scriptElm = doc.createElement(scriptStr),
					firstScriptElm = doc.getElementsByTagName(scriptStr)[0],
					familiesLen = families.length;

				WebFontConfig = {custom: {
					families: families,
					urls: ["style.css"]
				}};

				for(; familiesLen--; doc.documentElement.className += ' wf-' + families[familiesLen].replace(/\s/g,'').toLowerCase() + '-n4-loading');
				setTimeout(function() {
					scriptElm.src = "webfont_debug.js";
					firstScriptElm.parentNode.insertBefore(scriptElm, firstScriptElm);
				},0);
			})();*/

			(function(){if(window.opera){return}var a=document,b=
			["josefin","cartoonist"],c="script",d=a.createElement(c),e=a.getElementsByTagName(c)[0],f=b.length;WebFontConfig={custom:{families:b,urls:
			["style.css"]}};for(;f--;a.documentElement.className+=' wf-'+b[f].replace(/\s/g,'').toLowerCase()+'-n4-loading');setTimeout(function(){d.src=
			"webfont_debug.js";e.parentNode.insertBefore(d,e)},0)})()
		</script>
	<!--<![endif]-->
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
		
		/* 
			This is the preferred method. Shows contend straight away,
			switches to web font when it loads. Allows different font
			size & line heights in both states.
		*/
		.cartoonist {
			/* Used for browsers that don't load fonts, in case of failure, & during loading */
			font: normal 3em/1.31 sans-serif;
		}
		.wf-cartoonist-n4-active .cartoonist {
			/* Use the font when loaded */
			font: normal 4em/1 cartoonist, sans-serif;
		}

		/*
			Hide the element (but reserve space) while the font loads.
			This delays the content. Only use if the above method is
			too visually jarring.

			Still provide adjusted fallback styles for browsers that
			don't support web fonts, or they fail to load.
		*/
		.josefin {
			/* Used for browsers that don't load fonts, or in case of failure */
			font: normal 3.4em/1.2 sans-serif;
		}
		.wf-josefin-n4-loading .josefin {
			/* Hide while loading, Webkit style(ish) */
			visibility: hidden;
		}
		.wf-josefin-n4-active .josefin {
			/* Use the font when loaded */
			font: normal 4em/1 josefin, sans-serif;
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