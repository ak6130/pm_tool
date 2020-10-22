<!DOCTYPE html>
<html lang="de">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link rel="preconnect" href="https://app.snipcart.com">
	<link rel="preconnect" href="https://cdn.snipcart.com">
	<link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.23/default/snipcart.css" />
	<link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body class='has-sidebar'>

	<!-- top navigation -->
	<ul class='topnav'><?php

		// top navigation consists of homepage and its visible children
		$homepage = $pages->get('/');
		$children = $homepage->children();

		// make 'home' the first item in the navigation
		$children->prepend($homepage);

	?></ul>

	<div id='main'>