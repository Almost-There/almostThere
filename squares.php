<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Squares</title>
</head>
<body>
<? preBody(); ?>

<div id='sqField'> <!-- Box that contains all the squares -->
	
	<!-- Recent Logins Square -->
	<div class='sq'>
		<div class='sqContent'>
		<span class='sqTitle'>Recent Logins<a href='' class='sqAltButton'>#</a></span>
		<ul>
			<li>| LuckyMonkey<span class='fr'>3m</span></li>
			<li>| Kenny<span class='fr'>10m</span></li>
			<li>| LuckyMonkey<span class='fr'>2h</span></li>
			<li>| Bluecoatz<span class='fr'>13h</span></li>
			<li>| Bluecoatz<span class='fr'>1d</span></li>
		</ul>
		</div>
		<div id='sqAltContent'>
			<span class='sqTitle'>Settings<a href='' class='sqAltButton'>#</a></span>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<!-- <li><a>Put Tile in Bag</a></li> -->
			</ul>
		</div>
	</div>
	<!-- End of Recent Logins Square -->

	<!-- Youtube Square -->
	<div class='sqDub sqYoutube'>
		<div class='sqContent'>
			<span class='sqTitle'>Youtube<a href='' class='sqAltButton'>#</a></span>
			<div class='youTube' >
				<iframe src="//www.youtube.com/embed/<? 
				$yts = array(
				"OKxaPkIx4WY", 		/* Oxygen - Moguai feat. Fiora */
				"d1wGFgoocKk",		/* Schoolboy - Project No-Autotune */
				"n9nntf5_JXc", 		/* MSD - I Feel You (Bluescreens Remix) */
				"lG5aSZBAuPs",		/* XXYYXX - About You */
				"lM7XgAmcXp8",		/* InnerPartySystem - American Trash */
				"2qN5ewi44N8",		/* Motionless in White - AMERICA */
				"uxelXPg961M", 		/* Mastodon - Divinations */
				"7kCyPj6ZFTA",		/* AWOLNATION - Sail (Borgore Remix) */
				"reHGIYHAR2Q",		/* Borgore - Nympho */
				"fxvGHQHiY70",		/* Animal Collective - Peacebone */
				"FaJytyOISmE", 		/* Pasafire - Rubber Bands */
				"xsV8TrF4gN0",		/* Not In Love - Crystal Castles */
				"C-9v68o5Gfs",		/* Voicans - Loyal Friend */
				"k8gpHUIZaVQ",		/* Boreta - Honey Heart */
				"HEkLU2AiJCs",		/* Shiny Toy Guns - Stripped */
				"8wCgxkQj_Qo", 		/* Pretty Lights - I Know The Truth */
				"f9EM8T5K6d8",		/* Modstep - Another Day (Xcore Remix) */
				"PQ1PU1XOQIk",		/* Styles of Beyond - Bleach */
				"ShU3_-Y6SH0",		/* Celldweller - Goodbye 2012 Revision */
				"8mYd2X_9rrs",		/* Pendulum - Hold your Colour */
				"VuwwvokPaQ", 		/* The Airplane Boys - Beau Monde */
				"3LqsWSvnjGs", 		/* Deadmau5 - asdfghjkl */
				"Z0NefmRM81Y", 		/* Sunchase feat. Yana Kay - Remember Me */
				"Q1KAjQRdTUE");		/* Fatboy Slim - Right Here Right Now (Trumpdisco Remix) */
				$rYt = rand(0,count($yts)-1);
				$yt= $yts[$rYt];
				echo $yt; ?>?autoplay=0&amp;theme=dark&amp;color=white" allowfullscreen></iframe>
			</div>
		</div>
		<div id='sqAltContent'>
			<span class='sqTitle'>Settings<a href='' class='sqAltButton'>#</a></span>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>AutoPlay Videos</a></li>
				<li><a>Copy Video URL to Clipboard</a></li>
				<!-- <li><a>Put Tile in Bag</a></li> -->
			</ul>
		</div>
	</div>
	<!-- End of Youtube Square -->

	<!-- Minecraft Server Status Square -->
	<div class='sqDub minecraftBG'>
		<div class='sqContent'>
			<span class='sqTile'>Minecraft Server<a href='' class='sqAltButton'>#</a></span>
			<ul>
				<li>Almost-There Minecraft Addiction</li>
				<li>mc.almost-there.org</li>
				<li>0/32 Players</li>
				<li>Age: 193 days</li>
				<li>Visit Page</li>
			</ul>
		</div>
		<div id='sqAltContent'>
			<span class='sqTitle'>Settings<a href='' class='sqAltButton'>#</a></span>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Server URL to Clipboard</a></li>
				<!-- <li><a>Put Tile in Bag</a></li> -->
			</ul>
		</div>
	</div>
	<!-- End of Minecraft Server Status Square -->

	<!-- HitCounter Square -->
	<div class='sq'>
		<div class='sqContent'>
			<span class='sqTitle'>Visits<a href='' class='sqAltButton'>#</a></span>
			<ul>
				<li>0 Visits Today</li>
				<li>0 Visits this Week</li>
				<li>0 Visits Ever</li>
			</ul>
		</div>
		<div>
			<span class='sqTitle'>Settings<a href='' class='sqAltButton'>#</span>a>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End HitCounter Square -->

</div>

<? postBody(); ?>
</body>
</html>