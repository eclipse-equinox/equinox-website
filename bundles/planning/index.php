<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Bundles - Planning";
	$pageKeywords	= "equinox, osgi, framework, runtime, bundles, planning";
	
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

<table BORDER=0 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td WIDTH="2%" ALIGN=RIGHT VALIGN=TOP><img SRC="../../images/Adarrow.gif" BORDER=0 height=16 width=16></td>
    <td><b>3.2 Release</b>
        <ul>
          <li><a href="3.2/plan.php">General 3.2 Equinox Bundles Plan</a></li>
          <li>Check out the <a href="../../documents">documents</a> page for links
            to some of the major items that we are working on.</li>
        </ul>
        <p>&nbsp;</p>
    </td>
  </tr>
</table>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/bundles/component-links.html";
	include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
