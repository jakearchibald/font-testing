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
			<li><a href="download-order/">3 fonts</a></li>
		</ul>
		<p>
			A page that loads 3 fonts. One at the top of the page, and 2 after
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
</body>
</html>