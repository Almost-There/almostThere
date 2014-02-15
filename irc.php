 <?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?> 

<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - IRC Chat</title>
</head>
<body>
<? preBody(); ?>
<div>
<iframe src="https://kiwiirc.com/client/irc.gamesurge.net/?nick=AT-Web_|?&theme=cli#almostthere" style="border:0; width:100%; height:450px;"></iframe>
</div>
<? postBody(); ?>
</body>
</html>