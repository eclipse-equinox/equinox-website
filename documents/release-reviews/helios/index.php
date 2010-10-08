<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle = "Equinox Project Helios review material";
	$pageKeywords = "equinox, osgi, framework, runtime, resources";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<p>
Release slides: <a href="Equinox Project 3.6Release Review.pdf">PDF</a>,
<a href="Equinox Project 3.6Release Review.ppt">PPT</a>
</p>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
