<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Bundles - Planning";
	$pageKeywords	= "equinox, osgi, framework, runtime, bundles, planning";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
	<div id="midcolumn">
		<h2>$pageTitle</h2>

<table BORDER=0 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td WIDTH="2%" ALIGN=RIGHT VALIGN=TOP><img src="/equinox/images/arrow.png"/></td>
    <td><b>3.2 Release</b>
        <ul>
          <li><a href="3.2/plan.php">General 3.2 Equinox Bundles Plan</a></li>
          <li>Check out the <a href="/equinox/documents">documents</a> page for links
            to some of the major items that we are working on.</li>
        </ul>
    </td>
  </tr>
</table>
	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
