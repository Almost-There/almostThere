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
$arr = array(AT, b, wg, pol, soc, x, frg, epic, art, tv, film, mp3, pic, mc, cs, steam, vg, mj, drugs, trip, beer);
foreach ($arr as &$value) {
    echo "<a href='chanbeta.php?" . $value . "'><span class='theColor'>" . $value . " </span></a><span> / </span>";
}
$qs = $_SERVER['QUERY_STRING'];
$includer = "/var/www/almost-there.org/public_html/new/chan/" . $qs . "/index.html";

echo $includer;

include $includer;
?>

</div>
<? postBody(); ?>
</body>
</html>