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

<div class='fl youTube cf' >
	<iframe src="//www.youtube.com/embed/<? 
	$yts = array(
	"OKxaPkIx4WY", 		/* Oxygen - Moguai feat. Fiora */
	"d1wGFgoocKk",		/* Schoolboy - Project No-Autotune */
	"v6_qfgHak0Q", 		/* Hellberg, Teqq & Taylr Renee - Air (Monstercat Remix) */
	"n9nntf5_JXc", 			/* MSD - I Feel You (Bluescreens Remix) */
	"lG5aSZBAuPs",		/* XXYYXX - About You */
	"2qN5ewi44N8",		/* Motionless in White - AMERICA */
	"uxelXPg961M", 		/* Mastodon - Divinations */
	"FaJytyOISmE", 		/* Pasafire - Rubber Bands */
	"k8gpHUIZaVQ",		/* Boreta - Honey Heart */
	"8wCgxkQj_Qo", 		/* Pretty Lights - I Know The Truth */
	"f9EM8T5K6d8",		/* Modstep - Another Day (Xcore Remix) */
	"ShU3_-Y6SH0",		/* Celldweller - Goodbye 2012 Revision */
	"8mYd2X_9rrs",		/* Pendulum - Hold your Colour */
	"VuwwvokPaQ", 		/* The Airplane Boys - Beau Monde */
	"3LqsWSvnjGs", 		/* Deadmau5 - asdfghjkl */
	"Z0NefmRM81Y", 	/* Sunchase feat. Yana Kay - Remember Me */
	"Q1KAjQRdTUE");	/* Fatboy Slim - Right Here Right Now (Trumpdisco Remix) */
	$rYt = rand(0,count($yts)-1);
	$yt= $yts[$rYt];
	echo $yt;
	?>?autoplay=0&amp;theme=dark&amp;color=white" allowfullscreen></iframe>
</div><div style="width:100%;display:block;">
<div style='height:200px;display:block;' class='cf'>
<?
	squares( $squareTitle='Forum Activity'		);
	squares( $squareTitle='Steam Activity'		);
	squares( $squareTitle='Recent Changes'		);
	squares( $squareTitle='New Users'			);
	squares( $squareTitle='Recent Logins'		); 
	squares( $squareTitle='Currently Online'	);
	squares( $squareTitle='Global Settings'	); 
?>
</div>

<? postBody(); ?>
</body>
</html>