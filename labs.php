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

<center style='margin-top:40px;'><a style='font-size:200px;display:box;' class='theColor icn icon-lab'></a><br /><p class='write'>Soon</p></center>

<? postBody(); ?>
</body>
</html>