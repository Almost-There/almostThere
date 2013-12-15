<?php

if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; }


$includeurl = false;
	// If this script is being included, define the URL to this variable script (relative from the host)
$startdir = './uploads/';
	// Must be relative to this file, can't cd up either ghey....
$showthumbnails = false;
	// gen thumbnails for images
$memorylimit = false;
	// Set memory limit in MB
$showdirs = true;
	// View directories?
$forcedownloads = false;
	// type this, expressions work with this as well
$hide = array( 'dlf', 'index.php', 'Thumbs', '.htaccess', '.htpasswd');
	// comment out to disable this, must add file extention to list to view it etc.
$showtypes = array( 'jpg', 'png', 'gif', 'zip', 'txt', 'mp3' );
$displayindex = false;
$allowuploads = true;
// allowed file types to be uploaded.
$uploadtypes = array( 'zip', 'gif', 'doc', 'png' );

// If a  file gets uploaded with the same name as another file; override it?
$overwrite = false;
// Index files - The follow array contains all the index files that will be used if $displayindex (above) is set to true. Feel free to add, delete or alter these
$indexfiles = array ( 'index.html', 'index.htm', 'default.htm', 'default.html' );
			
//File Icons - If you want to add your own special file icons use  this section below. Each entry relates to the extension of the  given file, in the form <extension> => <filename>.  These files must be located within the dlf directory.
$filetypes = array (
				'png'		=> 'jpg.gif',
				'jpeg'		=> 'jpg.gif',
				'bmp' 	=> 'jpg.gif',
				'jpg' 		=> 'jpg.gif', 
				'gif' 		=> 'gif.gif',
				'zip' 		=> 'archive.png',
				'rar' 		=> 'archive.png',
				'exe' 		=> 'exe.gif',
				'setup' 	=> 'setup.gif',
				'txt' 		=> 'text.png',
				'htm' 		=> 'html.gif',
				'html' 	=> 'html.gif',
				'fla' 		=> 'fla.gif',
				'swf' 		=> 'swf.gif',
				'xls' 		=> 'xls.gif',
				'doc' 	=> 'doc.gif',
				'sig' 		=> 'sig.gif',
				'fh10'	=> 'fh10.gif',
				'pdf' 		=> 'pdf.gif',
				'psd' 		=> 'psd.gif',
				'rm' 		=> 'real.gif',
				'mpg' 	=> 'video.gif',
				'mpeg' 	=> 'video.gif',
				'mov' 	=> 'video2.gif',
				'avi' 		=> 'video.gif',
				'eps' 		=> 'eps.gif',
				'gz' 		=> 'archive.png',
				'asc' 		=> 'sig.gif',
			);

if($includeurl)
{ $includeurl = preg_replace("/^\//", "${1}", $includeurl); if(substr($includeurl, strrpos($includeurl, '/')) != '/') $includeurl.='/'; }

error_reporting(0);
if(!function_exists('imagecreatetruecolor')) $showthumbnails = false;
if($startdir) $startdir = preg_replace("/^\//", "${1}", $startdir);
$leadon = $startdir;
if($leadon=='.') $leadon = '';
if((substr($leadon, -1, 1)!='/') && $leadon!='') $leadon = $leadon . '/';
$startdir = $leadon;

// Start getting directory information
if($_GET['dir']) {
	if(substr($_GET['dir'], -1, 1)!='/') { $_GET['dir'] = strip_tags($_GET['dir']) . '/'; }
	
	$dirok = true;
	$dirnames = split('/', strip_tags($_GET['dir']));
	for($di=0; $di<sizeof($dirnames); $di++) {
		if($di<(sizeof($dirnames)-2)) { $dotdotdir = $dotdotdir . $dirnames[$di] . '/'; }
		if($dirnames[$di] == '..') { $dirok = false; }
	}
	
	if(substr($_GET['dir'], 0, 1)=='/') {$dirok = false;}
	if($dirok) {$leadon = $leadon . strip_tags($_GET['dir']);}
}

if($_GET['download'] && $forcedownloads) {
	$file = str_replace('/', '', $_GET['download']);
	$file = str_replace('..', '', $file);

	if(file_exists($includeurl . $leadon . $file)) {
		header("Content-type: application/x-download");
		header("Content-Length: ".filesize($includeurl . $leadon . $file)); 
		header('Content-Disposition: attachment; filename="'.$file.'"');
		readfile($includeurl . $leadon . $file);
		die();
	} die(); }

