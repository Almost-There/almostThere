<?php
//Use this variable in a querystring after a link to prevent the page from being cached.
$pageSeed = rand(1024, 2048);
// Look for setColor Cookie, if it isn't there, set theColor to 0099FF
if (isset($_COOKIE["setColor"]))
			$theColor = $_COOKIE["setColor"];
else
			$theColor = "#bada55";
$colorPick = array(
"#EE5078", "#FF8039", "#FFA533", "#FFC233", "#FFE030", "#FFF933", "#D7FF20",
// Splash lights, thoughts, place
"#3CB371", "#00FA9A", "#808000", "#2E8B57", "#FF0000", "#FF4500", "#FF8C00",
// color peace set in time
"#D2691E", "#FF7F50", "#DC143C", "#E9967A", "#FF1493", "#B22222", "#FF69B4",
// red green blue all the clues
"#483D8B", "#00BFFF", "#1E90FF", "#ADD8E6", "#20B2AA", "#87CEFA", "#B0C4DE",
"#708090", "#4682B4", "#008080", "#40E0D0", "#0099CC", "#EA8224", "#BADA55",
"#62BDFF", "#5FE2FF", "#54FDD7", "#45FD9F", "#48FD82", "#3BFD4A", "#6AFD46",
"#DAC73A", "#DAB83C", "#DAAA49", "#DA9540", "#DA7F40", "#DA663A", "#DA5839",
"#DA2858", "#DA2A81", "#DA27A4", "#DA23C2", "#C731DA", "#AD2CDA", "#901BDA",
"#6E6DB1", "#6B74B7", "#5170B3", "#297CC2", "#008DB8", "#0094AA", "#00A29F",
"#00A79D", "#00B081", "#69C264", "#88CB62", "#AFD54E", "#D4DD4C", "#E8D958",
"#FEE449", "#FFDA41", "#FFD23B", "#FFC92B", "#FFBB40", "#FEB23A", "#FEA348",
"#FE9150", "#7B1FDA", "#651EDA", "#483CFF", "#8771B2", "#DA4A34", "#DA4033",
"#DA2A2F", "#DA2A3E", "#97FD3F", "#BFFD40", "#BADA55", "#DAD444", "#AEE530",
"#4d55FF", "#5687FF", "#0099CC", "#76608A", "#7B68EE", "#4169E1", "#6A5ACD",
"#CD5C5C", "#F08080", "#6495ED", "#008B8B", "#ED2939", "#800000", "#A52A2A",
"#FFA500", "#15FF3E", "#03BCFF", "#00FF7F", "#90EE90", "#FB8758", "#F67D6C", 
"#F37873", "#F27289", "#E06794", "#B66DA4", "#B376B2", "#AD8244", "$FF29DD" );

function head() {
			global $pageSeed, $theColor;
			echo "\n<!-- head() -->\n";
			//Function used to load JS, CSS, and Meta Attributes into the HTML's <head> tag.
			//Echo Meta Attributes and SEO
			echo "
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />\n
		<meta name='copyright' content='Almost-There is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License.' />\n
		<meta description='Your favorate internet!' /> ";
			//Echo CSS, Fonts, and Page Styles
			echo "
		<link rel='stylesheet' type='text/css' href='/sty/style.css?=" . $pageSeed . "'>
		<style>.theColor {color:" . $theColor . ";} .theBGcolor {color:#222222;background-color:" . $theColor . ";}</style>";
			//Echo Javascript, jQuery and Page Scripts
			echo "
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
			<script src='/scr/bubbles.jquery.js?rnd=" . $pageSeed . "'></script> ";
			echo "\n<!-- /head() -->\n"; };

function preBody() {
			global $pageSeed, $theColor, $quote;
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
			
			echo "<header class='theBGcolor'>
		<div class='bubbles layerUp'></div>
		<div class='logoArea'>
		<a href='http://almost-there.org/index.php'>
			<img alt='Click here to return home' src='/img/logo.png' /></a><br />
			<span class='quote msg-type'>";
	// import snarky quotes
		include("quotes.sharky.php");
	echo "</span>\n</div><!-- logoArea -->\n<div id='navBody'>\n<ul>";
	function navList() {
		echo "\n<!-- navList() -->\n";
			$slash    = "<span class='theColor'>&nbsp;/</span>\n";
			$navLinks = array(
						"/squares.php" => Squares,
						"/chan.php" => Chan,
						"/forums" => Forums,
						"/fridge.php" => Fridge,
						"/irc.php" => Chat
						);
		foreach ($navLinks as $k => $v) { echo "<li><a href='$k'> $v</a>" . $slash . "</li>\n"; }
		echo "</ul>";
		echo "\n<!-- /navList() -->\n"; };
	navList();
		echo "<div id='settingsButton' class='fr budge'>
			<a href='openSettings'>Settings</a>&nbsp;
			<a class='icon-cog icn'></a>
		</div>
	</div>\n";

	echo "</header>";
	echo "<div id='allOfTheThings'>";
	echo "\n<!-- /preBody() -->\n";
};

/////////////////////////////////////////////////
/* This is where all of the page magic happens */
/////////////////////////////////////////////////

function postBody() {
global $pageSeed, $theColor;
	function displayAds() {
		echo "<div style='width:400px;height:50px;' class='write small'>";
		//put this here http://pastebin.com/raw.php?i=NwpQp6ui
		echo "</div>";
	};
	echo "\n<!-- postBody() -->\n";
	echo "</div>";
	/* #allOfTheThings */
	echo "
	<footer class='fullw theBGcolor'>
		<div class='full tint'>
			<div class='fl'>
			<iframe data-aa='17375' src='//ad.a-ads.com/17375?size=468x15' scrolling='no' class='adSpace' allowtransparency='true'></iframe>
			</div>";
			echo "<!-- Left Stuff -->
			<div class='icn fr'>
				<a href='https://github.com/Almost-There/almostThere' class='icn icon-github2'></a>
				<a href='steam://url/GroupSteamIDPage/103582791430342520' class='icn icon-steam2'></a>
				<a href='https://github.com/Almost-There/almostThere' class='icn icon-facebook2'></a>
			</div><!-- Right Stuff -->
		</div>
	</footer>";
	echo "\n<!-- /postBody() -->\n";
};

function colorForm() {
	global $colorPick;
	// Shuffle contents in colorPick array
	shuffle($colorPick);
	echo "\n<!-- colorForm() -->\n";
		echo "<div id='colorPicker'>";
		//Set color clientside with jquery, while saving the cookie to be read on next load with PHP
		foreach ($colorPick as $v) {
			echo "<a class='changeColor icon-droplet' style='color:$v'></a>\n";
				// Only allow 46 Colors to be shown at a time
			if ($i++ > 46)
				break;
		};
		echo "\n</div>";
	echo "\n<!-- /colorForm() -->\n";
};

function colorsAvailable() {
	global $colorPick;
	$result = count($colorPick);
	echo $result;
};
