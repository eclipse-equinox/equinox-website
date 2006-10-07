<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Resources";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator";
	
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

		<div class="homeitem3col">
			<h3>Resources</h3>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="news://news.eclipse.org/eclipse.technology.equinox" target="_top"><b>Newsgroup</b></a><br>
    Talk to the people using any part of Equinox</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="http://dev.eclipse.org/mailman/listinfo/equinox-dev" target="_top"><b>Mailing
            list </b></a><br>
    Talk to the people working on any part of Equinox</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href=http://dev.eclipse.org/bugs/buglist.cgi?product=equinox&cmdtype=doit(%22der=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime%22 target="_top"><b>Bugs/Issues</b></a><br>
    Discover the current bugs and issues in the Equinox Incubator. Note
      that a large amount of the activity goes on in Bugzilla. Configure your
      Bugzilla account email preferences to watch the equinox.incubator-inbox@eclipse.org
      user to monitor  bug activity.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href=archive target="_top"><b>Archives</b></a><br>
    Past content from the Equinox Incubator web site</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td>        <p><a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.equinox" target="_top"><b>CVS</b></a><br>
      The Equinox Incubator code repository is part of the normal Eclipse project
        repository and is available via <a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/">web
        access</a> or direct CVS access. For direct access, use anonymous login
        to the CVS repo</p>
        <blockquote>
          <p>:pserver:anonymous@dev.eclipse.org/cvsroot/eclipse</p>
        </blockquote>
        <p>The Equinox Incubator work goes on in the </p>
        <blockquote>
          <p>equinox-incubator</p>
        </blockquote>
        <p> directory/module. Note that most work is done in various branches
          rather than HEAD. See the individual <a href="index.php#workareas">work-area
          home pages</a> for details. For an understanding of how work is carried
          out in the incubators, check out the <a href="howto.php">How to Incubate</a> guide.</p>
      </td>
  </tr>
</table>
		</div>
	</div>

<?php
	include "global-links.html";
	include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
