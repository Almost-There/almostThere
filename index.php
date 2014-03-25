<?php if(!file_exists("import.php")) { die("<meta http-equiv='refresh' content='10' ><p style='font-family:Tahoma, Geneva, sans-serif;'><span style='color:red;'>Fatal Error</span><br />import.php was not found.<br />Almost-There Cannot be Loaded<br /></p>"); } else { include 'import.php'; }; ?>

<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Home</title>
</head>
<body>
<? preBody(); ?>
<div class='fullw'>
<!-- <a style='width:200px;height:200px;' class='theBGcolor fl' href='/squares.php'><img class='theBGcolor' src='/img/home.png' alt='Click Here' /></a> -->
<div style='display:flex;' class='nudge'>
	<div style='background:#222222' class='sqDub'>
		<div class='sqTitle' style='color:#FFFFFF;'><a style='color:#FFFFFF;' class='icn icon-question'>&nbsp;</a>What is Almost-There</div>
		<div class='sqBody'>
			<p class='nudge'>Soon to be your favourite website, a collective effort<br /> by a group of gamers to enjoy games, share ideas, and create awesome things.</p><br />
			<p class='nudge'><a class='icn icon-airplane'></a>&nbsp;<a href='/firstTime.php'>Click here if you just landed here</a><br />
			<a class='icn icon-key2'></a>&nbsp;<a href='login.php'>Click here to login</a></p>
		</div>
	</div>
		<!-- Index Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-home'>&nbsp;</a>Website Updates<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<ul>
				<li class='nudge'>Version Number:<span class='budge fr'>0.2.8 [Pre-Alpha] [Orange]</span></li>
				<li class='nudge'>Last Update:<span class='budge fr'>Friday Mar 7th 1:02 AM EST</span></li>
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
<? include 'squares.php?square_youtube'; ?>

</div>
</div>
<? postBody(); ?>
</body>
</html>