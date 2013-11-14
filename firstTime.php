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

<? 
echo "<div class='ma'>";
echo "<h1>Welcome user to <span class='theColor'>Almost-There!</span> The coolest website on the internet!</h1>";
echo "<h2>First we need your <span class='theColor'>name</span></h2>
<div>
	<input type='text' >
</div>
";
echo "<h2>If you don't like <span class='theColor'>This Color</span> you may choose another color from the settings menu...</h2>";
echo "<div class='center'><div id='colorPicker' class='ma cf' style='width:auto;background-color:#111111;text-align:center;'>
<a onclick='location.reload(true);'><div style='background-color:#FF8039' onclick=\"document.cookie='setColor=#FF8039\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FFA533' onclick=\"document.cookie='setColor=#FFA533\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FFC233' onclick=\"document.cookie='setColor=#FFC233\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FFE030' onclick=\"document.cookie='setColor=#FFE030\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FFF933' onclick=\"document.cookie='setColor=#FFF933\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#D7FF20' onclick=\"document.cookie='setColor=#D7FF20\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#15FF3E' onclick=\"document.cookie='setColor=#15FF3E\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#03BCFF' onclick=\"document.cookie='setColor=#03BCFF\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#00FF7F' onclick=\"document.cookie='setColor=#00FF7F\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#90EE90' onclick=\"document.cookie='setColor=#90EE90\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#3CB371' onclick=\"document.cookie='setColor=#3CB371\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#00FA9A' onclick=\"document.cookie='setColor=#00FA9A\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#808000' onclick=\"document.cookie='setColor=#808000\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#2E8B57' onclick=\"document.cookie='setColor=#2E8B57\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FF0000' onclick=\"document.cookie='setColor=#FF0000\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FF4500' onclick=\"document.cookie='setColor=#FF4500\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FF8C00' onclick=\"document.cookie='setColor=#FF8C00\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FFA500' onclick=\"document.cookie='setColor=#FFA500\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#ED2939' onclick=\"document.cookie='setColor=#ED2939\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#800000' onclick=\"document.cookie='setColor=#800000\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#A52A2A' onclick=\"document.cookie='setColor=#A52A2A\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#D2691E' onclick=\"document.cookie='setColor=#D2691E\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FF7F50' onclick=\"document.cookie='setColor=#FF7F50\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#DC143C' onclick=\"document.cookie='setColor=#DC143C\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#E9967A' onclick=\"document.cookie='setColor=#E9967A\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FF1493' onclick=\"document.cookie='setColor=#FF1493\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#B22222' onclick=\"document.cookie='setColor=#B22222\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#FF69B4' onclick=\"document.cookie='setColor=#FF69B4\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#CD5C5C' onclick=\"document.cookie='setColor=#CD5C5C\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#F08080' onclick=\"document.cookie='setColor=#F08080\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#6495ED' onclick=\"document.cookie='setColor=#6495ED\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#008B8B' onclick=\"document.cookie='setColor=#008B8B\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#483D8B' onclick=\"document.cookie='setColor=#483D8B\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#00BFFF' onclick=\"document.cookie='setColor=#00BFFF\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#1E90FF' onclick=\"document.cookie='setColor=#1E90FF\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#ADD8E6' onclick=\"document.cookie='setColor=#ADD8E6\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#20B2AA' onclick=\"document.cookie='setColor=#20B2AA\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#87CEFA' onclick=\"document.cookie='setColor=#87CEFA\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#B0C4DE' onclick=\"document.cookie='setColor=#B0C4DE\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#76608A' onclick=\"document.cookie='setColor=#76608A\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#7B68EE' onclick=\"document.cookie='setColor=#7B68EE\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#4169E1' onclick=\"document.cookie='setColor=#4169E1\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#6A5ACD' onclick=\"document.cookie='setColor=#6A5ACD\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#708090' onclick=\"document.cookie='setColor=#708090\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#4682B4' onclick=\"document.cookie='setColor=#4682B4\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#008080' onclick=\"document.cookie='setColor=#008080\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#40E0D0' onclick=\"document.cookie='setColor=#40E0D0\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a>
<a onclick='location.reload(true);'><div style='background-color:#0099CC' onclick=\"document.cookie='setColor=#0099CC\;expires=Wed, 31 Dec 2014 00:00:00 UTC;path=/;'\" alt='&#9632;'></div></a></div></div></center>";
echo "<h5>- + - Some other information - + -<br /><br /> the name you save isn't perminant and will only serve as your temporary username while on this site</h5>";
echo "</div>";
?>


<? postBody(); ?>
</body>
</html>