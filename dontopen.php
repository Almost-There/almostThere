 <!DOCTYPE html>
<html>
<head>
<style>
* {margin:0;border:0;padding:0;}
div {height:20px;width:20px;background-color:#000000;float:left;}
div:nth-child(even) {animation:blink 0.4s infinite; -webkit-animation:blink 0.4s infinite;} @keyframes blink { from {opacity:1;} to {opacity:0;} } @-webkit-keyframes blink { from {opacity:1;} to {opacity:0;} } };
div:nth-child(odd) {animation:blink 0.4s infinite; -webkit-animation:blink 0.4s infinite;} @keyframes blink { from {opacity:0;} to {opacity:1;} } @-webkit-keyframes blink { from {opacity:0.1;} to {opacity:1;} } };
</style>
</head>
<body>
<?php
for ($x=0; $x<=1000; $x++)
   {
   echo "<div>&nbsp;</div>";
   }
?>  
</body>
</html>