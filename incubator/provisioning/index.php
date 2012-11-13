<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Provisioning";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, provisioning";
	
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
<p>
The Equinox Incubator p2 component was the original incubator for the <a href="http://www.eclipse.org/equinox/p2">Equinox p2</a> project.
This p2 incubator is now used as an area for experiments and investigation that is related
to p2 but not sufficiently mature to reside in or ship with the p2 project proper. This is
also used as an area where new committers can be added quickly if they are interested in
investigating p2-related technology but haven't earned or are not interested in commit
rights on the p2 project itself.
</p>
<p>
See the <a href="proposal.php">incubator proposal</a> 
and the <a href="overview.php">overview</a> for additional detail about the original p2 incubator work.</p>

<p>The bulk of the current information on this work area is maintained in the <a href="http://wiki.eclipse.org/Equinox_Provisioning">wiki</a>.  
There you will find documents discussing:</p>
<ul>
<li> <a href="http://wiki.eclipse.org/Equinox_Provisioning_Getting_Started">Getting started</a></li>
<li> <a href="http://wiki.eclipse.org/Equinox_Provisioning_Concepts">Provisioning concepts</a></li>
<li> <a href="http://wiki.eclipse.org/Equinox_Provisioning_Plan">The provisioning plan</a></li>
<li> <a href="http://wiki.eclipse.org/Category:Equinox">A whole host of articles on provisioning</a> in general and related to specifically to the Equinox work</li>
</ul>

<p class=bar>Working with  p2</p>
<p>The p2 team uses the main <a href="../resources.php">Equinox resources</a> with
  the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td><strong>Bugs</strong></td>
    <td colspan="2">Bugs use the p2 component, and use a variety of summary prefixes for various aspects of p2.
  </tr>

  <tr>
    <td ><strong>CVS</strong></td>
    <td colspan="2">See the projects in the <a href="http://git.eclipse.org/c/equinox/rt.equinox.incubator.git/tree/p2">p2 incubator</a>
     folder of the Equinox incubator GIT repository.
    
    </td>
  </tr>
</table>

<p class=bar>Active investigators</p>
<ul>
<li>Pascal Rapicault - p2 lead (IBM)</li>
<li>Andrew Niefer (IBM)</li>
<li>Daniel Leberre (Universit&#233; d'Artois)</li>
<li>DJ Houghton (IBM)</li>
<li>Henrik Lindberg (Cloudsmith)</li>
<li>Ian Bull (EclipseSource)</li>
<li>Jeff McAffer (EclipseSource)</li>
<li>John Arthorne (IBM)</li>
<li>Simon Kaegi (IBM)</li>
<li>Stefan Liebig (Compeople)</li>
<li>Susan McCourt (IBM)</li>
<li>Thomas Hallgren (Cloudsmith)</li>
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
