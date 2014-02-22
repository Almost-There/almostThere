 <?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>

<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Welcome!</title>
</head>
<body>
<? preBody(); ?>
	<div style='width:360px;height:180px;margin:10px;background-color:#323232;color:#FFFFFF;'>
		<h2 class='nudge'>Hello Anonymous!</h2>
		<p class='nudge'>This will be the new user landing page, where one may tour the site, as well as create an account with us,<br />
		These features have not been built yet.</p><br />
		<p class='nudge'><a href='/firstTime.php'>We are looking forward to having you join us!</p><br />
		<a style='color:#FFFFFF;' class='nudge' target='_blank' href='https://docs.google.com/forms/d/1tIpOCsndOkGLXeFpaXmcS2pUGcIfaHOKyWZ29ukINxw/viewform'>Join Almost-There's Testing Team</a>
	</div>
<?
/* echo "<div class='ma'>";
echo "<h1>Welcome user to <span class='theColor'>Almost-There!</span> The coolest website on the internet!</h1>";
echo "<h2>First we need your <span class='theColor'>name</span></h2>
<div>
	<input type='text' >
</div>
";
echo "<h2>If you don't like <span class='theColor'>This Color</span> you may choose another color from the settings menu...</h2>";
	colorForm();
echo "<h5>- + - Some other information - + -<br /><br /> the name you save isn't perminant and will only serve as your temporary username testing on this site</h5>";
echo "</div>";
*/
?>


<? postBody(); ?>
</body>
</html>
