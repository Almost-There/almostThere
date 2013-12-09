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