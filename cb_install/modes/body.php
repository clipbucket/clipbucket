<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ClipBucket v<?php echo VERSION?> <?php echo STATE?> Installer
</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Cabin:regular,bold'
	rel='stylesheet' type='text/css'>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="functions.js"></script>
</head>
<body>
	<div id="head">
		<span id="logo"><span style="color: #09c">ClipBucket</span> Installer
			v<?php echo VERSION?> <?php echo STATE?> </span>
	</div>

	<?php if(!$upgrade):?>
	<div id="header" class="br5px">
		<ul class="headstatus">
			<li <?php echo selected('agreement')?>>Agreement</li>
			<li <?php echo selected('precheck')?>>Pre Check</li>
			<li <?php echo selected('permission')?>>Permissions</li>
			<li <?php echo selected('database')?>>Database</li>
			<li <?php echo selected('dataimport')?>>Data import</li>
			<li <?php echo selected('adminsettings')?>>Admin Settings</li>
			<li <?php echo selected('sitesettings')?>>Site Settings</li>
			<li <?php echo selected('register')?>>Register</li>
			<li <?php echo selected('finish')?>>Finish</li>
		</ul>
	</div>
	<?php else: ?>
	<div id="header" class="br5px">
		<ul class="headstatus">
			<li <?php echo selected('upgrade')?>>Upgrade</li>
			<li <?php echo selected('permission')?>>Permissions</li>
			<li <?php echo selected('dataimport')?>>Data import</li>
			<li <?php echo selected('finish_upgrade')?>>Finish Upgrade</li>
		</ul>
	</div>
	<?php endif; ?>
	<div id="container" class="br5px">
		<?php include($mode.'.php'); ?>
	</div>

	<div align="center" style="padding-top: 10px; color: #999">
		ClipBucket
		<?php echo VERSION?>
		is an effort of Arslan Hassan, Fawaz Tahir and some great supporters.<br />
		&copy; ClipBucket 2007 -
		<?php echo date("Y",time())?>
		| Code written by Arslan &amp; his team
	</div>

</body>
</html>
