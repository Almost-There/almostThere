<?php 
// Import.php by LuckyMonkey
// A template loading multifunction PHP document

// Hard-Set Variables for Settings menu implimentation
$privacy = false;
$sfw = false;

// Description (Doubles as a variable!)
$description = "Soon to be your favourite website, a collective effort by a group of gamers to enjoy games, share ideas, and create awesome things.";
$name = "Almost-There";
$url = "http://almost-there.org";

// Here (Yes right here, the sitemap is defined for use)
$navLinks = array(
	"/squares.php" 	=> "Squares",
	"/forums" 		=> "Forums",
	"/fridge.php" 	=> "Fridge",
	"/irc.php" 		=> "Chat",
	"/labs.php" 	=> "Labs"
);

// Query Strings are made available for Javascript import functions
$pageQuery = $_SERVER['QUERY_STRING'];
	switch ($pageQuery) {
		case	"head":		head();		break;
		case	"preBody":	preBody();	break;
		case	"postBody":	postBody();	break;
		case 	'clense': 	clense();	break;
		case 	'sfw':		$sfw();		break;
};

// Generate variable to use as a dummy querystring after links to prevent caching
$uncache = rand(0, 1024);

// Clense clears all cookies and user-saved data on the site
// This needs a foreach loop
// function clense() { setcookie( $key, $value, $past, '/' ); };

// Look for setColor cookie, if it doesn't exist set theColor to a default color
if (isset($_COOKIE["setColor"])) $theColor = $_COOKIE["setColor"];
else $theColor = "#E84D5B";

$colorPool = array(
"#EE5078", "#FF8039", "#FFA533", "#FFC233", "#FFE030", "#FFF933", "#D7FF20", "#DA9540",
"#3CB371", "#00FA9A", "#808000", "#2E8B57", "#FF0000", "#FF4500", "#FF8C00", "#DA663A",
"#D2691E", "#FF7F50", "#DC143C", "#E9967A", "#FF1493", "#B22222", "#FF69B4", "#DA7F40",
"#483D8B", "#00BFFF", "#1E90FF", "#ADD8E6", "#20B2AA", "#87CEFA", "#B0C4DE", "#DA5839",
"#708090", "#4682B4", "#008080", "#40E0D0", "#0099CC", "#EA8224", "#BADA55", "#DAB83C",
"#62BDFF", "#5FE2FF", "#54FDD7", "#45FD9F", "#48FD82", "#3BFD4A", "#6AFD46", "#DAC73A",
"#DA2858", "#DA2A81", "#DA27A4", "#DA23C2", "#C731DA", "#AD2CDA", "#901BDA", "#CD5C5C",
"#6E6DB1", "#6B74B7", "#5170B3", "#297CC2", "#008DB8", "#0094AA", "#00A29F", "#F08080",
"#00A79D", "#00B081", "#69C264", "#88CB62", "#AFD54E", "#D4DD4C", "#E8D958", "#6495ED",
"#FEE449", "#FFDA41", "#FFD23B", "#FFC92B", "#FFBB40", "#FEB23A", "#FEA348", "#008B8B",
"#FE9150", "#7B1FDA", "#651EDA", "#483CFF", "#8771B2", "#DA4A34", "#DA4033", "#ED2939",
"#DA2A2F", "#DA2A3E", "#97FD3F", "#BFFD40", "#BADA55", "#DAD444", "#AEE530", "#800000",
"#4d55FF", "#5687FF", "#0099CC", "#76608A", "#7B68EE", "#4169E1", "#6A5ACD", "#A52A2A",
"#FFA500", "#15FF3E", "#03BCFF", "#00FF7F", "#90EE90", "#FB8758", "#F67D6C", "#F37873", 
"#F27289", "#E06794", "#B66DA4", "#B376B2", "#AD8244", "#FF29DD", "#DAAA49", "#E84D5B" );

