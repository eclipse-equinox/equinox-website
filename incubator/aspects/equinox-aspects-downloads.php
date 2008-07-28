<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects - Downloads";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, aspects";
	
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

<p class=bar>Development Builds</p>

<p>
<table width="100%" border="0">
<tr>

	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807281655-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200807281655-archive.zip</a>
    </td>

	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip</a>
    </td>

</tr>
</table>
</p>

<p class=bar>Releases</p>

<p>
<table width="100%" border="0">
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%">Take a look at the <a href="http://wiki.eclipse.org/Equinox_Aspects_Plan">Equinox Aspects Release Plan Wiki</a>.
    </td>
</tr>
</table>
</p>

<p class=bar>Demos</p>

<p>
<a href="downloads/equinox-aspects-hello-world_1.1.0.zip">Hello world! demo</a><br/>
This minimal demo shows how to use Equinox Aspects. It is also used for the <a href="equinox-aspects-quick-start.php">quick-start guide</a>.
</p>

<p class=bar>Archived Builds</p>

</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include "component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