if($allowuploads && $_FILES['file']) {
	$upload = true;
	if(!$overwrite) { if(file_exists($leadon.$_FILES['file']['name'])) { $upload = false; } }
	
	if($uploadtypes)
	{
		if(!in_array(substr($_FILES['file']['name'], strpos($_FILES['file']['name'], '.')+1, strlen($_FILES['file']['name'])), $uploadtypes))
		{
			$upload = false;
			$uploaderror = "ERROR: You can only upload files of type ";
			$i = 1;
			foreach($uploadtypes as $k => $v)
			{
				if($i == sizeof($uploadtypes) && sizeof($uploadtypes) != 1) $uploaderror.= ' and ';
				else if($i != 1) $uploaderror.= ', ';
				$uploaderror.= '.'.strtoupper($v);
				$i++;
			}
		}
	}
	
	if($upload) {
		move_uploaded_file($_FILES['file']['tmp_name'], $includeurl.$leadon . $_FILES['file']['name']);
	}
}

$opendir = $includeurl.$leadon;
if(!$leadon) $opendir = '.';
if(!file_exists($opendir)) {
	$opendir = '.';
	$leadon = $startdir;
}

clearstatcache();
if ($handle = opendir($opendir)) {
	while (false !== ($file = readdir($handle))) { 
		//first see if this file is required in the listing
		if ($file == "." || $file == "..")  continue;
		$discard = false;
		for($hi=0;$hi<sizeof($hide);$hi++) {
			if(strpos($file, $hide[$hi])!==false) {
				$discard = true;
			}
		}
		
		if($discard) continue;
		if (@filetype($includeurl.$leadon.$file) == "dir") {
			if(!$showdirs) continue;
		
			$n++;
			if($_GET['sort']=="date") { $key = @filemtime($includeurl.$leadon.$file) . ".$n"; }
				else { $key = $n; }
					$dirs[$key] = $file . "/";
				}
		else {
			$n++;
			if($_GET['sort']=="date") { $key = @filemtime($includeurl.$leadon.$file) . ".$n"; }
			elseif($_GET['sort']=="size") { $key = @filesize($includeurl.$leadon.$file) . ".$n"; }
			else { $key = $n; }
			
			if($showtypes && !in_array(substr($file, strpos($file, '.')+1, strlen($file)), $showtypes)) unset($file);
			if($file) $files[$key] = $file;
			
			if($displayindex) {
				if(in_array(strtolower($file), $indexfiles)) {
					header("Location: $leadon$file");
					die();
				}
			}
		}
	}
	closedir($handle); 
}

//sort our files
if($_GET['sort']=="date") {
	@ksort($dirs, SORT_NUMERIC);
	@ksort($files, SORT_NUMERIC);
}
elseif($_GET['sort']=="size") {
	@natcasesort($dirs); 
	@ksort($files, SORT_NUMERIC);
}
else {
	@natcasesort($dirs); 
	@natcasesort($files);
}

//order correctly
if($_GET['order']=="desc" && $_GET['sort']!="size") {$dirs = @array_reverse($dirs);}
if($_GET['order']=="desc") {$files = @array_reverse($files);}
$dirs = @array_values($dirs); $files = @array_values($files);
?>

<? // Build HTML ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Home</title>
</head>
<body>
<? preBody(); ?>
  
  	<br />
	<div style="height:155px;" id='cf'>
		<?
			squares( $squareTitle='Directory'		);
			squares( $squareTitle='Store'		); 
			squares( $squareTitle='Uploader'		);
			squares( $squareTitle='Torrent Stats'		);
			squares( $squareTitle='Tracker Status'		);
			squares( $squareTitle='HDD Stats'		);
			squares( $squareTitle='Packager'		); 	
		?>
	</div><br />
		<table class='cf' id='fileTable'>
