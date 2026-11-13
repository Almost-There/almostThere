<?php

// Look for setColor Cookie, if it isn't there (or isn't a hex/rgb color), set theColor to E84D5B
if (isset($_COOKIE["setColor"]) && is_string($_COOKIE["setColor"]) && preg_match('/^(#[0-9a-fA-F]{3,8}|rgba?\(\s*\d{1,3}\s*,\s*\d{1,3}\s*,\s*\d{1,3}\s*(,\s*[\d.]+\s*)?\))$/', $_COOKIE["setColor"]))
			$theColor = $_COOKIE["setColor"];
else
			$theColor = "#E84D5B";
$colorPick = array(
"#EE5078", "#FF8039", "#FFA533", "#FFC233", "#FFE030", "#FFF933", "#D7FF20",
"#3CB371", "#00FA9A", "#808000", "#2E8B57", "#FF0000", "#FF4500", "#FF8C00",
"#D2691E", "#FF7F50", "#DC143C", "#E9967A", "#FF1493", "#B22222", "#FF69B4",
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
"#F37873", "#F27289", "#E06794", "#B66DA4", "#B376B2", "#AD8244", "#FF29DD" );

function head() {
			global $theColor;
			echo "\n<!-- head() -->\n";
			echo "
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='theme-color' content='#121212'>
		<link rel='icon' href='/styles/icon.svg' type='image/svg+xml'>
		<link rel='stylesheet' type='text/css' href='/styles/app.css?v=" . filemtime(__DIR__ . '/styles/app.css') . "'>
		<style>:root {--the-color:" . $theColor . ";} .theColor {color:var(--the-color);} .theBGcolor {color:#222222;background-color:var(--the-color);}</style>";
};

function yell() {
	global $yellData;
	echo "<span id='yell'>" . $yellData . "</span>";
};

function console() {
	// echo "<form id'console'><input submit shit></input></form>"
};

function navList() {
	echo "\n<!-- navList() -->\n";
	$slash    = "<li class='text-the-color select-none'>/</li>\n";
	$navLinks = array(
		"/" => "Home",
		"/forums/" => "Forums",
		"https://steamcommunity.com/groups/Almost_There" => "Steam",
		"https://github.com/Almost-There/almostThere" => "GitHub"
	);
	$here  = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
	$items = array();
	foreach ($navLinks as $k => $v) {
		$ext    = strpos($k, 'http') === 0 ? " target='_blank' rel='noopener'" : "";
		$active = ($k === '/' && ($here === '/' || $here === '/index.php')) ? "text-the-color font-medium" : "hover:text-the-color";
		$items[] = "<li><a href='$k'$ext class='px-3 py-2 transition-colors $active'>$v</a></li>\n";
	}
	echo implode($slash, $items);
	echo "\n<!-- /navList() -->\n";
};

function preBody() {
			echo "\n<!-- preBody() -->\n";
			echo "<div class='bg-background text-foreground min-h-screen flex flex-col'>
<header class='relative'>
	<div class='h-48 flex items-center px-6 relative overflow-hidden' style='background-color: var(--the-color)'>
		<div class='floating-bg' id='floatingBg' aria-hidden='true'></div>
		<div class='z-10 relative'>
			<a href='/' class='block'>
				<h1 class='text-6xl sm:text-7xl lg:text-8xl font-rubik font-bold tracking-wide site-logo'>Almost There</h1>
			</a>
			<p class='text-sm mt-2 font-medium' style='color:#222222;'>";
		include ("db/wordpig.php");
	echo "</p>
		</div>
	</div>
</header>
<nav class='neo-navbar h-12 flex items-center px-4'>
	<ul class='flex items-center space-x-1'>";
	navList();
	echo "</ul>
</nav>";
	echo "<main id='allOfTheThings' class='container mx-auto py-6 px-4 flex-1 w-full max-w-6xl'>";
	echo "\n<!-- /preBody() -->\n";
};

/////////////////////////////////////////////////
/* This is where all of the page magic happens */
/////////////////////////////////////////////////

function postBody() {
	echo "\n<!-- postBody() -->\n";
	echo "</main>";
	/* #allOfTheThings */
	echo "
<footer class='h-12 w-full mt-8' style='background-color: var(--the-color)'>
	<div class='h-full w-full bg-background/80 flex items-center justify-between px-4'>
		<div class='text-sm text-muted-foreground'>&copy; " . date('Y') . " Almost There</div>
		<div class='flex space-x-4 text-muted-foreground'>
			<a href='https://github.com/Almost-There/almostThere' target='_blank' rel='noopener' class='hover:text-foreground transition-colors' aria-label='GitHub'>
				<svg width='20' height='20' viewBox='0 0 16 16' fill='currentColor' aria-hidden='true'><path d='M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z'/></svg>
			</a>
			<a href='https://steamcommunity.com/groups/Almost_There' target='_blank' rel='noopener' class='hover:text-foreground transition-colors' aria-label='Steam group'>
				<svg width='20' height='20' viewBox='0 0 16 16' fill='currentColor' aria-hidden='true'><path d='M7.9 0C4 0 .8 3 .5 6.8l4.3 1.8a2.2 2.2 0 0 1 1.3-.4l1.9-2.8v-.1a2.9 2.9 0 1 1 2.9 2.9h-.1l-2.7 2a2.3 2.3 0 0 1-4.5.5L.4 9.4A8 8 0 1 0 7.9 0Zm-2.9 12-1-.4a1.7 1.7 0 0 0 .9.9 1.8 1.8 0 0 0 2.3-1 1.7 1.7 0 0 0 0-1.3 1.7 1.7 0 0 0-1-1 1.8 1.8 0 0 0-1.2 0l1 .4a1.3 1.3 0 0 1-1 2.4Zm5.9-4.3a1.9 1.9 0 1 1 0-3.9 1.9 1.9 0 0 1 0 3.9Zm0-3.3a1.4 1.4 0 1 0 0 2.9 1.4 1.4 0 0 0 0-2.9Z'/></svg>
			</a>
		</div>
	</div>
</footer>
</div>
<script>
// The drifting squares behind the header: one per 100px of width, 20-100px,
// 7-15s each. Rise distance and peak opacity come from the stylesheet's
// --float-rise and each square's --float-peak.
(function () {
	var bg = document.getElementById('floatingBg');
	if (!bg || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
	var n = Math.max(4, Math.round(window.innerWidth / 100));
	for (var i = 0; i < n; i++) {
		var s = document.createElement('div'), size = 20 + Math.random() * 80;
		s.className = 'floating-element absolute animate-float-up';
		s.style.width = s.style.height = size + 'px';
		s.style.left = (Math.random() * 100) + '%';
		s.style.bottom = (-size) + 'px';
		s.style.animationDuration = (7 + Math.random() * 8) + 's';
		s.style.animationDelay = (-Math.random() * 15) + 's';
		s.style.setProperty('--float-peak', (0.25 + Math.random() * 0.5).toFixed(2));
		bg.appendChild(s);
	}
})();
</script>";
	echo "\n<!-- /postBody() -->\n";
};
// A whole page: document shell, then the site chrome around the caller's content.
function openPage($title) {
	echo "<!DOCTYPE html>\n<html lang='en' class='dark'>\n<head>";
	head();
	echo "<title>Almost There - " . $title . "</title>\n</head>\n<body>";
	preBody();
};

function closePage() {
	postBody();
	echo "</body>\n</html>";
};

// rebuild colorpicker plugin
?>