function head() {
	global $uncache, $quote, $theColor, $description, $name, $url, $navLinks;

// Eyekon.php is the FavIcon handler for Almost-There
//include("/scr/eyekon.php")
// Wordpig.php contains canned responses for different scanarios
//include("/scr/wordpig.php");

// Required tag declaring unicode conformity in the HTML
echo "\n <meta http-equiv='Content-Type' content='text/html'; charset='utf-8' />";
// SEO Description Tag (For Google, Yahoo, Bing etc)
echo "\n <meta description='" . $description . "'>";
// SEO Facebook Properties
echo "\n <meta property='og:title' content='" . $name . "' />";
echo "\n <meta property='og:type' content='website' />";
	//	echo "\n <meta property='og:image' content='" . $largeIcon . "' />";
echo "\n <meta property=”og:url” content=”" . $url . "'/>";
// This declares to mobile devices that this website is capable of running as an application
echo "\n <meta name='apple-mobile-web-app-capable' content='yes' />";	// IOS and Safari
echo "\n <meta name='application-name' content='" . $name . "' />";		// Windows IE9, Windows Phone
// IE9 Jumplists Application Links
foreach ($navLinks as $k => $v) { echo "\n	<meta name='msapplication-task' content='name=$k;action-uri=" . $url . "/$v' />"; };
// Copyright (or lack thereof) Declaration
echo "\n <meta name='copyright' content='" . $name . " is licensed under a Creative Commons Attribution-ShareAlike License' />";
	
	/*
// Favicon
echo "\n <link rel='icon' href='" . $32png . "' sizes='32x32'>";
// Apple iOS icon
echo "\n <link rel='apple-touch-icon-precomposed' href='" . $152png . "'>";
// Windows 8 Tile icon properties
echo "\n <meta name='msapplication-TileColor' content=' . $theColor . '>";
echo "\n <meta name='msapplication-TileImage' content='" . $144png . "'>";
	*/

// Almost-There Layout Stylesheet
echo "\n <link rel='stylesheet' type='text/css' href='/sty/style.css />";
// Almost-There Animations Stylesheet
echo "\n <link rel='stylesheet' type='text/css' href='/sty/animated.css' />";
// Ditto Styles Alpha
echo "\n <link rel='stylesheet' type='text/css' href='/sty/ditto.css />";

// Google Analytics Tracking Script ( UA-11157430-2 )
// if $privacy = false {echo "\n <script src='/scr/ga.js'></script>";} else {echo "<script>console.log('Google Analytics Disabled')</script>";};
// jQuery Library 
echo "\n <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>";
// jQuery UI Library (Currently for class switching and Color Changing function, to be replaced in the future)
echo "\n <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js'></script>";
// jQuery Cookie Management Plugin
echo "\n <script src='/scr/cookie.jquery.js'></script>";
// jQuery Animations Script
echo "\n <script src='/scr/animations.jquery.js" . $uncache . "'></script>";
// Header Bubble Squares Script
echo "\n <script src='/scr/bubbles.jquery.js'></script>";

};

function preBody() {
	global $uncache, $theColor, $quote;
	echo "
	<header class='theBGcolor'>
		<div class='bubbles layerUp'></div>
		<div class='logoArea'>
		<a href='" . $url . "'><img alt='Click here to return Home' src='/img/logo.png' /></a><br />
			<span class='editQuote quote msg-type'>";
			// if $sfw = true { $quote } else { $quote };
		echo "</span>
		</div>
		<div id='navBody'>
			<ul>"
			. foreach ($navLinks as $link => $title) { echo "\n <li><a href='$link' id='#nav$title'> $title</a><span class='theColor'>&nbsp;/</span></li>\n"; } . 
			"</ul>
			<div id='settingsButton' class='fr budge'>
				<a>Settings</a>&nbsp;<a class='icon-cog icn'></a>
			</div>
		</div>
	</header>
	<main>";
};

/////////////////////////////////////////////////
/* This is where all of the page magic happens */
/////////////////////////////////////////////////

function postBody() {
global $pageSeed, $theColor;
	function displayAds() {
		echo "
<div style='width:400px;height:50px;'>
"
	// if $adsHidden don't show it
	// if adsBlocked add 5% Warn Level
	// Show instructions on fractal page on how to disable adblocking, give notification
	//put this here http://pastebin.com/raw.php?i=NwpQp6ui
"
	<iframe data-aa='17375' src='//ad.a-ads.com/17375?size=468x15' scrolling='no' class='adSpace' allowtransparency='true'></iframe>
	<iframe data-aa='17375' src='//ad.a-ads.com/17375?size=468x15' scrolling='no' class='adSpace ninjas' allowtransparency='true'></iframe>
	<iframe data-aa='17375' src='//ad.a-ads.com/17375?size=468x15' scrolling='no' class='adSpace ninjas' allowtransparency='true'></iframe>
</div>";
	};

	echo "
</main>
<div style='display:none;'>
	" . settingsMenu(); . "
</div>
<footer class='fullw theBGcolor'>
	<div class='fl'>" . displayAds(); . "</div>
	<div class='fr'>
		<div class='icn fr'>
			<a class='icn icon-css3'></a>
			<a class='icn icon-html5'></a>
			<a href='https://github.com/Almost-There/almostThere' class='icn icon-github5'></a>
			<a href='steam://url/GroupSteamIDPage/103582791430342520' class='icn icon-steam2'></a>
			<a href='http://facebook.com' class='icn icon-facebook2'></a>
		</div>
	</div>
</footer>";
};

?>