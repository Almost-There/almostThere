 <?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>

<!DOCTYPE html>
<html lang='en' class='dark'>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Welcome!</title>
</head>
<body>
<? preBody(); ?>
	<article class='square max-w-md'>
		<div class='square-title'><span class='truncate'>Hello Anonymous!</span></div>
		<div class='square-content space-y-3'>
			<p>This will be the new user landing page, where one may tour the site, as well as create an account with us.</p>
			<p class='text-sm text-muted-foreground'>These features have not been built yet.</p>
			<p class='text-sm'><a class='text-the-color hover:text-foreground transition-colors' target='_blank' rel='noopener' href='https://docs.google.com/forms/d/1tIpOCsndOkGLXeFpaXmcS2pUGcIfaHOKyWZ29ukINxw/viewform'>Join Almost There's Testing Team &rarr;</a></p>
		</div>
	</article>
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
