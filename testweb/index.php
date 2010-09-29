<?php require_once($_SERVER['DOCUMENT_ROOT'] . "http://eclipse.org/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "http://eclipse.org/eclipse.org-common/system/nav.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "http://eclipse.org/eclipse.org-common/system/menu.class.php"); $App=new App(); $Nav=new Nav(); $Menu=new Menu();	include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle="Equinox";
	$pageKeywords="equinox, osgi, framework, runtime";
	$pageAuthor="Equinox Committers";

	$html = file_get_contents( '_index.html' );

	$Nav = null; // delete right side navigation

	$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-big-header.css"/>' );
	$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-posts.css"/>' );

	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
