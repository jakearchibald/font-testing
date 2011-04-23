<!DOCTYPE html>
<html lang="en" class="ie-lte-8">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Font testing</title>
	<style>
	</style>
</head>
<body>
	<h1>Font tests</h1>
	<article>
		<h1>Download order</h1>
		<ul>
			<li><a href="download-order/">Fonts used</a></li>
			<li><a href="download-order/no-usage.php">No usage</a></li>
		</ul>
		<p>
			A page that defines 3 fonts.
		</p>
		<p>
			The first test uses all 3. One at the top of the page, and 2 after
			a clump of throttled lipsum.
		</p>
		<p>
			The latter 2 are selected in the same css font declaration, where
			the target element contains chars in the 2nd font that don't exist
			in the first.
		</p>
		<p>
			Font serving is throttled.
		</p>
		<p>
			The second test is the same but none of the fonts are needed. Can
			you guess which browser downloads them anyway?
		</p>
	</article>
	<article>
		<h1>no-cache bug</h1>
		<ul>
			<li><a href="no-cache-bug/no-cache.php">No delay</a></li>
			<li><a href="no-cache-bug/no-cache-delay.php">Delay on fonts</a></li>
		</ul>
		<p>
			A fun little IE&lt;9 bug where a no-cache font is often garbage collected
			before it gets a chance to render.
		</p>
		<p>
			The bug is more likely to happen when there's a delay in loading the fonts.
		</p>
		<p>
			Worth opening a new tab for each page of this test, else the results
			are even less predictable.
		</p>
	</article>
	<article>
		<h1>Fallbacks</h1>
		<ul>
			<li><a href="fallbacks/">Various tests</a></li>
		</ul>
		<p>
			Testing how fonts fallback from one font to another.
		</p>
	</article>
	<article>
		<h1>Hinting</h1>
		<ul>
			<li><a href="hinting/">Hinting vs no hinting</a></li>
		</ul>
	</article>
</body>
</html>