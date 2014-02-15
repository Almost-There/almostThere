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
<a style='width:200px;height:200px;' class='theBGcolor fl' href='/squares.php'><img class='theBGcolor' src='/img/home.png' alt='Click Here' /></a>
<? postBody(); ?>
</body>
</html>