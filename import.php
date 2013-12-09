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
	
	echo "
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>\n
		";
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
			<link rel='stylesheet' type='text/css' href='/new/sty/style.css?rnd=" . $pageSeed . "'>
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
	<div id='everything'>
		<header>
		<div id='header' class='theBGcolor'>
			<div class='bubbles' style='z-index:+1;'></div>
			<!--<a class='bubble-toggle' href='#'>Bubbles Off</a>-->
		</div>
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
	<div id='settingsButton'><span id='settingsSpan'>Open Settings</span><span class='icn' style='color:" . $theColor . "'>&nbsp;<a class='icn icon-cog2'></a></span></div>
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
	</div><!-- everything -->
</div><!-- allOfTheThings -->
<div class='theBGcolor'>
	<footer>
	<div id='footer' class='theColor'>
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
	</div>
	</footer>
</div>";
echo "\n<!-- /postBody -->\n";
}
?>