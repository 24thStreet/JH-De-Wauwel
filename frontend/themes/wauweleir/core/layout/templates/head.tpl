<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="{$LANGUAGE}" class="ie6"> <![endif]-->
<!--[if IE 7 ]> <html lang="{$LANGUAGE}" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="{$LANGUAGE}" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="{$LANGUAGE}" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{$LANGUAGE}"> <!--<![endif]-->
<head>
	{* Meta *}
	<meta charset="utf-8" />
	<meta name="generator" content="Fork CMS" />
	{$meta}
	{$metaCustom}

	<title>{$pageTitle}</title>

	{* Favicon and Apple touch icon *}
	<link rel="shortcut icon" href="{$THEME_URL}/favicon.ico" />
	<link rel="apple-touch-icon" href="{$THEME_URL}/apple-touch-icon.png" />

	{* Windows 8 tile *}
	<meta name="application-name" content="{$siteTitle}"/>
	<meta name="msapplication-TileColor" content="#3380aa"/>
	<meta name="msapplication-TileImage" content="{$THEME_URL}/tile.png"/>

	{* Stylesheets *}
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,900italic,900,800italic,800' rel='stylesheet' type='text/css'>
	{iteration:cssFiles}
		<link rel="stylesheet" href="{$cssFiles.file}" />
	{/iteration:cssFiles}

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	{* Site wide HTML *}
	{$siteHTMLHeader}
</head>