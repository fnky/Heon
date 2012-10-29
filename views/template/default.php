<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title><?=(isset($this->title)) ? $this->__CONFIG['site']['name'].': '.$this->title : $this->__CONFIG['site']['name']; ?></title>
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/assets/css/default.css" type="text/css">
</head>
<body>

	<header class="clearfix">
		<div class="container-fluid">
			<a href="/" class="logo pull-left">Heon</a>

			<ul class="navigation pull-right">
			<?php Page::yield(null, function($path, $name) { ?>
				<li><a <?=Utils::listen($path)?> href="<?=$path?>"><?=$name?></a></li>
			<?php }); ?>
				<li><a href="https://github.com/Humanoidism/Heon" target="_blank">Github</a></li>
			</ul>
		</div>
	</header>

	<div class="main container-fluid">
		<?php $this->yield(); ?>
	</div>

</body>
</html>