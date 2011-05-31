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
			<li><a href="download-order/no-format.php">No format</a></li>
			<li><a href="download-order/with-unicode-range.php">With unicode range</a></li>
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
		<h1>Rendering patterns</h1>
		<ul>
			<li><a href="http://www.stevesouders.com/blog/2010/06/01/frontend-spof/">Various tests</a></li>
			<li><a href="render-pattern/">External css file</a></li>
			<li><a href="render-pattern/inline.php">Inline css</a></li>
			<li><a href="render-pattern/async.php">Async external css</a></li>
			<li><a href="render-pattern/asyncsettimeout.php">Async external css via setTimeout</a></li>
			<li><a href="render-pattern/webfontloader.php">Google web font loader</a></li>
		</ul>
		<p>
			Steve Souders has some excellent tests for this although some of the
			results are now out of date (eg Firefox 4).
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
			<li><a href="fallbacks/unicode-range.php">Fallback forced with unicode-range</a></li>
			<li><a href="fallbacks/unicode-range2.php">Fallback forced with unicode-range, first font not used</a></li>
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
	<article>
		<h1>Standard embed</h1>
		<ul>
			<li><a href="standard-embed/">Spec-perfect</a></li>
			<li><a href="standard-embed/with-query.php">Spec-perfect, with ? in IE url</a></li>
			<li><a href="standard-embed/with-long-urls.php">Spec-perfect, with ? in IE url, but long urls for other fonts</a></li>
			<li><a href="standard-embed/with-hash.php">Spec-perfect, with # in IE url, but long urls for other fonts</a></li>
			<li><a href="standard-embed/with-extra.php">Spec-wonky, but also works in IE9 compat modes</a></li>
		</ul>
		<p>Some demos showing the hurdles to overcome with IE&lt;9</p>
	</article>
	<article>
		<h1>@font-face and font-weight/style</h1>
		<ul>
			<li><a href="weight-style/">Keywords test</a></li>
			<li><a href="weight-style/regular-only.php">Keywords test - only regular used</a></li>
			<li><a href="weight-style/faking.php">Test for faking bold & italic</a></li>
		</ul>
	</article>
	<article>
		<h1>Advanced features</h1>
		<ul>
			<li><a href="advanced/kerning.php">Kerning</a></li>
			<li><a href="advanced/ligatures.php">Ligatures</a></li>
		</ul>
	</article>
	<article>
		<h1>local() issues</h1>
		<ul>
			<li><a href="local/">Local font vs webfont</a></li>
		</ul>
	</article>
</body>
</html>