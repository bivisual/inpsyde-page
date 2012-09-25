<?php
header( 'Content-Description: +++ Wenn du diese Mitteilung liest und das Entwickeln mit WordPress liebst, dann nutze den Kontakt zu uns. Melde dich und gib uns weitere Informationen zu dir - wir suchen immer interessierte und fähige Leute, die mit Liebe und Hingabe in einer Familie arbeiten wollen. +++' );
require_once( 'functions.php'); ?> 

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!--
	+----------------+
	¦                ¦
	¦   inpsyde.com  ¦
	¦                ¦
	+----------------+
	Welcome to our Source ;)
	
	If you want to see the source on repo and you will give us feedback, check out:
	https://github.com/inpsyde/
	-->
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php get_var( $title ); ?></title>
		<meta name="description" content="Die Inpsyde GmbH ist Beratung und Umsetzung auf höchstem Niveau - die WordPress Agentur. Wir schaffen Lösungen im Sinne Ihrer Ziele, ob mit oder ohne WordPress.">
		<meta name="author" content="Inpsyde GmbH">
		
		<meta property='og:locale' content='de_de'>
		<meta property='og:title' content='<?php get_var( $title ); ?>'>
		<meta property='og:description' content='Die Inpsyde GmbH ist Beratung und Umsetzung auf höchstem Niveau - die WordPress Agentur. Wir schaffen Lösungen im Sinne Ihrer Ziele, ob mit oder ohne WordPress.'>
		<meta property='og:url' content='http://inpsyde.com/'>
		<meta property='og:site_name' content='Inpsyde GmbH'>
		<meta property='og:type' content='website'>
		<meta property='og:image' content='https://lh3.googleusercontent.com/-Q2uk85RFukg/AAAAAAAAAAI/AAAAAAAAABI/GaHHZ4xBM-E/s250-c-k/photo.jpg'>
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="author" href="mailto:info@inpsyde.com" title="send eMail to the company">
		<link rel="DCTERMS.license" href="http://creativecommons.org/licenses/by-sa/3.0/">
		
		<link href="../style/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css" />
		<link href="../style/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
		<!--[if IE]>
			<link href="../style/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
			<script src="../js/ie.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="../js/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<a href="#main" class="none">Zum Inhalt springen</a>
		<h1 class="hidden">Portfolio der Inpsyde GmbH</h1>
		
		<header id="head">
			<nav role="navigation">
				<h1 class="hidden">Die Navigation</h1>
				<ul id="nav">
					<li><a href="#main" title="Wir schaffen L&ouml;sungen">Startseite</a></li>
					<li><a href="#about" title="Wer wir sind">&Uuml;ber uns</a></li>
					<li><a href="#services" title="Ein kleiner &Uuml;berblick unsere Leistungen">Leistungen</a></li>
					<li><a href="#customer" title="Eine kleine Auswahl unserer Kunden">Kunden</a></li>
					<li><a href="#contact" title="Rufen sie uns an oder schreiben sie">Kontakt</a></li>
					<li><a href="#projects" title="Projekte sind ein Teil unserer Philosophie">Projekte</a></li>
				</ul>
			</nav>
			<a href="/en" id="language_switch"><img src="/images/lang-en.gif" alt="switch to english" title="switch to english"></a>
		</header>
		