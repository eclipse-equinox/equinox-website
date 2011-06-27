<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Planning";
	$pageKeywords	= "equinox, osgi, framework, runtime, bundles, planning";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
			<h3>Releases currently under development</h3>
			<ul>
	      <li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=rt.equinox">Current plan</a><br>
	        This document lays out the feature and API set for the current planned release of the Equinox Project. </li>
	    </ul>
      	
			<h3>Historical information about past releases</h3>			
		<ul>
		  <li><a href="equinox_indigo_plan.xml"> Equinox Project Indigo Plan</a><br>
	        This document lays out the feature and API set for the Indigo (3.7) release of the Equinox Project. </li>
	      <li><a href="freeze_plan_3.7.php"> Equinox Project Indigo Endgame Plan</a><br>
	    	Information about how we plan to wrap up the Indigo release (version 3.7.0).</li> 
		  <li><a href="equinox_helios_plan.xml"> Equinox Project Helios Plan</a><br>
	        This document lays out the feature and API set for the Helios (3.6) release of the Equinox Project. </li>
	      <li><a href="freeze_plan_3.6.php"> Equinox Project Helios Endgame Plan</a><br>
	    		Information about how we plan to wrap up the Helios release (version 3.6.0).</li> 
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

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
