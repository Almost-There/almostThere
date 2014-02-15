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
		<div class='sqTitle'><a class='icn icon-users2'>&nbsp;</a>Recent Logins<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
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
		<div class='youtubeTitle sqTitle'><a class='icn icon-youtube'>&nbsp;</a>YouTube Music<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqYt'>
		<? echo "<iframe src='//www.youtube.com/embed/";
		$yts = array(
			"OKxaPkIx4WY",	// Oxygen - Moguai feat. Fiora
			"d1wGFgoocKk",	// Schoolboy - Project No-Autotune
			"n9nntf5_JXc",	// MSD - I Feel You (Bluescreens Remix)
			"lG5aSZBAuPs",	// XXYYXX - About You
			"lM7XgAmcXp8",	// InnerPartySystem - American Trash
			"2qN5ewi44N8",	// Motionless in White - AMERICA
			"uxelXPg961M",	// Mastodon - Divinations
			"9QZ2ZvueDbA",	// Neonlight - Computer Music
			"uQu71l1WQ3g",	// Becky - Less than Three
			"DAQRNnNXb6w",	// AWOLNATION - Sail (Borgore Remix)
			"9nVvojfQVBY",	// Mudvayne - Death Blooms
			"reHGIYHAR2Q",	// Borgore - Nympho
			"0x6PhH6v0Ls",	// Gemini - Graduation
			"t5-QSLt56JY",	// SOFI - Bring out the Devil
			"0NS53Ydzq6o",	// Noisia - Stigma (NeoSignal Remix)
			"Z6hL6fkJ1_k",	// Infected Mushroom - Becoming Insane
			"tVL1u1eLX3I",	// The Prodigy - Baby's got a Temper
			"EH9meoWmAOM",	// Coldplay - Talk
			"etdlQtRP9zw",	// Deadmau5 - My Pet Coelacanth
			"kbpqZT_56Ns",	// Foo Fighters - Rope
			"fxvGHQHiY70",	// Animal Collective - Peacebone
			"xAEhBQZ-k7U",	// InnerPartySystem - And Together
			"_NBrrCn5_zo",	// Pendulum - Comprachicos
			"5AA1rfKkWkI",	// Ellie Goulding - Explosions (Gemini Remix)
			"EjAoBKagWQA",	// Bjork - All is full of love
			"u7K72X4eo_s",	// Massive Attack - Teardrop
			"YXdOAUKCc0k",	// Red Hot Chili Peppers - By The Way
			"QRg-aDBaVdc",	// Gorillaz - Dare
			"FaJytyOISmE",	// Pasafire - Rubber Bands
			"xsV8TrF4gN0",	// Not In Love - Crystal Castles
			"C-9v68o5Gfs",	// Voicans - Loyal Friend
			"k8gpHUIZaVQ",	// Boreta - Honey Heart
			"HEkLU2AiJCs",	// Shiny Toy Guns - Stripped
			"8wCgxkQj_Qo",	// Pretty Lights - I Know The Truth
			"f9EM8T5K6d8",	// Modstep - Another Day (Xcore Remix)
			"PQ1PU1XOQIk",	// Styles of Beyond - Bleach
			"ShU3_-Y6SH0",	// Celldweller - Goodbye 2012 Revision
			"8mYd2X_9rrs",	// Pendulum - Hold your Colour
			"VuwwvokPaQ",	// The Airplane Boys - Beau Monde
			"3LqsWSvnjGs",	// Deadmau5 - asdfghjkl
			"Z0NefmRM81Y",	// Sunchase feat. Yana Kay - Remember Me
			"Q1KAjQRdTUE"	// Fatboy Slim - Right Here Right Now (Trumpdisco Remix)
			);
			shuffle($yts);
			$rYt = rand(0,count($yts)-1);
			$yt= $yts[$rYt];
			echo $yt . "?autoplay=0&amp;theme=dark&amp;color=white;wmode=transparent' allowfullscreen>" ?>
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
		<div class='sqTitle'><a class='icn icon-console'>&nbsp;</a>Minecraft Server<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
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
		<div class='sqTitle'><a class='icn icon-history'>&nbsp;</a>Visits<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
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
		<div class='sqTitle'><a class='icn icon-newspaper'>&nbsp;</a>Unreads<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
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

	<!-- Forum Threads Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-bubbles2'>&nbsp;</a>Forum Posts<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
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
		<div class='sqTitle'><a class='icn icon-paint-format'>&nbsp;</a>Color Picker<a class='sqSettings icn icon-settings'></a></div>
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
		<div class='sqTitle'><a class='icn icon-steam2'>&nbsp;</a>Steam Announcements<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
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

	<!-- Facebook Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-facebook2'>&nbsp;</a>Facebook<a class='sqSettings icn icon-settings'></a></div>
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

</div>
<? postBody(); ?>
</body>
</html>