<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Server-side Quickstart";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server, servlet, http";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>	
<div id="midcolumn">
<h1><?= $pageTitle ?></h1>

	<h3>Overview</h3>
	<p>Equinox can be used on the server to serve up static content and to run servlets or JSPs.  In each of these cases you 
	need to setup an HTTP server and then configure it with the appropriate content.  There are two basic ways of running an 
	HTTP server in Equinox;</p>
	<ul>
		<li><a href="/equinox/server/http_in_equinox.php">Embed a server in Equinox</a> <b>(recommended)</b></li>
		<li><a href="/equinox/server/http_in_container.php">Embed Equinox in an existing servlet container</a></li>
	</ul>
	<p>Follow the steps for the configuration best suited to your scenario then return here to write your bundle based web application.</p>
	<p><b>Hint</b> <a href="/equinox/server/http_in_equinox.php">Embed a server in Equinox</a> is the easiest configuration to setup 
	and run. This will allow you to do all your
	development and debugging.  Only when you go to production or in special circumstances will you need to embed
	Equinox in an existing servlet container.</p>

	<h3>Writing the server application</h3>
	<p>While Equinox can be setup to run servlets and JSPs in a variety of ways, the technique for writing the applications is the same.
	Use the steps outlined in 
	<a href="http_writing_application.php">Writing a bundle-based server application</a>
	to create your application.</p>

	<h3>Running the server application</h3>
	<p>Once you have setup your server and written your application, consult the details for the appropriate server setup
	to configure and run your server.</p>

<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/documents/component-links.html";
	include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
