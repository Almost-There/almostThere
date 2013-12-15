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
<div style='flex:auto'>
<div id='sqField'> <!-- Box that contains all the squares -->
	
	<!-- Recent Logins Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>Recent Logins<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>| LuckyMonkey<span class='fr'>3m</span></li>
				<li>| Kenny<span class='fr'>10m</span></li>
				<li>| LuckyMonkey<span class='fr'>2h</span></li>
				<li>| Bluecoatz<span class='fr'>13h</span></li>
				<li>| Bluecoatz<span class='fr'>1d</span></li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Put Tile in Bag</a></li>
			</ul>
		</div>
	</div>
	<!-- End of Recent Logins Square -->

	<!-- Youtube Square -->
	<div class='sqDub theBGcolor'>
		<div class='sqTitle'>Youtube<a href='' class='sqAltButton'>#</a></div>
		<div class='sqYt'>
			<iframe src="//www.youtube.com/embed/<?
				$yts = array(
				"OKxaPkIx4WY", 		/* Oxygen - Moguai feat. Fiora */
				"d1wGFgoocKk",		/* Schoolboy - Project No-Autotune */
				"n9nntf5_JXc", 		/* MSD - I Feel You (Bluescreens Remix) */
				"lG5aSZBAuPs",		/* XXYYXX - About You */
				"lM7XgAmcXp8",		/* InnerPartySystem - American Trash */
				"2qN5ewi44N8",		/* Motionless in White - AMERICA */
				"uxelXPg961M", 		/* Mastodon - Divinations */
				"9QZ2ZvueDbA",		/* Neonlight - Computer Music */
				"uQu71l1WQ3g",		/* Becky - Less than Three */
				"7kCyPj6ZFTA",		/* AWOLNATION - Sail (Borgore Remix) */
				"reHGIYHAR2Q",		/* Borgore - Nympho */
				"fxvGHQHiY70",		/* Animal Collective - Peacebone */
				"xAEhBQZ-k7U",		/* InnerPartySystem - And Together */
				"_NBrrCn5_zo",		/* Pendulum - Comprachicos */
				"EjAoBKagWQA",		/* Bjork - All is full of love */
				"u7K72X4eo_s",		/* Massive Attack - Teardrop */
				"YXdOAUKCc0k",		/* Red Hot Chili Peppers - By The Way */
				"QRg-aDBaVdc",		/* Gorillaz - Dare */
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
			echo $yt; ?>?autoplay=0&amp;theme=dark&amp;color=white;wmode=transparent" allowfullscreen>
			</iframe>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>AutoPlay Videos</a></li>
				<li><a>Copy Video URL to Clipboard</a></li>
				<li><a>Put Tile in Bag</a></li> -->
			</ul>
		</div>
	</div>
	<!-- End of Youtube Square -->

	<!-- Minecraft Server Status Square -->
	<div class='sqDub minecraftBG theBGcolor'>
		<div class='sqTitle'>Minecraft Server<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>Almost-There Minecraft Addiction</li>
				<li>mc.almost-there.org</li>
				<li>0/32 Players</li>
				<li>Age: 193 days</li>
				<li>Visit Page</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Server URL to Clipboard</a></li>
				<li><a>Put Tile in Bag</a></li>
			</ul>
		</div>
	</div>
	<!-- End of Minecraft Server Status Square -->

	<!-- HitCounter Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>Visits<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>0 Visits by You</li>
				<li>0 Visits Today</li>
				<li>0 Visits this Week</li>
				<li>0 Visits Ever</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End HitCounter Square -->

	<!-- Unreads Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>Unreads<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>0 Unread Chan Threads</li>
				<li>0 Unread Messages</li>
				<li>0 Unopened Packages</li>
				<li>0 Unread Warnings</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End Unreads Square -->

	<!-- Facebook Square
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'>Facebook<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>Cannot Connect to Facbook</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Like Button</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	End Facebook Square -->

	<!-- Forum Threads Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>New Chan Posts<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Forum Threads Square -->

	<!-- Steam Group Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'>Steam Announcements<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Steam Group Square -->

	<!-- Movie Nights Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'>Upcoming Movie Nights<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Connect - Error</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Movie Nights Square -->

	<!-- Points Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>Points<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<ul>
				<li>0 Points</li>
				<li>0 Points Earned</li>
				<li>0 Redeemable Points</li>
			</ul>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End Points Square -->
</div>

	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<h1 class='theColor'>This is all fake data!<sup>(for now)</sup></h1>

</div>
<? postBody(); ?>
</body>
</html>