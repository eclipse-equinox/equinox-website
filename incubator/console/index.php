<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Console supportability";
	$pageKeywords	= "equinox, osgi, framework, console, incubator, gogo, RFC 147";
	
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

<p class=bar>Mission Statement</p>
<p>This incubator project aims at providing supportability features for the Equinox console.
 It is part of the initiative to separate the console from the Framework and use the Gogo shell 
 as a console in Equinox.
 </p>
 <p>The Apache Felix Gogo provides a reference implementation of RFC 147 
 specification for Command line interface. The incubator project builds on top of the Gogo shell
 to provide additional functionality. It contains the well known Equinox commands, migrated to
 the RFC 147 commands standard, and an adapter for the legacy Equinox-type commands. It provides
 telnet access to the shell. Adding ssh access to the shell is an ongoing task. It is also planned
 to provide command completion functionality.
</p>

<p class=bar>Documentation</p>
<p>Here is some <a href="documentation.php">documentation</a> to get you started.
</p>

<p class=bar>Working With the Server-side Incubator</p>
<p>The Server-side incubator uses the main <a href="../resources.php">incubator
    resources</a> with
  the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td ><strong>CVS</strong></td>
    <td colspan="2">See the projects in the "console" folder of the normal Equinox Incubator CVS repository.
  </tr>
</table>

<p class=bar>Active investigators</p>
<ul>
<li>Lazar Kirchev (SAP)</li>
</ul>
<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
