<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox p2";
	$pageKeywords	= "equinox, osgi, framework, runtime, p2, provisioning";
	
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
The p2 project is a sub-project of Equinox that focuses on provisioning technology for OSGi-based
applications. Although p2 has specific support for installing Eclipse and Equinox-based applications,
it includes a general-purpose provisioning infrastructure that can be used as the basis for
provisioning solutions for a wide variety of software applications.</p>

<p>The bulk of the current information on this work area is maintained in the <a href="http://wiki.eclipse.org/Equinox_Provisioning">wiki</a>.  
There you will find documents discussing:</p>
<ul>
<li> <a href="/projects/project_summary.php?projectid=rt.equinox.p2">About This Project</a>
<li> <a href="http://wiki.eclipse.org/Equinox_p2_Getting_Started">Getting started</a></li>
<li> <a href="http://wiki.eclipse.org/Equinox/p2/Concepts">Provisioning concepts</a></li>
<li> <a href="http://wiki.eclipse.org/Equinox/p2/Plan">The provisioning plan</a></li>
<li> <a href="http://wiki.eclipse.org/Category:Equinox_p2">A whole host of articles on provisioning</a> in general and related to specifically to the Equinox work</li>
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
    <td colspan="2">See the projects in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/p2/?root=RT_Project">p2</a>
     folder of the normal Equinox CVS repository.
            <blockquote>
          :pserver:anonymous@dev.eclipse.org/cvsroot/rt/org.eclipse.equinox/p2/
        </blockquote>
    
    </td>
  </tr>
</table>

<p class=bar>Committers</p>
<ul>
<li>Pascal Rapicault - p2 lead (Sonatype)</li>
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
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
