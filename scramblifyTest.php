 <?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?> 

<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>AlmostChan Beta</title>
</head>
<body>
<? preBody(); ?>
<div>
<?
$qs = $_SERVER['QUERY_STRING'];
echo "
<div id='sqField' class='nudge'>
	<div class='sq theBGcolor'>
		<div class='sqTitle'><a class='icn icon-quotes-left'>&nbsp;</a>Given String<a class='sqSettings icn icon-settings'></a></div>
		<div class='sqBody'>
			<span class='nudge'>" . $qs . "</span>
		</div>
	</div>
</div><br />";
function takeDrugs() {
global $qs;
$data = $qs;
echo "<table style='margin-top:10px;'><tr><th class='theBGcolor'>Encryption Method</th><th class='theBGcolor'>String Length</th><th class='theBGcolor'>Output String</th></tr>";

echo "<tr><td>none</td><td>" . strlen($qs) . "</td><td>" . $qs . "</td></tr>";

foreach (hash_algos() as $v) {
        $r = hash($v, $data, false);
        printf("<tr><td>%-12s</td><td>%3d</td><td>%s</td></tr>", $v, strlen($r), $r);
};

echo "</table>";

};
takeDrugs(); ?>
</div>
<? postBody(); ?>
</body>
</html>