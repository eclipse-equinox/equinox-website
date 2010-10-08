<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator Downloads";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator download";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
	
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
	          <td width="20%" valign="top"><a href="http://download.eclipse.org/equinox/">Equinox</a></td>
	          <td width="82%">Equinox main downloads page with some content that is near graduation</td>
	        </tr>
	        <tr>
	          <td width="20%" valign="top"><a href="http://eclipse.org/equinox/incubator/monitoring/index.php">Monitoring</a></td>
	          <td width="82%">The monitoring workarea has several pre-built pieces for trial</td>
	        </tr>
	        <tr>
	          <td width="20%" valign="top"><a href="http://eclipse.org/equinox/incubator/aspects/equinox-aspects-downloads.php">Aspects</a></td>
	          <td width="82%">Find the latest releases and demos</td>
	        </tr>
	      </table>
	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
