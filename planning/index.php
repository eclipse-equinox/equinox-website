<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Planning";
	$pageKeywords	= "equinox, osgi, framework, runtime, bundles, planning";
	
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
			<h3>Releases currently under development</h3>
			<ul>
	      <li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=rt.equinox">Equinox Helios plan</a><br>
	        This document lays out the feature and API set for the Helios (3.6) release of the Equinox Project. </li>
	      <li><a href="freeze_plan_3.6.php"> Equinox Project Helios Endgame Plan</a><br>
	    		Information about how we plan to wrap up the Helios release (version 3.6.0).</li> 
	    </ul>
      	</div>
		<div class="homeitem3col">
			<h3>Historical information about past releases</h3>			
		<ul>
	      <li><a href="equinox_galileo_plan.xml"> Equinox Project Galileo Plan</a><br>
	        This document lays out the feature and API set for the Galileo (3.5) release of the Equinox Project. </li>
	      <li><a href="freeze_plan_3.5.php"> Equinox Project Galileo Endgame Plan</a><br>
	    		Information about how we wrapped up the Galileo release (version 3.5).</li>     
	      <li><a href="freeze_plan_3.5.2.php"> Equinox Project Galileo SR2 Endgame Plan</a><br>
	    		Information about how we wrapped up the Galileo Service Release 2 (version 3.5.2).</li> 
	      <li><a href="http://eclipse.org/eclipse/development/"> Eclipse Project Development</a><br>
	    		Previous releases of Equinox where included in the Eclipse Project plans</li>     
		</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
