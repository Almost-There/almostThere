<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Login</title>
</head>
<body>
<? preBody(); ?>
	<div id='sqField' class='nudge'>
	<!-- Index Square -->
	<div class='sqDub  theBGcolor'>
		<div class='sqTitle'><a class='icn icon-lock2'>&nbsp;</a>Login<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<div class='nudge' style='float:left;color:#222222;'>
				<span class='fl'><a class='icn icon-lock2 fl' style='color:#222222;font-size:100px;display:block;'></a>We currently don't have the ability<br />to log users in at this time.<br /><br />Please check back soon.<br /><br /><a style='color:#222222;' href='index.php'>Click here to return home</a></span>
			</div>
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
	</div>
</div>
</div>

<? postBody(); ?>
</body>
</html>