<tr style="display:none;"><td colspan='3' class='theBGcolor'><span style='color:#222222;' >Fridge Listing of <?php echo str_replace('\\', '', dirname(strip_tags($_SERVER['PHP_SELF']))).'/'.$leadon;?></span></td></tr>
<tr style="display:none;">
<td colspan='3'>		
		<div  class='theLinkColor' id="breadcrumbs">
	<a href="<?php echo strip_tags($_SERVER['PHP_SELF']);?>">/Fridge/</a> 
  <?php
 	 $breadcrumbs = split('/', str_replace($startdir, '', $leadon));
  	if(($bsize = sizeof($breadcrumbs))>0) {
  		$sofar = '';
  		for($bi=0;$bi<($bsize-1);$bi++) {
			$sofar = $sofar . $breadcrumbs[$bi] . '/';
			echo ' &gt; <a href="'.strip_tags($_SERVER['PHP_SELF']).'?dir='.strip_tags($sofar).'">'.$breadcrumbs[$bi].'</a></div></td></tr>';
		}
  	}
  
	$baseurl = strip_tags($_SERVER['PHP_SELF']) . '?dir='.strip_tags($_GET['dir']) . '&amp;';
	$fileurl = 'sort=name&amp;order=asc';
	$sizeurl = 'sort=size&amp;order=asc';
	$dateurl = 'sort=date&amp;order=asc';
	
	switch ($_GET['sort']) {
		case 'name': if($_GET['order']=='asc') $fileurl = 'sort=name&amp;order=desc'; break;
		case 'size': if($_GET['order']=='asc') $sizeurl = 'sort=size&amp;order=desc'; break;
		case 'date': if($_GET['order']=='asc') $dateurl = 'sort=date&amp;order=desc'; break;  
		default: $fileurl = 'sort=name&amp;order=desc'; break;}
  ?>
			<tr>
				<th class='theBGcolor'><a id="headerfile" href="<?php echo $baseurl . $fileurl;?>">File</a></th>
				<th class='theBGcolor'><a id="headersize" href="<?php echo $baseurl . $sizeurl;?>">Size</a></th>
				<th class='theBGcolor'><a class='theAntiColor' id="headermodified" href="<?php echo $baseurl . $dateurl;?>">Last Modified</a></th>
			</tr>
		<tr>
	<?php if($dirok) { ?>
	<a class='theLinkColor' href="<?php echo strip_tags($_SERVER['PHP_SELF']).'?dir='.urlencode($dotdotdir);?>" class="theLinkColor"><img src="<?php echo $includeurl; ?>dlf/dirup.png" alt="Folder" /><strong>..</strong> <em>&nbsp;</em>&nbsp;</a>
		<a href="<?php echo strip_tags($_SERVER['PHP_SELF']).'?dir='.urlencode(str_replace($startdir,'',$leadon).$dirs[$i]);?>" class="theLinkColor">
			<img src="<?php echo $includeurl; ?>dlf/folder.png" alt="<?php echo $dirs[$i];?>" />
				<strong><?php echo $dirs[$i];?></strong>
			<em>-</em> <?php echo date ("M d Y h:i:s A", filemtime($includeurl.$leadon.$dirs[$i]));?>
		</a>
	<?php	
	}
	$arsize = sizeof($files);
	for($i=0;$i<$arsize;$i++) {
		$icon = 'unknown.png';
		$ext = strtolower(substr($files[$i], strrpos($files[$i], '.')+1));
		$supportedimages = array('gif', 'png', 'jpeg', 'jpg');
		$thumb = '';
		
		if($showthumbnails && in_array($ext, $supportedimages)) {
			$thumb = '<span><img src="dlf/trans.gif" alt="'.$files[$i].'" name="thumb'.$i.'" /></span>';
			$thumb2 = ' onmouseover="o('.$i.', \''.urlencode($leadon . $files[$i]).'\');" onmouseout="f('.$i.');"';
		}
		
		if($filetypes[$ext]) { $icon = $filetypes[$ext]; }
		
		$filename = $files[$i];
		if(strlen($filename)>43) { $filename = substr($files[$i], 0, 40) . '...'; }
		
		$fileurl = $includeurl . $leadon . $files[$i];
		if($forcedownloads) { $fileurl = $_SESSION['PHP_SELF'] . '?dir=' . urlencode(str_replace($startdir,'',$leadon)) . '&download=' . urlencode($files[$i]); }

	?>
	<? //<?php echo $thumb2; ?? <img src="<?php echo $includeurl; ?? sty/icons<?php echo $icon; ?? " alt="??php echo $files[$i];??" />
		//replace ?? with end-tags to re-enable ?>
		<td class='theLinkColor' id='fileName'> <a target="_blank" href="<? echo $fileurl;?>"><?php echo $filename;?></a></td>
		<td id='fileSize'><?php echo round(filesize($includeurl.$leadon.$files[$i])/1024);?> KB</td>
		<td id='fileDate'>
			<?php echo date ("M d Y h:i:s A", filemtime($includeurl.$leadon.$files[$i]));?>
			<?php
				echo $thumb;
				echo '</td> </tr>';
			?>
		<?php
			if($class=='b') $class='w';
			else $class = 'b';	}
	?>
	</table>

	<?php
	if($allowuploads) {
		$phpallowuploads = (bool) ini_get('file_uploads');		
		$phpmaxsize = ini_get('upload_max_filesize');
		$phpmaxsize = trim($phpmaxsize);
		$last = strtolower($phpmaxsize{strlen($phpmaxsize)-1});
		switch($last) {
			case 'g': $phpmaxsize *= 1024;
			case 'm': $phpmaxsize *= 1024; }
	?>
	<div id="upload">
		<div id="uploadtitle">
			<strong>File Upload</strong> (Max Filesize: <?php echo $phpmaxsize;?>KB)
			<?php if($uploaderror) echo '<div class="upload-error">'.$uploaderror.'</div>'; ?>
		</div>
		<div id="uploadcontent">
			<?php
			if($phpallowuploads) {
			?>
			<form method="post" action="<?php echo strip_tags($_SERVER['PHP_SELF']);?>?dir=<?php echo urlencode(str_replace($startdir,'',$leadon));?>" enctype="multipart/form-data">
			<input type="file" name="file" /> <input type="submit" value="Upload" />
			</form>
			<? } else { ?> File uploads are disabled in your php.ini file. <? } ?>
		</div>
		</div>
	<?php
	}
	?>
  </div>
<? postBody(); ?>
</body>
</html>