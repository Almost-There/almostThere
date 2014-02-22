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
//Square Title, Square Size, Square Data. 

//Square Title = String = "name of Square"
//Square Icon = String = "name of icon to be applied before square title"
//Square Title = Interger = 0="Do not Display", 1="Small Square", 2="Double Square", 3="Resizable Square"
//Square Style = Does a value exist? = If data is given, theBGcolor is not used. A "style='background: <variable>' " 
	is applied to the square and it awaits either an alternate color or background image.

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

function square_default() {
	$squareTitle=''
	$squareSize=''
	$squareBackground=''
	$squareIcon=''
	echo "<!-- Default Square -->";
	echo "<div class='sqDub theBGcolor'>
			<div class='sqTitle'>
				<a class='icn icon-users2'>&nbsp;</a>"
// Square Name  . .
			   "<a class='sqSettings icn icon-settings'></a>
			</div>";

}	*/

?>

<? 
function square_recentlogins() {
echo "

    <!-- Recent Logins Square -->
	<div class='sq theBGcolor'>
		<div class='sqTitle'><a class='icn icon-users2'>&nbsp;</a>Recent Logins<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Put Tile in Bag</a></li>
			</ul>
		</div>
	</div>
	<!-- End of Recent Logins Square -->
"; };

function square_youtube() {
echo "
	<!-- Youtube Square -->
	<div class='sqDub theBGcolor'>
		<div class='youtubeTitle sqTitle'><a class='icn icon-youtube'>&nbsp;</a>YouTube Music<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqYt'>";
		echo "<iframe src='//www.youtube.com/embed/";
		$yts = array(
			"xVYp7khUDbw",	// Air - Mer du Japon The Teenagers Remix
			"CDOIG8HKUZA",	// The Airplane Boys - Beau Monde
			"-LHrHo-WNww",	// Alex Gaudino - Destination Unknown Feat. Crystal Waters
			"fxvGHQHiY70",	// Animal Collective - Peacebone
			"nm_rtM2HgI4",	// ASAP Rocky - Brand New Guy feat. ScHoolboy Q
			"qLrnkK2YEcE",	// The Avalanches - Frontier Psychiatrist
			"OG-RNq7oRUM",	// Attack Attack! - Smokahontas
			"DAQRNnNXb6w",	// AWOLNATION - Sail (Borgore Remix)
			"uQu71l1WQ3g",	// Becky - Less than Three
			"SREZ-ggSDjM",	// The Birthday Massacre - Looking Glass
			"EjAoBKagWQA",	// Bjork - All is full of love
			"NhheiPTdZCw",	// Blockhead - The Music Scene
			"xat1GVnl8-k",	// Bloodhound Gang - The Bad Touch
			"yhIPGuGUPl4",	// The Bloody Beetroots - Out of Sight
			"k8gpHUIZaVQ",	// Boreta - Honey Heart
			"reHGIYHAR2Q",	// Borgore - Nympho
			"Mzybwwf2HoQ",	// Britney Spears - I'm A Slave 4 U
			"EH9meoWmAOM",	// Coldplay - Talk
			"ShU3_-Y6SH0",	// Celldweller - Goodbye 2012 Revision
			"I744rclQLfQ",	// Celldweller - Unshakeable
			"e2QKlmMT8II",	// 2Chains - I'm Different
			"-xAw_ZR5YkI",	// Netsky - Pirate Bay
			"Xu3FTEmN-eg",	// The Chemical Brothers - Galvanize
			"xsV8TrF4gN0",	// Crystal Castles - Not in Love
			"A12-KN5UijA",	// The Crystal Method - Name of the Game
			"H6BEkPzstJQ",	// The Crystal Method - Born to Slow
			"lwU0SlMu07E",	// CygnosiC - As We Approach The End
			"xcyuKUtgyZ8",	// David Bowie - Space Oddity
			"3LqsWSvnjGs",	// Deadmau5 - asdfghjkl
			"MSBSlyMZCfA",	// Deadmau5 - Infra Super Turbo Pig Cart Racer	
			"etdlQtRP9zw",	// Deadmau5 - My Pet Coelacanth
			"m0AKJMGxwpE",	// Depeche Mode - Enjoy the Silence
			"_f0zHgs0GpI",	// Depeche Mode - Useless
			"Q77YBmtd2Rw",	// Die Antwoord - Zef Side
			"3m3yWUqC8ZM",	// Disturbed - Decadence
			"Z-zL_paDVTc",	// Dope D.O.D. - What happened
			"5AA1rfKkWkI",	// Ellie Goulding - Explosions (Gemini Remix)
			"hAuo8IOFNuE",	// Eminem - 3AM
			"YVkUvmDQ3HY",	// Eminem - Without Me
			"DG7P6NX8yyE",	// Faderhead - Dirtygrrrls/Dirtybois
			"Q1KAjQRdTUE",	// Fatboy Slim - Right Here Right Now (Trumpdisco Remix)
			"-5nUg3EvUS8",	// Figure - Must Distroy
			"iWIADZKU9dw",	// Flyleaf - I'm So Sick
			"kbpqZT_56Ns",	// Foo Fighters - Rope
			"Pb55ep-DrSo",	// Foreign Beggars - Contact
			"FMBDrB_Scqs",	// Franz Ferdinand - Do You Want To (Metronomy remix)
			"0x6PhH6v0Ls",	// Gemini - Graduation
			"YeawPUpTHJA",	// Goldfrapp - Strict Machine
			"nFF8bubMc40",	// Goldfrapp - White Horse
			"nhPaWIeULKk",	// Gorillaz - Stylo
			"QRg-aDBaVdc",	// Gorillaz - Dare
			"f5qICl3Fr3w",	// Gwen Stefani - What You Waiting For?
			"ON-7v4qnHP8",	// Harry Enfield - loadsamoney
			"Z-zL_paDVTc",	// Hopsin - Sag My Pants
			"Z6hL6fkJ1_k",	// Infected Mushroom - Becoming Insane
			"6-uqXH-oPLs",	// Infected Mushroom - Killing Time (Remix)
			"lM7XgAmcXp8",	// InnerPartySystem - American Trash
			"xAEhBQZ-k7U",	// InnerPartySystem - And Together
			"C9dEKatWIBw",	// iwillneverbethesame - Tornadoes
			"pwgMMtgSTVE",	// iwrestledabearonce - You know that ain't them dogs real voices
			"f4hbJ5zh-SQ",	// Jarren Benton - Skitzo
			"WANNqr-vcx0",	// Jefferson Airplane - White Rabbit
			"o22eIJDtKho",	// Johnny Cash - Hurt
			"e7kJRGPgvRQ",	// KORPIKLAANI - Vodka
			"VTT6picaCoQ",	// Lacuna Coil - Trip The Darkness
			"USXHxgWoS9g",	// Lacuna Coil - End of Time
			"8VqJGRHuKUE",	// The Left Rights - WHITE
			"0GLoHifu6aM",	// The Left Rights - I'm on Crack
			"mrukUsEjoVI",	// The Luna Sequence - Surfacing
			"AIIovpUQiro",	// Massive Attack - Live with Me
			"u7K72X4eo_s",	// Massive Attack - Teardrop
			"uxelXPg961M",	// Mastodon - Divinations
			"5SWfOLg-LeY",	// Mayhem - 6 Little Eggs (Furries in a blender remix)
			"B0AX81gv5aM",	// Mindless Self Indulgance - Shut Me Up
			"X4CrrP5G3v0",	// Mindless Self Indulgance - Stupid MF
			"JxDdN-puo3g",	// Mobb Deep - Survival of the Fittest
			"f9EM8T5K6d8",	// Modstep - Another Day (Xcore Remix)
			"OKxaPkIx4WY",	// Moguai - Oxygen feat. Fiora
			"2qN5ewi44N8",	// Motionless in White - AMERICA
			"n9nntf5_JXc",	// MSD - I Feel You (Bluescreens Remix)
			"9nVvojfQVBY",	// Mudvayne - Death Blooms
			"B3JHH14xEoQ",	// Muzzy - Endgame
			"lv8IsdbYR9g",	// Neoon Indian - Sleep Paralysist
			"9QZ2ZvueDbA",	// Neonlight - Computer Music
			"WPJpXu1O7mM",	// Noisia - Exodia Feat Mayhem, KRS One
			"0NS53Ydzq6o",	// Noisia - Stigma (NeoSignal Remix)
			"j34juXrJWqw",	// Ozzy Osborne - Miricle Man
			"FaJytyOISmE",	// Pasafire - Rubber Bands
			"MSv3Oez4O-4",	// Paul Oakenfold - Ready, Steady, Go
			"kHadNTiftrg",	// Paul Van Dyk - Let Go
			"aDaOgu2CQtI",	// Pearl Jam - Do the Evolution
			"_NBrrCn5_zo",	// Pendulum - Comprachicos
			"8mYd2X_9rrs",	// Pendulum - Hold your Colour
			"YkADj0TPrJA",	// Phil Collins - In The Air Tonight
			"LWNteSeRHec",	// Pretty Lights - Hot like Dimes
			"8wCgxkQj_Qo",	// Pretty Lights - I Know The Truth
			"tVL1u1eLX3I",	// The Prodigy - Baby's got a Temper
			"BgVfjXA_QY0",	// Queens of the Stone Age - 3s & 7s
			"69e8oa85F3g",	// Queens of the Stone Age - In my Head
			"0NvnWJU5Ak8",	// Rammstien - Ich tu dir weh
			"LOwHX8PmnMU",	// Rammstien - Ich Will
			"YXdOAUKCc0k",	// Red Hot Chili Peppers - By The Way
			"PlJBUaozeM8",	// 30 Seconds to Mars - Edge of the Earth
			"d1wGFgoocKk",	// Schoolboy - Project No-Autotune
			"8aSHmH9XCNU",	// Skazi - My Way
			"yp3-jmRXIww",	// Shallow Gravy - Jacket
			"HEkLU2AiJCs",	// Shiny Toy Guns - Stripped
			"v_09wFxoaeQ",	// Slipknot - Before I forget
			"9rQz0xGaTCE",	// Slipknot - Left Behind
			"Ro8shNTlzTY",	// Smashing Pumpkins -  Tarantula
			"t5-QSLt56JY",	// SOFI - Bring out the Devil
			"312Sb-2PovA",	// Suicide Silence - You Only Live Once
			"Z0NefmRM81Y",	// Sunchase - Remember Me feat. Yana Kay
			"PQ1PU1XOQIk",	// Styles of Beyond - Bleach
			"sYOlzMOFU2w",	// Sybreed - The Line of Least Resistance
			"8mGBaXPlri8",	// t.A.T.u. - All The Things She Said
			"98W9QuMq-2k",	// U2 - Vertigo
			"BSsMGNwYDdg",	// Unkle - Burn My Shadow
			"VLVtIbfQtEw",	// Unkle - Inside
			"1VH2mrAzNjI",	// Varien - Morphine
			"C-9v68o5Gfs",	// Voicans - Loyal Friend
			"UePtoxDhJSw",	// Wiz Khalifa - Black And Yellow
			"lG5aSZBAuPs"	// XXYYXX - About You
			);
			shuffle($yts);
			// There is this part of me that still doesn't believe random is random so just to double check we shuffle too.
			$rYt = rand(0,count($yts)-1);
			$yt= $yts[$rYt];
			echo $yt . "?autoplay=0&amp;theme=dark&amp;color=white;wmode=transparent' allowfullscreen>";
			echo "</iframe>
		</div>
		<div class='sqBack'>
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
"; };

function square_minecraftserver() {
echo "
	<!-- Minecraft Server Status Square -->
	<div class='sqDub minecraftBG theBGcolor'>
		<div class='sqTitle'><a class='icn icon-console'>&nbsp;</a>Minecraft Server<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Server URL to Clipboard</a></li>
				<li><a>Put Tile in Bag</a></li>
			</ul>
		</div>
	</div>
	<!-- End of Minecraft Server Status Square -->
"; };

function square_hitcounter() {
echo "
	<!-- HitCounter Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-history'>&nbsp;</a>Visits<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End HitCounter Square -->
"; };

function square_unreadinfo() {
echo "
	<!-- Unreads Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-newspaper'>&nbsp;</a>Unreads<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End Unreads Square -->
"; };

function square_forumthreads() {
echo "
	<!-- Forum Threads Square -->
	<div class='sq  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-bubbles2'>&nbsp;</a>Forum Posts<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Forum Threads Square -->
"; };

function square_colorpicker() {
echo "
	<!-- Color Picker Square -->
	<div class='sqDub theBGcolor'>
		<div class='sqTitle'><a class='icn icon-paint-format'>&nbsp;</a>Color Picker<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>";
	 colorForm();
		echo" </div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Color Picker Square -->
	";
};

function square_steam() {
echo "
	<!-- Steam Group Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-steam2'>&nbsp;</a>Steam Announcements<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='blink'>Error! No Data Recieved!</span>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Steam Group Square -->
";
};

function square_facebook() {
echo "
	<!-- Facebook Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-facebook2'>&nbsp;</a>Facebook<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<div class='fb-like-box' data-href='https://www.facebook.com/AlmostThereGaming' data-width='370' data-height='137' data-colorscheme='light' data-show-faces='true' data-header='true' data-stream='false' data-show-border='true'></div>
		</div>
		<div class='sqBack'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Like Button</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- End Facebook Square -->
";
};

//square_facebook();
//square_steam();
square_colorpicker();
//square_forumthreads();
//square_unreadinfo();
square_youtube();
//square_minecraftserver();
//square_recentlogins();
//square_hitcounter();

?>

</div>
<? postBody(); ?>
</body>
</html>