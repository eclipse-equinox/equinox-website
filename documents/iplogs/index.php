<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-06-09
	#
	# Description: Equinox project IP log main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Project IP Logs";
	$pageKeywords	= "equinox, EclipseRT, IP, intellectual property";
	$pageAuthor		= "";
	
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
		<p>Eclipse projects are required to maintain intellectual property (IP) logs for each release. This page
		contains all such logs for the EclipseRT <a href="http://eclipse.org/equinox">Equinox</a> project. For
		more details on IP logs, see the <a href="http://www.eclipse.org/projects/dev_process/project-log.php">
		Eclipse Development Process</a> documentation.</p>
		<div class="homeitem3col">
			<h3>Current IP Log</h3>
			<p>To see a draft IP log for the Equinox project release currently under development,
			view the <a href="http://www.eclipse.org/projects/ip_log.php?projectid=rt.equinox">auto-generated IP log</a>.
			Note the auto-generated log has not been reviewed for accuracy or approved by the Eclipse Foundation legal team.
		</div>
		<div class="homeitem3col">
			<h3>IP Logs For Past Releases</h3>
			<p>The following are approved IP logs for past Equinox project releases.</p>
			<ul>
				<li><a href="RT.Equinox.IPLog.galileo.xls">Galileo (3.5)</a></li>
				<li><a href="EquinoxLoggingIPlog.html">Ganymede (3.4)</a></li>
				<li><a href="http://eclipse.org/eclipse/development/project-log-files/">Previous releases</a> the Equinox project was part of the Eclipse Project.</li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>