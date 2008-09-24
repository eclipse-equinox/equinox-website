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
Eclipse has advanced quite quickly with new use-cases (RCP, Equinox, server side, etc.) and new technologies. 
However, to date Update Manager has not been enhanced to support or exploit these changes thus limiting the 
applications being developed.  This incubator project is targetted at refreshing the client-side provisioning infrastructure
in Eclipse.  The refresh while not providing substantially more out-of-the-box functionality than Update Manager, will 
provide an open and extensibile provisioning platform.  See the <a href="proposal.php">incubator proposal</a> 
and the <a href="overview.php">overview</a> for additional detail.</p>

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
    <td colspan="2">Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=RT&product=Equinox&component=p2&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[prov]</a></strong></td>
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

<p class=bar>Active investigators</p>
<ul>
<li>Andrew Overholt (Red Hat)</li>
<li>Dave Stevenson (IBM)</li>
<li><a href="http://code9.com/team/jeff">Jeff McAffer</a> (<a href="http://code9.com">Code 9</a>)</li>
<li>John Arthorne (IBM)</li>
<li>Pascal Rapicault (IBM)</li>
<li>Simon Kaegi (IBM)</li>
<li>Stefan Liebig (Compeople)</li>
<li>Susan McCourt (IBM)</li>
<li><a href="http://code9.com/team/scott">Scott Lewis</a> (<a href="http://code9.com">Code 9</a>)</li>
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
