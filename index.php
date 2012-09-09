<html>
<head>
	<title>geofox</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<body>

<div id="container">
	<img src="geofox.png" width="801px" />
	
	<div id="store">
		<a href="#"><img src="android_badge.png" height="50px" /></a>
		<a href="#"><img src="app_store_badge.png" height="50px" /></a>
	</div>
	
	<p>The geofox service and suite of mobile applications provide unique restaurant, entertainment, and other place recommendations
	by comparing your past check-in history and interests with that of other users of the service. </p>
	
	<table>
		<tr>
			<td><iframe width="350" height="263" src="http://www.youtube.com/embed/zy6llfxBB1Q?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></td>
			<td><iframe width="350" height="263" src="http://www.youtube.com/embed/KsJeV5skP6E?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></td>
		</tr>
		<tr>
			<td>Android Demo (beta)</td>
			<td>iOS Demo (final)</td>
		</tr>
	</table>
	
	<p>Portions of the geofox source code have been released on github.</p>
	<ul>
		<li><a href="https://github.com/mattcolf/geofox-android">Geofox Android Application</a>
		<li><a href="https://github.com/mattcolf/geofox-service">Geofox Web Service</a>
	</ul>
	
	<p>This application was developed by students at the University of Michigan as part of a major design project. The final presentation
	can be viewed on the <a href="http://inst-tech.engin.umich.edu/leccap/view/eecs497f10-f10-9eg7/11051">lecture capture system</a>
	and the slides can be downloaded <a href="presentation.pdf">here</a>.</p>
</div>

<p id="powered">&#169; 2009-<?=date("Y")?> geofox development group</p>
<a href="http://yelp.com"><img src="yelp.png" alt="Powered by Yelp"/></a>

<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-9117449-20']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<script type="text/javascript">
	var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.mattcolf.com/" : "http://stats.mattcolf.com/");
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 7);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
	} catch( err ) {}
</script>
<noscript>
	<p><img src="http://stats.mattcolf.com/piwik.php?idsite=7" style="border:0" alt="" /></p>
</noscript>

</body>
</html>