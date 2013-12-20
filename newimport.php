<?php
//Use this variable in a querystring after a link to prevent the page from being cached.
$pageSeed=rand(1024,2048);
// Look for setColor Cookie, if it isn't there, set theColor to 0099FF
if (isset($_COOKIE["setColor"])) $theColor=$_COOKIE["setColor"];
else $theColor= "#0099FF";
// import snarky quotes
include("quotes.sharky.php");

$colorPick = array("#EE5078", "#FF8039", "#FFA533", "#FFC233", "#FFE030", "#FFF933", "#D7FF20", "#15FF3E", "#03BCFF", "#00FF7F","#90EE90", "#3CB371", "#00FA9A", "#808000", "#2E8B57", "#FF0000", "#FF4500", "#FF8C00", "#FFA500", "#ED2939","#800000", "#A52A2A", "#D2691E", "#FF7F50", "#DC143C", "#E9967A", "#FF1493", "#B22222", "#FF69B4", "#CD5C5C","#F08080",  "#6495ED", "#008B8B", "#483D8B", "#00BFFF", "#1E90FF", "#ADD8E6", "#20B2AA", "#87CEFA", "#B0C4DE", "#76608A", "#7B68EE", "#4169E1", "#6A5ACD", "#708090","#4682B4", "#008080", "#40E0D0", "#0099CC");

function head() {
		echo "\n<!-- head() -->\n"
	//Function used to load JS, CSS, and Meta Attributes into the HTML's <head> tag.
		global $pageSeed;
	//Echo Meta Attributes and SEO
		echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		";
	//Echo CSS, Fonts, and Page Styles
		echo "
			<link rel='stylesheet' type='text/css' href='/new/sty/dyn.style.php?rnd=" . $pageSeed . "'>
			<link rel='stylesheet' type='text/css' href='/new/sty/style.css?rnd=" . $pageSeed . "'>
			<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'>
			";
	//Echo Javascript, jQuery and Page Scripts
			"
			<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
			<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'></script>
			<script src='/new/scr/cookie.jquery.js'></script>
			<script src='/new/scr/animations.jquery.js?rnd=" . $pageSeed . "'></script>
			<script src='/new/scr/bubbles.jquery.js?rnd=" . $pageSeed . "'></script>
			";
			echo "\n<!-- /head() -->\n"
};

function preBody() {
global $pageSeed , $theColor, $quote;
	echo "\n<!-- preBody() -->\n"
	echo "
	<header class='theBGcolor'>
		<div class='bubbles' style='z-index+1'></div>
		<a class='logoArea' href=/new/index.php'>
			<img alt='Click here to return home' src='img/logo.png' />
			<span class='quote msg-type' id='msg'>" . $quote . "</span>
		</a>
		<div id='navBody'>
			<ul>
				<li><a href='/new/squares.php'>Squares</a></li>
				<li><a href='/forums/'>Forums</a></li>
				<li><a href='/new/fridge.php'>Fridge</a></li>
				<li><a href='/new/irc.php'>Chat</a></li>
				<li class='floatR'><a id='settingsButton'>Settings</a></li>
			</ul>
		</div><!-- navBody -->
	</header>
	";
	echo "
	<div id='allOfTheThings'>
	";
	echo "\n<!-- /preBody() -->\n"
};

function postBody {
	echo "\n<!-- postBody() -->\n"
	echo "
		</div><!-- allOfTheThings -->
	<footer class='theBGcolor'>
		<div class='full tint'>
			<div class='floatL' id='dimensions'>
				<script>
window.onresize = displayWindowSize;
window.onload = displayWindowSize;
function displayWindowSize() {
	document.getElementById ('dimensions').innerHTML = $( window ).width();
	};
				</script>
			</div><!-- Left Stuff -->
		<div class='icn floatR'>
			<a href='https://github.com/Almost-There/almostThere' class='icon-github2'></a>
			<a href='steam://url/GroupSteamIDPage/103582791430342520' class='icon-steam2'></a>
			<a href='https://github.com/Almost-There/almostThere' class='icon-facebook2'></a>
		</div><!-- Right Stuff -->
	</div><!-- full tint -->
	</footer>
	";
};