<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?=$page_title ?></title>
	<style type="text/css" media="Screen"> /*\*/@import url("css/global.css");/**/ </style> 
	<!--[if lte IE 6 ]>
		<link rel="stylesheet" type="text/css" href="css/ie6bugs.css" />
		<script defer type="text/javascript" src="scripts/pngfix.js"></script>
	<![endif]-->
	<!--[if IE 7 ]> <link rel="stylesheet" type="text/css" href="css/ie7bugs.css" /> <![endif]-->
	<link rel="shortcut icon" href="/favicon.ico" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
	<script type="text/javascript">
	$(function() {
		$('#content .thumb a').lightBox(); // Select all links in object with gallery ID
		$('#content .actions a.view').lightBox(); // Select all links in object with gallery ID
	});
	</script>
</head>
<body id="<?=$body_id ?>">

<div id="page">

<div id="header">
	<h1 id="name">Scott Vandehey</h1>
	<h2 id="title">Front-End Web Developer</h2>
	<p id="contact">
		<a href="contact.php">contact</a>
	<? if ( $body_id != 'homepage' ) { ?>
	- <a href="index.php">portfolio</a></p>
	<? } else { ?>
	- <a href="resume.php">resum&eacute;</a></p>
	<? } ?>
</div> <!-- end header -->

<hr />

<div id="content">