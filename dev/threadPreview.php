<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
//else { include 'import.php'; } ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Forum Thread Preview</title>
</head>
<body>
<? preBody(); ?>
<div id='sqField' class='nudge'>
	<div class='sq  theBGcolor'>
		<div class='sqTitle'>AT_Kenny<br /><span class='small'>Administrator</span></div>
		<div class='sqBody'>
			<img alt='AT_Kenny Avatar' src='' />
			<!-- Social Media Buttons -->
		</div>
		<div class='sqAltContent'>
			<ul>
				<li><a>Show/Hide Square</a></li>
				<li><a>Display Order</a></li>
				<li><a>Copy Info to Clipboard</a></li>
			</ul>
		</div>
	</div>
</div>
<? postBody(); ?>
</body>
</html>