<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<?php if (isset($scripts)) { foreach($scipts as $script) { ?>
		<script src="/scripts/$script"></script>
	<?php }} ?>
</head>
<body style="margin:0 0 0 0; font-family: 'Josefin Slab', serif;">
<!-- <body style="margin:0 0 0 0; font-family: 'Lato', sans-serif;"> -->
	<div id="header" style='width:100%; height:auto; background:white; border-bottom:7px solid #846E5D'>
		<div id="slogan" style='font-size:250%; color:#846E5D;'>ELO ~Evan Louie Online~</div>
	</div>
