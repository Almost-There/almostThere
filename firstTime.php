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

<?
echo "<div class='ma'>";
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
?>


<? postBody(); ?>
</body>
</html>
