<?php if(!file_exists("import.php")) { die("<meta http-equiv='refresh' content='10' ><p style='font-family:Tahoma, Geneva, sans-serif;'><span style='color:red;'>Fatal Error</span><br />import.php was not found.<br />Almost-There Cannot be Loaded<br /></p>"); } else { include 'import.php'; }; ?>

<!DOCTYPE html>
<html lang='en' class='dark'>
<head>
<? head(); ?>
<title>Almost There - Home</title>
</head>
<body>
<? preBody(); ?>
<div class='grid grid-cols-1 md:grid-cols-2 gap-6'>
	<article class='square'>
		<div class='square-title'><span class='truncate'>What is Almost There</span></div>
		<div class='square-content space-y-3'>
			<p>Soon to be your favourite website: a collective effort by a group of gamers to enjoy games, share ideas, and create awesome things.</p>
			<p class='text-sm'><a class='text-the-color hover:text-foreground transition-colors' href='/firstTime.php'>Click here if you just landed here &rarr;</a></p>
		</div>
	</article>
	<article class='square'>
		<div class='square-title'><span class='truncate'>Website Updates</span></div>
		<div class='square-content'>
			<ul class='space-y-1 text-sm'>
				<li class='flex flex-wrap justify-between' style='column-gap:1rem'><span class='text-muted-foreground'>Version Number</span><span>0.2.8 [Pre-Alpha] [Orange]</span></li>
				<li class='flex flex-wrap justify-between' style='column-gap:1rem'><span class='text-muted-foreground'>Last Update</span><span>Friday Mar 7th 1:02 AM EST</span></li>
			</ul>
			<p class='text-sm mt-3'><a class='text-the-color hover:text-foreground transition-colors' target='_blank' rel='noopener' href='https://docs.google.com/forms/d/1tIpOCsndOkGLXeFpaXmcS2pUGcIfaHOKyWZ29ukINxw/viewform'>Join Almost There's Testing Team &rarr;</a></p>
		</div>
	</article>
</div>
<? postBody(); ?>
</body>
</html>