<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Labs</title>
</head>
<body>
<? preBody(); ?>

<ul>
	<li>
		<div class='settingsIcon'><a class='icn icon-phone'>&nbsp;</a></div>
		Sounds
		<div class='settingSwitch'>ON</div>
	</li>
	<li>
		<a class='icn icon-phone'>&nbsp;</a>
		Mobile View
		<div class='settingSwitch'>ON</div>
	</li>
	<li>
		<a class='icn icon-bug'>&nbsp;</a>
		Debug Mode
		<ul>
			<li>Advanced Graphics</li>
			<li>Console Output</li>
			<li>Auto Refresh</li>
			<li>Bug Reporter</li>
		</ul>
		<div class='settingSwitch'>OFF</div>
	</li>
	<li>
		Privacy Mode
		<div class='settingSwitch'>OFF</div>
	</li>
	<li>
		Show all Squares
		<div class='settingSwitch'>OFF</div>
	</li>
	<li>
		Color Picker1 GB Ram 75GB storage 1.5TB bandwith
		<div>
			<!-- colorpicker here -->
			<div><current color></div>
			<a class='randomColors icn icon-paint-format'></a>
		</div>
	</li>
	<li>
		<p>Resize Page<br />slider thing<<br />slider pixel indicator</p>
	</li>
</ul>
<div>
<? postBody(); ?>
</body>
</html>