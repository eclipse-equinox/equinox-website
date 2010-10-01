<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle = "Equinox Downloads";
	$pageKeywords = "equinox, osgi, framework, runtime, download";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">

	<h3>$pageTitle</h3>
	<p>For access to archived builds, look <a href="http://archive.eclipse.org/equinox/">here</a>.</p>

	<div class="homeitem3col">
		<h3>Latest Releases</h3>
		<TABLE  width="100%" CELLSPACING=0 CELLPADDING=3>
			<tr>	<td width="30%"><b>Build Name</b></td><td><b>Build Date</b></td></tr>
			<tr><td><a href="drops/R-3.6.1-201009090800/index.php">3.6.1</a></td><td>Thu, 9 Sep 2010 -- 08:00 (-0400)</td></tr>
			<tr><td><a href="drops/R-3.6-201006080911/index.php">3.6</a></td><td>Tue, 8 Jun 2010 -- 09:11 (-0400)</td></tr>
		</table>
	</div>

	<div class="homeitem3col">
		<h3>Latest Builds</h3	>
		<TABLE  width="100%" > 
			<tr><td width="30%"><b>Build Type</b></td><td><b>Build Name</b></td><td><b>Build Date</b></td></tr> 
			<tr><td width="30%">3.7 Stable</td><td><a href="somebuild.php">3.7M2a</a></td><td>Tue, 21 Sep 2010 -- 10:24 (-0400)</td></tr>
			<tr><td width="30%">3.7 Integration</td><td><a href="somebuild.php">I20100928-1200</a></td><td>Tue, 28 Sep 2010 -- 12:00 (-0400)</td></tr>
			<tr><td width="30%">3.7 Nightly</td><td><a href="somebuild.php">N20101001-0943</a></td><td>Fri, 1 Oct 2010 -- 09:43 (-0400)</td></tr>
			<tr><td width="30%">3.6.x Maintenance</td><td><a href="somebuild.php">M20100929-0800</a></td><td>Wed, 29 Sep 2010 -- 08:00 (-0400)</td></tr> 
		</table>
	</div>

	<div class="homeitem3col">
		<h3>3.7 Stream Stable Builds</h3>
		<TABLE  width="100%" CELLSPACING=0 CELLPADDING=3>
			<tr><td width="30%"><b>Build Name</b></td><td><b>Build Date</b></td></tr>
			<tr><td><a href="drops/S-3.7M2a-201009211024/index.php">3.7M2a</a></td><td>Tue, 21 Sep 2010 -- 10:24 (-0400)</td></tr>
			<tr><td><a href="drops/S-3.7M2-201009152024/index.php">3.7M2</a></td><td>Wed, 15 Sep 2010 -- 20:24 (-0400)</td></tr>
			<tr><td><a href="drops/S-3.7M1-201008051700/index.php">3.7M1</a></td><td>Thu, 5 Aug 2010 -- 17:00 (-0400)</td></tr>
		</table>
	</div>
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
