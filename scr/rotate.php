<?php
$folder = '';

$exts = 'jpg jpeg png gif';

$files = array(); $i = -1; 
if ('' == $folder) $folder = './';

$handle = opendir($folder);
$exts = explode(' ', $exts);
while (false !== ($file = readdir($handle))) {
foreach($exts as $ext) { 
if (preg_match('/\.'.$ext.'$/i', $file, $test)) { 
$files[] = $file; 
++$i;
}
}
}
closedir($handle);
mt_srand((double)microtime()*1000000);
$rand = mt_rand(0, $i);

header('Location: '.$folder.$files[$rand]); 
?>