<?php if(!file_exists("/var/www/almost-there.org/public_html/import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include '../import.php'; } ?>

<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - ColorPicker</title>
</head>
<body>
<? preBody(); ?>
<div id='sqField' class='nudge'>
    
	<!-- Color Picker Square -->
	<div class='sqDub theBGcolor'>
		<div class='sqTitle'>Color Picker<a href='' class='sqAltButton'>#</a></div>
		<div class='sqContent'>
			<? colorForm(); ?>
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Color Picker Square -->

	<!-- Number of Colors Square -->
		<div class='sq theBGcolor'>
			<div class='sqTitle'>Colors Available<a href='' class='sqAltButton'>#</a></div>
			<div class='sqContent'>
				<span class='nudge writeDark'>There are currently</span><br />
				<span class='nudge'style='color:#222222;font-size:60px;margin:30px;'><? colorsAvailable(); ?></span><br />
				<span class='nudge writeDark'>colors available</span>
			</div>
			<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
	<!-- Number of Colors Square -->
	
</div>
<? postBody(); ?>
</body>
</html>