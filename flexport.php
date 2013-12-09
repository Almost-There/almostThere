<?php

// Use this variable with a dummy query string afterCSS/JS documents to prevent caching
$pageSeed=rand(1, 1024);

/* Color Changing Function */
		// colors chooseable in the ColorPicker
		$colorPick = array("#EE5078", "#FF8039", "#FFA533", "#FFC233", "#FFE030", "#FFF933", "#D7FF20", "#15FF3E", "#03BCFF", "#00FF7F","#90EE90", "#3CB371", "#00FA9A", "#808000", "#2E8B57", "#FF0000", "#FF4500", "#FF8C00", "#FFA500", "#ED2939","#800000", "#A52A2A", "#D2691E", "#FF7F50", "#DC143C", "#E9967A", "#FF1493", "#B22222", "#FF69B4", "#CD5C5C","#F08080",  "#6495ED", "#008B8B", "#483D8B", "#00BFFF", "#1E90FF", "#ADD8E6", "#20B2AA", "#87CEFA", "#B0C4DE", "#76608A", "#7B68EE", "#4169E1", "#6A5ACD", "#708090","#4682B4", "#008080", "#40E0D0", "#0099CC");
		//If a user has a color in the setColor cookie we read it, otherwise use theColor
		if (isset($_COOKIE["setColor"])) $theColor=$_COOKIE["setColor"];
		else 
			$theColor= "#0099FF";
			$antiColor= "#111111";
		//Build ColorPicker
		function colorForm() {
			echo "\n<!-- colorForm() -->";
			global $colorPick;
			echo "<div id='colorPicker'>";
			//Set color clientside with jquery, while saving the cookie to be read on next load with PHP
			foreach ($colorPick as $v) { echo "<a class='changeColor' style='background:$v'></a>\n"; };
			echo "\n</div>";
			echo "\n<!-- /colorForm() -->\n";
		};


