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
<div id='sqField' class='nudge'>
    
<? /*

	 ////////////////////////////////////////////////////
	// Work in progress here, yes this is intentional //
   ////////////////////////////////////////////////////



3 Variables to create each square
//Square Title, Square Size, Square Data

//Square Title = String = "name of Square"
//Square Title = Interger = 0="Do not Display", 1="Small Square", 2="Double Square", 3="Resizable Square"
//Square Data = Function = The function to be executed within the square.

function sq_color() {
	global $colorPick;
	foreach ($colorPick as $v) { echo "<a class='changeColor icon-droplet' style='color:$v'></a>\n"; };
};

function spawnSquare(ColorPicker, 1, $colorPick) {
	echo "\n<!--  -->\n";
	echo "<div id='colorPicker'>";
	//Set color clientside with jquery, while saving the cookie to be read on next load with PHP
	
	echo "\n</div>";
	echo "\n<!-- /colorForm() -->\n";
}; 

function spawnSquare($=)
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br />\n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br />\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
    }
}
	*/
?>

    <!-- Recent Logins Square -->
	<div class='sq theBGcolor'>
		<div class='sqTitle'>Recent Logins<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
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
		<div class='youtubeTitle sqTitle'>Youtube Player<a href='' class='sqAltButton'>#</a></div>
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
				"5AA1rfKkWkI",		/* Ellie Goulding - Explosions (Gemini Remix) */
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
				<li><a>Put Tile in Bag</a></li>
			</ul>
		</div>
	</div>
	<!-- End of Youtube Square -->

	<!-- Minecraft Server Status Square -->
	<div class='sqDub minecraftBG theBGcolor'>
		<div class='sqTitle'>Minecraft Server<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
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
		<div class='sqBody'>
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
		<div class='sqBody'>
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

	<!-- Popular Pages Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>Popular Pages<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
			<ul>
				<li>squares.php</li>
				<li>index.php</li>
				<li>fridge.php</li>
				<li>irc.php</li>
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
	<!-- End Popular Pages Square -->

	<!-- Facebook Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'>Facebook<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
			<div class="fb-like-box" data-href="https://www.facebook.com/AlmostThereGaming" data-width="370" data-height="137" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
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
	<!-- End Facebook Square -->

	<!-- Forum Threads Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>New Chan Posts<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
			<ul>
				<li>Cannot Parse RSS Feed!</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Parse RSS Feed!</li>
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

	<!-- Color Picker Square -->
	<div class='sqDub theBGcolor'>
		<div class='sqTitle'>Color Picker<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
			<? colorForm(); ?>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Color Picker Square -->

	<!-- Steam Group Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'>Steam Announcements<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
			<ul>
				<li>Cannot Parse RSS Feed!</li>
				<li>Cannot Connect - Error</li>
				<li>Cannot Parse RSS Feed!</li>
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
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>Upcoming Movie Nights<a href='' class='sqAltButton'>#</a></div>
		<div class='sqBody'>
			<ul>
				<li>Cannot Parse - <span class='fr'>RSS Feed!</span></li>
				<li>Cannot Connect - <span class='fr'>Error</span></li>
				<li>Cannot Parse - <span class='fr'>RSS Feed!</span></li>
				<li>Cannot Connect - <span class='fr'>Error</span></li>
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
</div>
<? postBody(); ?>
</body>
</html>