<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Resources";
	$pageKeywords	= "equinox, osgi, framework, runtime, resources";
	
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
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><a href="http://wiki.eclipse.org/index.php/Equinox" target="_top"><b>Wiki</b></a><br>
    The Equinox project Wiki.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="news://news.eclipse.org/eclipse.technology.equinox" target="_top"><b>Newsgroup</b></a><br>
    Talk to the people using Equinox</td>
  </tr>
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="http://dev.eclipse.org/mailman/listinfo/equinox-dev" target="_top"><b>Mailing
            list </b></a><br>
    Talk to the people working on Equinox</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=Equinox&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top"><b>Bugs/Issues</b></a><br>
    Discover the current bugs and issues in Equinox. Note
      that a large amount of the activity goes on in Bugzilla. Configure your
      Bugzilla account email preferences to watch the various Equinox inbox
      users listed below to monitor bug activity interesting to you.
      <ul>
		<li>equinox.compendium-inbox@eclipse.org</li>
		<li>equinox.components-inbox@eclipse.org</li>
		<li>equinox.framework-inbox@eclipse.org</li>
		<li>equinox.incubator-inbox@eclipse.org</li>
		<li>equinox.p2-inbox@eclipse.org</li>
		<li>equinox.security-inbox@eclipse.org</li>
		<li>equinox.server-side-inbox@eclipse.org</li>
		<li>equinox.website-inbox@eclipse.org</li>
      </ul>
      </td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td>
        <p><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/?root=RT_Project" target="_top"><b>CVS</b></a><br>
      The Equinox code is hosted in the RT project repository and
        is available via <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/?root=RT_Project">web
        access</a> or direct CVS access. For direct access, use anonymous login
        to the CVS repo</p>
        <blockquote>
          <p>:pserver:anonymous@dev.eclipse.org/cvsroot/rt</p>
        </blockquote>
        <p>The Equinox work goes on in various folders as appropriate for the
          work being done. See the project lists in the <a href="framework/index.php#frameworkprojects">framework</a>, <a href="bundles/index.php#bundleprojects">bundles</a> and <a href="incubator/index.php#workareas">incubator</a> components
          for more details.</p>
      </td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td>        <p><a href="http://eclipse.org/equinox" target="_top"><b>Website</b></a><br>
      The Equinox  website itself is hosted in a CVS repository and mirrored
          on a conventional HTTP server every minute or so. This allows use of
          PHP, Flash, ... and enables versioning and diffing using Eclipse. The
          site is open for editing by all Equinox committers using:</p>
        <blockquote>
          <p>:extssh:&lt;you here&gt;@dev.eclipse.org/cvsroot/org.eclipse</p>
        </blockquote>
        <p>The Equinox website is in </p>
        <blockquote>
          <p>www/equinox</p>
        </blockquote>        
      <p>You can use Eclipse to check out the whole site and then edit and commit.
      Remember your changes will take a minute or so to be reflected in the real
        site.</p></td>
  </tr>
</table>
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