function head() {
	global $pageSeed, $theColor, $antiColor;
	echo "\n<!-- head() -->\n";
	
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>\n";
	echo "
			<link rel='stylesheet' type='text/css' href='/new/sty/dyn.style.php?rnd=" . $pageSeed . "'>
			<style>\n
				.theColor {color:" . $theColor . ";}
				.theLinkColor a:link {color:" . $theColor . ";}
				.switch-input:checked ~ .switch-label {background-color:" . $theColor . ";}
				/* #navBody li a:hover {color:" . $theColor . ";} */
				#navBody li a:hover:after {color:" . $theColor . ";}
				theLinkColor a:visited {color:" . $theColor . ";} .titleWindow {border: 2px solid " . $theColor . ";} a:hover {color:" . $theColor . ";}
				theLinkColor a:hover {color:" . $antiColor . ";background-color:" . $theColor . ";}
				icn a:hover {color:" . $theColor . ";}
				.theLinkColor a:active {color:" . $antiColor . ";background-color:" . $theColor . ";}
				.theBGcolor, table th {color:#222222;background-color:" . $theColor . ";}
				#navBody li:before {color:" . $theColor . ";}
			</style>\n
			<!-- <link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'> --> 
	<style>		/* Font Imports */
	@import url('neoSans.css');
	@import url('icomoon.css');

/* Important global styles */
	* {margin:0;padding:0;text-decoration:none;border:0;}
	body {color:#FFFFFF;font-size:14px;background-color:#111111;line-height:1.4;font-family: 'neoSans';font-weight:200;}
	body:before {content:"";height:100%;float:left;width:0;margin-top:-32767px;}
/* Reset HTML Styles */
	a, a:link {color:#FFFFFF;text-decoration:underline;}
	a:hover {text-decoration:none;}
	a:visited {color:#FFFFFF;}
	html, body {height:100%;}
	iframe {border:0;}
	h1 {margin: 0 0 10px 8px;padding:0;}
	table {width:100%;margin:0px auto;background-color:#222222;}
	table td {border: solid 1px #222222;}
	table td {text-align:center;}
	table tr {height:22px;}
	table tr:nth-child(even) {background-color:#333333;}
	table tr:nth-child(odd) {background-color:#222222;}
	del {text-decoration:line-through;opacity:0.6;}
	hr {margin-top:3px;margin-bottom:3px;width:100%;border-bottom:1px dashed #757575;}
	ul li {margin-left:20px;}

/* Font AntiAliasing */
	.antialias { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;}

/* ClearFix */
	.cf:before, .cf:after {content:' ';display: table;} .cf:after {clear: both;} 

/* Quick Styles */
	.b {font-weight:bold;}
	.ul {text-decoration:underline;} /* Not to be confused with Unordered list! */
	.fl {float:left}
	.fr {float:right}
	.ma {margin-left:auto;margin-right:auto;} /* This is a pretty hack to cener things with a width attribute applied */
	.ctr {text-align:center;margin-left:auto;margin-right:auto;} /* Same as above with Text-Aligh Center */
	.big {font-size:28px;}
	.small {font-size:9px;}
	.ninjas {display:none;color:#000000;} /* Hide dat shit */

/* Flexbox Styles */
	.flex-world {display: flex;width:100%;height:100%;flex-wrap:wrap;flex-direction:column;justify-content:flex-start;float:left;display: -webkit-flex;}

/* Divine body layout Settings */
	#allOfTheThings {min-height: 100%;}
	#everything {padding-bottom:20px;}
	#header {display:block;overflow:hidden;margin:0;border:0;width:100%;height:137px;}
	div .contentBody {margin-left:10px;width:1650px;}
	#footer {position:relative;margin-top:-28.5px;height:28px;clear:both;padding-left:8px;padding-right:8px;background-color:rgba(22, 22, 22, 0.6);}
	#footer .icn {font-size:20px;margin:auto 2px;}

/*  Header Styles */
	.logo {position:absolute;top:20px;left:10px;z-index:+1;width:400px;height:50px;}
	.msg-type {position:absolute;top:50px;color:#222222;}
	.theLinkColor a {padding-left:3px;padding-right:3px;text-decoration:underline;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}

/* Footer Styles */
	.icn {text-decoration:none;}
	.icn * {text-decoration:none;}
	.icn a:before {text-decoration:none;}
	.icn a:link {text-decoration:none;}
	.icn a:hover {text-decoration:none;}
	a:link .icn {text-decoration:none;}
	a:hover .icn {text-decoration:none;}

/* Navigation Bar Styles */
	#navBody * {list-style:none;font-size:16px;}
	#navBody {float:left;width:100%;height:22px;margin:0 auto;background-color:rgba(22, 22, 22, 0.6);z-index:+10;position:relative;top:-42px;}
	#navBody li {float:left;margin-left:6px;}
	#navBody li a, #navBody li a:link {color:#D6D6D6;text-decoration:none;}
	#navBody li a:hover {cursor:pointer;text-decoration:none;text-shadow: 0 0 4px #FFFFFF;color:#FFFFFF;}
	#navBody li:before {content:'/ ';font-weight:bold;}

/* Video Player Styles */
	.youTube {width:650px;height:390px;overflow:hidden;}
	.youTube iframe {border:0;width:630px;height:370px;padding:10px;}

/* Table Styles */	
	#fileTable tr th a:link, .fileTable {color:#222222;text-decoration:none}
	#fileTable tr th a:hover, .fileTable a:active {text:decoration:underline}

/* Code viewer and Pastebin Styles */
	.sourceCode {font-size:10px;padding-left:30px;width:900px;overflow:scroll;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;overflow:scroll;overflow-y:hidden;background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAYCAYAAADd5VyeAAAAIUlEQVQYlWM8c+bMfwYkwMSABoaOAOP////PDAJ3UEMAAH+KB1vUYYu4AAAAAElFTkSuQmCC');background-repeat:repeat;background-size:auto 5px;background-size:auto 20px;background-position:0px;}
	.sourceCode span {font-family:Verdana;color:#333333 !important;}

/* Settings Menu Styles */
	#settingsMenu {display:none;color:#EFEFEF;padding:0px;background-color:#232323;position:absolute;right:0px;top:22px}
	#settingsButton {float:right;margin-right:6px;}
	#settingsButton .icn {position:relative;top:2px;}
	#settingsButton:hover {color:#FFFFFF;cursor:pointer;}
	.settingsMenuBlock {width:200px;border-left:1px dashed #757575;border-bottom:1px dashed #757575;padding:10px;}
	.settingsMenuBlock #colorPicker {height:180px;width:200px;}

/* Color Picker Styles */
	#colorPicker {background-color:#222222;}
	#colorPicker a {float:left;width:18px;height:18px;border:4px solid #222222;display:block;}
	#colorPicker a:hover {cursor:pointer;border:4px solid #444444;}
	
/* Tile Styles */
	.frontBody {display:block;overflow:hidden;height:0px;width:175px;margin:10px 0px 0px 10px;float:left;}
	.frontBody h3 {font-size:18px;padding:5px;}
	.frontBody ul {margin-left:20px;}
	.frontBody hr {opacity:0.3;width:95%;border-bottom:1px solid #D3D3D3;clear:both;}

/* Fridge Styles */
	#breadcrumbs {margin: 0 0 8px 8px;}
	#breadcrumbs {float:left;text-align:left;}
	#listingheader a, #listingheader a:active, #listingheader a:visited, #listingheader a:link {text-decoration: none;}
	#listingheader a:hover {text-decoration:underline;}
	#headermodified, #headerfile, #headersize {width:400px;}
	#headermodified a, #headerfile a, #headersize a {color:#222222;}
	#listing {border: 0px solid #222222;}
	#listing a {color:#FFFFFF;text-decoration:none;}
	#listing a:hover {background-color:#434343;}
	#listing a img {margin:0;}
	#upload {border: 1px solid #A7C5FF;display:block;margin-top: 10px;font-size:small;color: #6285CA;text-decoration:none;background-color: #E9F0FF;}
	#uploadtitle {background-color: #DBE6FE;padding: 2px 5px 2px 5px;border-bottom: 1px solid #A7C5FF;}
	#uploadcontent {padding: 2px 5px 2px 5px;}
	.mod {margin:0;}
	.size {margin:0;}
	.upload-error{padding:2px 0;}
	.upload-error strong{color:#993333;}

/* Settings menu switch styles */
	.switch {position:relative;bottom:3px;display:inline-block;vertical-align:top;width:56px;height:20px;padding:3px;background-color:white;border-radius:18px;box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);cursor:pointer;background-image: -webkit-linear-gradient(top, #eeeeee, white 25px);background-image: -moz-linear-gradient(top, #eeeeee, white 25px);background-image: -o-linear-gradient(top, #eeeeee, white 25px);background-image: linear-gradient(to bottom, #eeeeee, white 25px);}
	.switch-input {position:absolute;top:0;left:0;opacity:0;}
	.switch-label {position: relative;display: block;height: inherit;font-size: 10px;text-transform: uppercase;background: #eceeef;border-radius: inherit;box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);-webkit-transition: 0.15s ease-out;-moz-transition: 0.15s ease-out;-o-transition: 0.15s ease-out;transition: 0.15s ease-out;-webkit-transition-property: opacity background;-moz-transition-property: opacity background;-o-transition-property: opacity background;transition-property: opacity background;}
	.switch-label:before, .switch-label:after {position: absolute;top: 50%;margin-top: -.5em;line-height: 1;-webkit-transition: inherit;-moz-transition: inherit;-o-transition: inherit;transition: inherit;}
	.switch-label:before {content:attr(data-off);right:11px;color:#222222;text-shadow: 0 1px rgba(255, 255, 255, 0.5);}
	.switch-label:after {content: attr(data-on);left: 11px;color:#222222;text-shadow: 0 1px rgba(0, 0, 0, 0.2);opacity: 0;}
	.switch-input:checked ~ .switch-label {box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);}
	.switch-input:checked ~ .switch-label:before {opacity: 0;}
	.switch-input:checked ~ .switch-label:after {opacity: 1;}
	.switch-handle {position: absolute;top: 4px;left: 4px;width: 18px;height: 18px;background: white;border-radius: 10px;box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);background-image: -webkit-linear-gradient(top, white 40%, #f0f0f0);background-image: -moz-linear-gradient(top, white 40%, #f0f0f0);background-image: -o-linear-gradient(top, white 40%, #f0f0f0);background-image: linear-gradient(to bottom, white 40%, #f0f0f0);-webkit-transition: left 0.15s ease-out;-moz-transition: left 0.15s ease-out;-o-transition: left 0.15s ease-out;transition: left 0.15s ease-out;}
	.switch-handle:before {content: '';position: absolute;top: 50%;left: 50%;margin: -6px 0 0 -6px;width: 12px;height: 12px;background: #f9f9f9;border-radius: 6px;box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);background-image: -webkit-linear-gradient(top, #eeeeee, white);background-image: -moz-linear-gradient(top, #eeeeee, white);background-image: -o-linear-gradient(top, #eeeeee, white);background-image: linear-gradient(to bottom, #eeeeee, white);}
	.switch-input:checked ~ .switch-handle {left: 40px;box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);}

/* Bubble Styles */
	.bubbles {position:relative;overflow:hidden;width:100%;height:180%;margin:0 auto;}
	.bubble-container {position:absolute;bottom:0;-webkit-animation: bubblerise 4s infinite ease-in; -moz-animation:bubblerise 4s infinite ease-in;-ms-animation: bubblerise 4s infinite ease-in;animation: bubblerise 4s infinite ease-in;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity:0;}
	.bubble {opacity:0.9;width:6px;height:6px;margin:0 auto;border:1px solid rgba(255, 255, 255, 0.5);background: rgba(255, 255, 255, 0.5);-webkit-border-radius: 10px;-moz-border-radius: 10px;-ms-border-radius: 10px;-o-border-radius: 10px;border-radius: 10px;-webkit-animation: bubblewobble 0.4s infinite linear;-moz-animation: bubblewobble 0.4s infinite linear;-ms-animation: bubblewobble 0.4s infinite linear;animation: bubblewobble 0.4s infinite linear;}
	.bubble span {overflow:hidden;text-size:8px;font-weight:bold;color:#222222;}

/* Browser Compatibility Bubble Stuff; No need to touch these. */
	@-webkit-keyframes bubblerise {0% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;} 5% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;} 99% {filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;} 100% {bottom: 100%;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;}}
	@-moz-keyframes bubblerise {0% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;} 5% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;} 99% {filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;} 100% {bottom: 100%;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;}}
	@-ms-keyframes bubblerise {0% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;} 5% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;}99% {filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;}100% {bottom: 100%;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;}}
	@keyframes bubblerise {0% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;} 5% {bottom: 0;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;} 99% {filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);opacity: 1;} 100% {bottom: 100%;filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);opacity: 0;}}
	@-webkit-keyframes bubblewobble {0% {margin-left: 0;} 50% {margin-left:0px;}}
	@-moz-keyframes bubblewobble {0% {margin-left: 0;} 50% {margin-left:0px;}}
	@-ms-keyframes bubblewobble {0% {margin-left: 0;} 50% {margin-left:0px;}}
	@keyframes bubblewobble {0% {margin-left: 0;} 50% {margin-left:0px;}}
	@keyframes caret{ 50%{ opacity:0.1; transform:scaleY(.8); } }
	@-webkit-keyframes caret{50%{ opacity:0.1; -webkit-transform:scaleY(.8); } }

/* We hang onto this because we might need it */
	/* .bubble-toggle {position: absolute;top: 10px;right: 10px;padding: 10px;background: rgba(255, 255, 255, 0.5);font-family: sans-serif;font-size: 13px;color: #333;} .bubble-toggle:hover {background: rgba(255, 255, 255, 0.75);} */</style>
		";
	echo "
			<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>\n
			<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'></script>\n
			<script src='/new/scr/cookie.jquery.js'></script>\n
			<script src='/new/scr/animations.jquery.js?rnd=" . $pageSeed . "'></script>\n
			<script src='/new/scr/bubbles.jquery.js?rnd=" . $pageSeed . "'></script>\n
		";
	
echo "\n<!-- /head() -->\n"; };

function preBody() {
	echo "\n<!-- preBody() -->";
	global $pageSeed , $theColor;

	echo "
	<div id='allOfTheThings'>
		<header id='header' class='theBGcolor'>
			<div class='bubbles' style='z-index:+1;'></div>
			<!--<a class='bubble-toggle' href='#'>Bubbles Off</a>-->
	<img class='logo cf' style='z-index:+2;' width='400' height='50' src='img/logo.png'  alt='Click here to return Home'/><span class='logo'  style='z-index:+2;font-size:12px;opacity:0.6;font-weight:bold;margin-left:60px;'><span class='msg-type' id='msg'>";
		include("quotes.sharky.php");
echo "</span></span></div>";
echo "
<div class='cf' id='navBody'> 
	<ul class='animateNav'>
		<li><a href='/new/index.php'>Squares</a></li>
		<li><a href='/forums/'>Forums</a></li>
		<li><a href='/new/fridge.php'>Fridge</a></li>
		<li><a href='steam://url/GroupSteamIDPage/103582791430342520'>Steam</a></li>
		<li><a href='/new/irc.php'>IRC</a></li>
		<li><a href='#servers'>Servers</a></li>
		<li><a href='#users'>Users</a></li>
	</ul>
	<div id='settingsButton'>
		<span id='settingsSpan'><a class='icn icon-plus'></a></span> Settings
	</div>
	<div id='settingsMenu'>";
		echo "<div class='settingsMenuBlock'>"; colorForm(); echo "</div>";
		echo "<div class='settingsMenuBlock'>";
			if (isset($_COOKIE["almostUser"]))
				echo "Welcome " . $_COOKIE["almostUser"] . "!<br>";
			else
				echo "<a class='theColor' href='http://almost-there.org/forums/misc.php?action=steam_login'>Click here to Login</a></div>";

// GO TO THE LAND OF MISFIT CODE TO GET MORE OF THESE
	echo "<div class='settingsMenuBlock'>
					<span class='fl cf'>Example Switch</span>
					<label class='switch fr'>
					  <input type='checkbox' class='switch-input' checked>
					  <span class='switch-label' data-on='On' data-off='Off'></span>
					  <span class='switch-handle'></span>
					</label><br />
				</div>";
	echo "<!-- /SettingsMenu() -->";
echo "\n</div>\n</div>\n</header>\n<div class='flex-world contentBody' >";
echo "<!-- /preBody() -->";
}

//This function will be expanded in the future to allow squares to be read from a configuration array
//so they may have multiable sizes, content, backgrounds, and elements
function squares( $squareTitle = "squareTitle \not defined!" ) { echo "<div class='flex-item frontBody animateSquare theBGcolor cf'> <h3>" . $squareTitle . "</h3>"; echo "</div>"; }
function postBody() {
echo "\n<!-- /postBody()-->";
//StickyFooter requires two closing div tags
echo "
<br /><br />			
		</div><!-- content body -->

<div class='theBGcolor'>
	<footer id='footer' class='theColor'>
		<div class='fl' id='dimensions'><script>        
		window.onresize = displayWindowSize;
        window.onload = displayWindowSize;
        function displayWindowSize() {
        	document.getElementById ('dimensions').innerHTML = $( window ).width();
        };</script></div>
		<div class='fade icn fr'>
			<a href='https://github.com/Almost-There/almostThere' class='icon-github2'></a>
			<a href='steam://url/GroupSteamIDPage/103582791430342520' class='icon-steam2'></a>
			<a href='https://github.com/Almost-There/almostThere' class='icon-facebook2'></a>
			</div>
	</footer>
</div>
</div><!-- allOfTheThings -->";
echo "\n<!-- /postBody -->\n";
}
?>

<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Standalone Page</title>
</head>
<body>
<? preBody(); ?>
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
	"k8gpHUIZaVQ",		/* Boreta - Honey Heart */
	"HEkLU2AiJCs"		/* Shiny Toy Guns - Stripped */
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
	echo $yt;
	?>?autoplay=0&amp;theme=dark&amp;color=white" allowfullscreen></iframe>
</div>
<div>
<?
	squares( $squareTitle='Forum Activity'		);
	squares( $squareTitle='Steam Activity'		);
	squares( $squareTitle='Recent Changes'		);
	squares( $squareTitle='New Users'			);
	squares( $squareTitle='Recent Logins'		); 
	squares( $squareTitle='Currently Online'	);
	squares( $squareTitle='Global Settings'		); 
?></div>
<div style='font-family:neoSans;font-size:10px;'>Look at how fucking pretty this website is with this antialiased fucking font, this means that even though this text is like 10 pixels high you can still read it crisp as fuck</div>
<? postBody(); ?>
</body>
</html>