<?php if(!file_exists("import.php")) { die("<meta http-equiv='refresh' content='10' ><p style='font-family:Tahoma, Geneva, sans-serif;'><span style='color:red;'>Fatal Error</span><br />import.php was not found.<br />Almost-There Cannot be Loaded<br /></p>"); } else { include 'import.php'; };
// Squares.php by LuckyMonkey

class square 
{
	public $squareName			=	"default";
	public $squareID			=	"default";
	public $squareIcon			=	"icon-console";
	public $squareSize			=	"sq";
	public $squareBackground	=	"none";
	public $squareContent		=	"<span class='blink'>Error! No Data Recieved</span>";
	// Check Visability
	function displaySquare() {
		echo "
		\n<!-- We are now executing the " . $this->squareID . "-->\n
		<div id='" . $this->squareID . "Square' class='" . $this->squareSize . " theBGcolor'>
			<div class='sqTitle'><a class='icn " . $this->squareIcon . "'>&nbsp;</a>" . $this->squareName . "<a class='sqSettings icn icon-settings'></a></div>
			<div class='sqBody'>\n<div>\n" . $this->squareContent . "\n</div>\n</div>
			<div class='sqBack'><ul><li>Pin Square</li><li>Hide Square</li><li>Share Square</li></ul></div>
		</div>
		";
		echo "<!-- We are no longer executing " . $this->squareID . " square -->";
	}
}

class square_youtube extends square
{	
	public $squareName    = 'Your Music';
	public $squareID  	  = 'yourmusic';
	public $squareIcon    = 'icon-youtube';
	public $squareSize    = 'sqDub';
	public $squareContent;
	
	public function __construct()
	{
		$this->squareContent = $this->pane1();
	}

	public function pane1()
	{
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
		"fzHd2KwPsq8",	// Bloc Party - Ratchet (Rustie Remix)
		"xat1GVnl8-k",	// Bloodhound Gang - The Bad Touch
		"yhIPGuGUPl4",	// The Bloody Beetroots - Out of Sight
		"k8gpHUIZaVQ",	// Boreta - Honey Heart
		"reHGIYHAR2Q",	// Borgore - Nympho
		"Mzybwwf2HoQ",	// Britney Spears - Im A Slave 4 U
		"EH9meoWmAOM",	// Coldplay - Talk
		"ShU3_-Y6SH0",	// Celldweller - Goodbye 2012 Revision
		"I744rclQLfQ",	// Celldweller - Unshakeable
		"e2QKlmMT8II",	// 2Chains - Im Different
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
		"9055NLRl-6Y",	// Enter Shikari - Juggernauts
		"hAuo8IOFNuE",	// Eminem - 3AM
		"YVkUvmDQ3HY",	// Eminem - Without Me
		"DG7P6NX8yyE",	// Faderhead - Dirtygrrrls/Dirtybois
		"Q1KAjQRdTUE",	// Fatboy Slim - Right Here Right Now (Trumpdisco Remix)
		"-5nUg3EvUS8",	// Figure - Must Distroy
		"iWIADZKU9dw",	// Flyleaf - Im So Sick
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
		"pwgMMtgSTVE",	// iwrestledabearonce - You know that aint them dogs real voices
		"f4hbJ5zh-SQ",	// Jarren Benton - Skitzo
		"WANNqr-vcx0",	// Jefferson Airplane - White Rabbit
		"o22eIJDtKho",	// Johnny Cash - Hurt
		"R7UrFYvl5TE",	// Kelly Clarkson - Since U Been Gone
		"e7kJRGPgvRQ",	// KORPIKLAANI - Vodka
		"VTT6picaCoQ",	// Lacuna Coil - Trip The Darkness
		"USXHxgWoS9g",	// Lacuna Coil - End of Time
		"8VqJGRHuKUE",	// The Left Rights - WHITE
		"0GLoHifu6aM",	// The Left Rights - Im on Crack
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
		// Pendulum Slam

		// Add everything in your watch later playlsit
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
		"6PfCTsUhLEg",	// Plastilina Mosh - Let U know
		"bojBxTg6Z-g",	// Plastilina Mosh - Millionaire
		"LWNteSeRHec",	// Pretty Lights - Hot like Dimes
		"8wCgxkQj_Qo",	// Pretty Lights - I Know The Truth
		"tVL1u1eLX3I",	// The Prodigy - Babys got a Temper
		"BgVfjXA_QY0",	// Queens of the Stone Age - 3s & 7s
		"69e8oa85F3g",	// Queens of the Stone Age - In my Head
		"0NvnWJU5Ak8",	// Rammstien - Ich tu dir weh
		"LOwHX8PmnMU",	// Rammstien - Ich Will
		"YXdOAUKCc0k",	// Red Hot Chili Peppers - By The Way
		"5BOtuqKo4ik",	// Red Hot Chili Peppers - 
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
		); shuffle($yts);
	$rYt = mt_rand(0,count($yts)-1);
	$yt= $yts[$rYt];
	return "<iframe src='//www.youtube.com/embed/" . $yt . "?autoplay=0&amp;theme=dark&amp;color=white;wmode=transparent' allowfullscreen></iframe>";
	}
}

class square_login extends square {
	public $squareName	= "Login Square";
	public $squareID	= "loginsquare";
	public $squareSize	= "sq";
	public $squareIcon	= "icon-lock";
	public $squareContent;
	public function __construct()
	{
		$this->squareContent = $this->pane1();
	}

	public function pane1()
	{
		return "You have not Logged in yet<br />
		<a href='#login'>Please Click here to Login</a>";
	}
};

function hello() {
	echo "<!DOCTYPE html><html><head>";
	head(); 
	echo "<title class='dynTitle'>Almost There - Squares</title></head><body>";
	preBody();
		echo "<div class='nudge'>";
		$extended = new square_youtube();	$extended->displaySquare();
//		$extended = new square_login();	$extended->displaySquare();
		echo "</div>";
	postBody();
	echo "</body></html>";
};

hello();

?>