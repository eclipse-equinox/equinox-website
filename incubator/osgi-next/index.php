<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - OSGi Next";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, specification";
	
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
This incubator project is targetted at implementing prototypes of the specifications developed by the 
<a href="http://www.osgi.org">OSGi Alliance</a> while the specification is being developmented.
Typically the development cycle for the OSGi specification do not align with the Eclipse yearly release train.
In many cases it is not feasible to develop prototypes for the next OSGi specifications in current release stream 
of Eclipse.
</p>
<p>
This work area will allow others to join in on the investigations for future OSGi implementations without the 
risk of destablizing the current Eclipse release.  The goal of the work area is to provide a stable implementation
of future OSGi specifications by the time the specifications goes final and public.  Once this happens then the 
implementation can be considered for graduation into some future release of Eclipse.
</p>
<p>
To begin with, this work area will be used to implement the next release of the OSGi Framework specification,
but other future OSGi specifications could also be contributed.  This will allow Equinox to provide 
reference implementations to OSGi without effecting the current Eclipse release.
</p>

<p class=bar>Working With the OSGi Next Incubator</p>
<p>The OSGi Next incubator uses the main <a href="../resources.php">incubator resources</a> with
  the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td><strong>Bugs</strong></td>
    <td colspan="2">Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bosgi-next%5D&classification=Eclipse&product=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[osgi-next]</a></strong></td>
  </tr>

  <tr>
    <td ><strong>CVS</strong></td>
    <td colspan="2">See the projects in the "osgi-next" folder of the normal Equinox Incubator CVS repository.
  </tr>
</table>

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
