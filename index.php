<?php

define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/');

echo '<?xml version="1.0" encoding="utf-8"?>';

// Other comment

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<link rel="shortcut icon"
			href="<?php print BASE_URL; ?>images/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon"
			href="<?php print BASE_URL; ?>images/favicon_animated.gif"
			type="image/gif" />
		
		<meta http-equiv="Content-Language" content="de" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		
		<meta name="author" content="Michael Streb" />
		<meta name="publisher" content="Michael Streb" />
		<meta name="description"
			content="Sie ben&ouml;tigen einen Web-Anwendungs-Entwickler? Dann bin ich Ihr Ansprechpartner. Meine Kompetenzen sind objektorientiertes PHP5, MySQL, XHTML, CSS und jQuery." />
		<meta name="keywords"
			content="web anwendung entwicklung webdesign programmierung php mysql css jquery ajax michael streb" />
		
		<meta name="robots" content="index, follow" />
		<meta name="allow-search" content="yes" />
		<meta name="domain" content="www.michael-streb.de" />
		
		<meta name="google-site-verification"
			content="PbpYcj7f8ce7cosYotPcU7glj_3us_ZJdJMZn2Qo4j4" />
		
		<title>Michael Streb</title>
		
		<link rel="stylesheet" type="text/css"
			href="<?php print BASE_URL; ?>styles.css" />
		<link rel="stylesheet" type="text/css"
			href="<?php print BASE_URL; ?>jscript/jquery/plugins/jquery-lightbox/css/lightbox.css" />
		
		<script language="JavaScript" type="text/javascript"
			src="<?php print BASE_URL; ?>jscript/jquery/jquery-1.4.1.min.js"></script>
		<script language="JavaScript" type="text/javascript"
			src="<?php print BASE_URL; ?>jscript/jquery/plugins/jquery.blink.js"></script>
		<script language="JavaScript" type="text/javascript"
			src="<?php print BASE_URL; ?>jscript/jquery/plugins/jquery.loadURL.js"></script>
		<script language="JavaScript" type="text/javascript"
			src="<?php print BASE_URL; ?>jscript/jquery/plugins/jquery.animateColor.js"></script>
		<script language="JavaScript" type="text/javascript" src="<?php print BASE_URL; ?>jscript/jquery/plugins/jquery-lightbox/jquery.lightbox.js"></script>
		<script language="JavaScript" type="text/javascript" src="<?php print BASE_URL; ?>jscript/common.js"></script>
		<script language="JavaScript" type="text/javascript" src="<?php print BASE_URL; ?>jscript/json2.js"></script>
		
		<script language="JavaScript" type="text/javascript" src="<?php print BASE_URL; ?>jscript/startup.js"></script>
		<script language="JavaScript" type="text/javascript" src="<?php print BASE_URL; ?>jscript/form.js"></script>
	</head>
	<body>
	
	<div id="header-margins"><img id="header-blue-bar"
		src="images/header-blue-bar.png" title="Michael Streb"
		alt="Michael Streb" />
	
	<div id="header"><a href="http://www.michael-streb.de"
		title="Michael Streb"><img id="logo" src="images/logo2.png"
		title="Michael Streb" alt="Michael Streb" /></a>
	
	<ul id="main-menu" class="menu">
		<li><a href="home" class="intern">Home</a></li>
		<li><a href="references" class="intern">Referenzen</a></li>
		<li><a href="contact #contact-form" class="intern">Kontakt</a></li>
	</ul>
	</div>
	
	</div>
	
	<div id="main-margins">
	
	<div id="main">
	
	<div id="content"></div>
	
	</div>
	
	</div>
	
	<div id="footer-margins">
	
	<div id="footer"><a href="impress" class="intern">Impressum</a></div>
	
	</div>
	
	<div id="loader"><img src="images/loading.gif" width="48" height="48"
		title="Loading..." alt="Loading..." /></div>
	
	</body>
</html>
