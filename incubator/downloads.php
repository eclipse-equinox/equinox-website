<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator Downloads";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator download";
	
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

			<p class=bar>Downloads</p>
<p>The Equinox incubator component has a number of workareas.  Some operate with relative independence of the 
work going on in the main Equinox code base (e.g., they are developing new, add-on function) while others
are working on incremental improvements to existing Equinox code and functionality.  Because of this and the attendant 
variation in code completeness, some elements of the incubator are built with the normal Equinox bundles and are downloadable 
from the same downloads page (though such incubator elements are clearly marked as not ready for prime time).  Other
work areas make their downloads (if any) available on individual pages as they reach stable plateaus.</p>

<p>Please look for downloads in one of the following areas:</p>
	      <table width="100%" border="0">
	        <tr> 
	          <td width="20%" valign="top"><b>Page</b></td>
	          <td width="82%"><b>Description</b></td>
	        </tr>
	        <tr>
	          <td width="20%" valign="top"><a href="http://download.eclipse.org/eclipse/equinox/">Equinox</a></td>
	          <td width="82%">Equinox main downloads page with some content that is near graduation</td>
	        </tr>
	        <tr>
	          <td width="20%" valign="top"><a href="http://www.eclipse.org/equinox/incubator/monitoring/index.php">Monitoring</a></td>
	          <td width="82%">The monitoring workarea has several pre-built pieces for trial</td>
	        </tr>
	      </table>
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
