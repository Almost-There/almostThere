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

<div class='fl' style='padding:0px 15px;width:630px;height:405px;' >
	<iframe width="630" height="405" src="//www.youtube.com/embed/<? 
	$yts = array(
	"OKxaPkIx4WY", /* Oxygen - Moguai feat. Fiora */
	"d1wGFgoocKk", /* Schoolboy - Project No-Autotune */
	"v6_qfgHak0Q", /* Hellberg, Teqq & Taylr Renee - Air (Monstercat Remix) */
	"n9nntf5_JXc", /* MSD - I Feel You (Bluescreens Remix) */
	"uxelXPg961M", /* Mastodon - Divinations */
	"FaJytyOISmE", /* Pasafire - Rubber Bands */
	"VuwwvokPaQ", /* The Airplane Boys - Beau Monde */
	"3LqsWSvnjGs", /* Deadmau5 - asdfghjkl */
	"Z0NefmRM81Y", /* Sunchase feat. Yana Kay - Remember Me */
	"Q1KAjQRdTUE");/* Fatboy Slim - Right Here Right Now (Trumpdisco Remix)*/
	$rYt = rand(0,count($yts)-1);
	$yt= $yts[$rYt];
	echo $yt;
	?>?autoplay=0&theme=dark&color=white" allowfullscreen></iframe>
</div>
<div class='cf fl'>
	<h3>ToDo list!</h3>
	<ul style='font-size:10px;'>
		<li>Interger-centric squares get a cookie each load. The cookie gets loaded and compared with the new value.<br />&nbsp;&nbsp;&nbsp;If the new value is different  show a new notification with the difference between intergers</li>
		<li>Store this data about users (serverside)<br />&nbsp;&nbsp;&nbsp;[location:country,location:place,timeOfRegister,birthdate,avatar,rank,points,color,facebook,steam,steamStatus,twitter,IP,device,browser,secretsFound]</li>
		<li>verify this data every load then every15 minutes per session<br />&nbsp;&nbsp;&nbsp;[location:country,location:place,rank,device,browser,IP,steamStatus]</li>
		<li>collect sound files, figure out how to JS them to hovering on shit by applying classes, add that to toggle menu</li>
		<li>make "open settings menu, change to close settings menu when its open'</li>
		<li>use user's preffered color to put behind thier avatars for semi transparent accented avatars are possible</li>
		<li>store in html5 offline storage webfonts required, provide fallback for nonhtml5 shit</li>
		<li>make mobile transform function</li>
		<li>store this data about users (clientside) [isMobile,isFancy,color]</li>
		<li>Store this data as it changes in a log file</li>
		<li>Make class file for simple functions (eg: calculate age from birthdate )</li>
		<li>verify this data every page load [points]
		<li>Make function to re-color favicon, setup favicon</li>
		<li>get magpie working with feed2js</li>
		<br />
		<li><del>fix the square function on import.php so squares showup on this shit</del></li>
		<li><del>program more javascript to type out slogan letters</del></li>
		<li><del>program horizontal separator for settings menu</del></li>
		<li><del>Activate fridge links, continue work on fridge</del></li>
		<li><del>Set a fucking margin on this page wtf</del></li>
		<li><del>get more icons, fix color picker icons</del></li>
		<li><del>re-add slogans, add to toggle menu</del></li>
		<li><del>make CSS toggle switch</del></li>
	</ul>
</div>

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
<br /><br /><br /><br /><br /><br /><br /><br />
<? displaySource(); ?>

<? postBody(); ?>
</body>
</html>