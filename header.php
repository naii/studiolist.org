<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="language" content="en">
	<meta http-equiv="content-language" content="en">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recording studio search engine for traveling YouTubers, podcasters, voiceover artists and audiobook narrators">
	<link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="<?php echo $other_stylesheet; ?>">
	<!-- Matomo -->
	<script type="text/javascript">
	  var _paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//studiolist.org/m/";
	    _paq.push(['setTrackerUrl', u+'matomo.php']);
	    _paq.push(['setSiteId', '1']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->
</head>
<body>
		<div id="main">
			<div id="menu">
				<!-- <h1 class="name-logo alignleft"> -->
				<h1 class="name-logo">
					<a class="top-link" href="/">studiolist.org</a>
				</h1>
				<!-- <ul class="alignright"> -->
				<ul>
					<li><a href="/list/">All studios</a></li>
					<li><a href="/about/">About</a></li>
					<li><a href="/activity/">Activity</a></li>
					<li><a href="/contact/">Contact</a></li>
				</ul>
			</div>
			<div style="clear: both;"></div>