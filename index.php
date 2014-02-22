<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Home</title>
</head>
<body>
<? preBody(); ?>
<div class='fullw'>
<a style='width:200px;height:200px;' class='theBGcolor fl' href='/squares.php'><img class='theBGcolor' src='/img/home.png' alt='Click Here' /></a>
<div style='display:flex;justify-content:center;'>
	<div style='width:360px;height:180px;margin:10px;background-color:#323232;color:#FFFFFF;'>
		<h2 class='nudge'>What is Almost-There?</h2>
		<p class='nudge'>Soon to be your favourite website, a collective effort<br />
		by a group of gamers to enjoy games, share ideas, and create awesome things.</p><br />
		<p class='nudge'><a class='icn icon-airplane'></a>&nbsp;<a href='/firstTime.php'>Click here if you just landed here</a><br />
		<a class='icn icon-key2'></a>&nbsp;<a href='login.php'>Click here to login</a></p>
	</div>
		<!-- Index Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-home'></a>Website Updates<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<ul>
				<li class='nudge'>Version Number:<span class='budge fr'>0.127 [Pre-Alpha] [Orange]</span></li>
				<li class='nudge'>Last Update:<span class='budge fr'>Saturday Feb 22nd 10:23 AM EST</span></li>
				<li class='nudge blink'>Web Server is 12 Versions ahead of Git!</li>
				<br />
				<li><a style='color:#222222;' class='icn icon-code nudge'></a>&nbsp;<a  style='color:#222222;' target='_blank' href='https://docs.google.com/forms/d/1tIpOCsndOkGLXeFpaXmcS2pUGcIfaHOKyWZ29ukINxw/viewform'>Join Almost-There's Testing Team</a></li>
			</ul>
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
	<!-- End Index Square -->
</div>
</div>

<? postBody(); ?>
</body>
</html>