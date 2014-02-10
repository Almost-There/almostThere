<?php
//Use this variable in a querystring after a link to prevent the page from being cached.
$pageSeed=rand(1024,2048);
// Look for setColor Cookie, if it isn't there, set theColor to 0099FF
if (isset($_COOKIE["setColor"])) $theColor=$_COOKIE["setColor"];
else $theColor= "#bada55";

$colorPick = array("#EE5078", "#FF8039", "#FFA533", "#FFC233", "#FFE030", "#FFF933", "#D7FF20", "#15FF3E", "#03BCFF", "#00FF7F","#90EE90", "#3CB371", "#00FA9A", "#808000", "#2E8B57", "#FF0000", "#FF4500", "#FF8C00", "#FFA500", "#ED2939","#800000", "#A52A2A", "#D2691E", "#FF7F50", "#DC143C", "#E9967A", "#FF1493", "#B22222", "#FF69B4", "#CD5C5C","#F08080",  "#6495ED", "#008B8B", "#483D8B", "#00BFFF", "#1E90FF", "#ADD8E6", "#20B2AA", "#87CEFA", "#B0C4DE", "#76608A", "#7B68EE", "#4169E1", "#6A5ACD", "#708090","#4682B4", "#008080", "#40E0D0", "#0099CC");

function head() {
		echo "\n<!-- head() -->\n";
	//Function used to load JS, CSS, and Meta Attributes into the HTML's <head> tag.
		global $pageSeed, $theColor;
	//Echo Meta Attributes and SEO
		echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		";
	//Echo CSS, Fonts, and Page Styles
		echo "
			<link rel='stylesheet' type='text/css' href='/sty/style.css?=" . $pageSeed ."'>
			<style>
			.theColor {color:" . $theColor . ";}
			.titleWindow {border: 2px solid " . $theColor . ";} a:hover {color:" . $theColor . ";}
			icn a:hover {color:" . $theColor . ";}
			.theBGcolor, table th {color:#222222;background-color:" . $theColor . ";}
			</style>
			";
	//Echo Javascript, jQuery and Page Scripts
		echo	"
		<!-- jQuery -->
			<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
		<!-- jQuery UI -->
			<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js'></script>
		<!-- jQuery Cookie Reading plugin -->
			<script src='/scr/cookie.jquery.js'></script>
		<!-- jQuery Sizzle CSS Selector support plugin -->
			<script src='/scr/sizzle.jquery.js'></script>
		<!-- Custom jQuery Animations script -->
			<script src='/scr/animations.jquery.js?rnd=" . $pageSeed . "'></script>
		<!-- Floating header bubbles script -->
			<script src='/scr/bubbles.jquery.js?rnd=" . $pageSeed . "'></script>
			";
			echo "\n<!-- /head() -->\n";
};

function preBody() {
global $pageSeed , $theColor, $quote;
	echo "\n<!-- preBody() -->\n";

	// Here we include the Facebook API
	echo "<div id='fb-root'></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>";

	echo "
	<header class='theBGcolor'>
		<div class='bubbles' style='z-index+1'></div>
		<div class='logoArea'>
		<a href='http://almost-there.org/index.php'>
			<img alt='Click here to return home' src='img/logo.png' />	</a>
			<span class='quote msg-type' id='msg'>
		";
	 // import snarky quotes
 	include("quotes.sharky.php");
 	echo "</span>\n</div><!-- logoArea -->\n<div id='navBody'>\n<ul>";
	function navList() { 
		echo "\n<!-- navList() -->\n";
	 	$slash="<span class='theColor'>&nbsp;/</span>\n";
	 	$navLinks = array(
	    	"squares.php" => Squares,
	    	"chan.php" => Chan,
	    	"../forums" => Forums,
	    	"fridge.php" => Fridge,
	    	"irc.php" => Chat );
		foreach ($navLinks as $k => $v) { echo "<li><a href='$k'> $v</a>" . $slash . "</li>\n"; }
		echo "</ul><div class='fr budge'><a>Settings</a>&nbsp;<a class='icon-cog icn'></a></div></div>\n";
		echo "\n<!-- /navList() -->\n"; 
	};
	navList();
	echo "</header>";
	echo "<div id='allOfTheThings'>";
	echo "\n<!-- /preBody() -->\n";
};
	  /////////////////////////////////////////////////
	 /* This is where all of the page magic happens */
	/////////////////////////////////////////////////

function postBody() {
	global $pageSeed , $theColor;
	echo "\n<!-- postBody() -->\n";
	echo "</div>";/* #allOfTheThings */
	echo "
	<footer class='theBGcolor'>
		<div class='full tint'>
			<div class='fl' id='dimensions'>
				<script> window.onresize = displayWindowSize; window.onload = displayWindowSize;
						function displayWindowSize() { document.getElementById ('dimensions').innerHTML = $( window ).width(); }; </script>
			</div><!-- Left Stuff -->
		<div class='icn fr'>
			<a href='https://github.com/Almost-There/almostThere' class='icon-github2'></a>
			<a href='steam://url/GroupSteamIDPage/103582791430342520' class='icon-steam2'></a>
			<a href='https://github.com/Almost-There/almostThere' class='icon-facebook2'></a>
		</div><!-- Right Stuff -->
	</div><!-- full tint -->
	</footer>
	";
	echo "\n<!-- /postBody() -->\n";
};
function colorForm() {
	global $colorPick;
	echo "\n<!-- colorForm() -->\n";
	echo "<div id='colorPicker'>";
	//Set color clientside with jquery, while saving the cookie to be read on next load with PHP
	foreach ($colorPick as $v) { echo "<a class='changeColor icon-droplet' style='color:$v'></a>\n"; };
	echo "\n</div>";
	echo "\n<!-- /colorForm() -->\n";
};

?>
