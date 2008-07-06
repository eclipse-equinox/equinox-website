<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects - Bundles";
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

<p class=bar>Working with equinox aspects</p>
<p>The aspects incubator uses the main <a href="../resources.php">incubator
    resources</a> with the following refinements.</p>

<table width="100%" border="0">
  <tr>
    <td><strong>Bugs</strong></td>
    <td>Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Baspects%5D&classification=Eclipse&product=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[aspects]</a></strong></td>
  </tr>

<tr>
	<td> </td>
	<td><center><strong>Projects</strong></center></td>
</tr>

<tr>
	<td colspan="2"><strong>Equinox Aspects Runtime</strong></td>
	<td> </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Weaving Hook
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/aspects/org.eclipse.equinox.weaving.hook">org.eclipse.equinox.weaving.hook</a>)</b><br>
    This is the framework extension project containing the hooks to insert bytecode weaving and caching at load-time.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>AspectJ Weaving
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/aspects/org.eclipse.equinox.weaving.aspectj">org.eclipse.equinox.weaving.aspectj</a>)</b><br>
    This bundle contains the bridge to use AspectJ as load-time weaving implementation.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Standard Caching
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/aspects/org.eclipse.equinox.weaving.caching">org.eclipse.equinox.weaving.caching</a>)</b><br>
    This bundle provides a caching for woven bytecode for standard Java virtual machines.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>J9-Specific Caching
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/aspects/org.eclipse.equinox.weaving.caching.j9">org.eclipse.equinox.weaving.caching.j9</a>)</b><br>
    This bundle contains a cache alternative cache implementation that uses IBM J9 VM shared classes for caching woven classes.</td>
</tr>

</table>

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
