<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Provisioning proposal";
	$pageKeywords	= "equinox, osgi, udpate manager, install, provisioning, proposal";
	
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

<p class=bar>Introduction</p>
Eclipse has advanced quite quickly with new use-cases (RCP, Equinox, server side, etc.) and new technologies. However, to date Update Manager has not been enhanced to support or exploit these changes thus limiting the applications being developed.
<p/>
Even though the <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html">3.3 plan</a> has items to overcome these limitations, no new work has been done due to time and resource constraints.
<p/>
In order to ensure Update Manager receives appropriate attention in the next release of Eclipse, we are proposing the creation of a provisioning work area to develop new technologies and explore existing ones. The goal is for this
work to graduate to be a replacement for Update Manager.


<p class=bar>Scope of the proposal</p>
In order to increase our chance of success, the scope of this incubator will be limited to the creation of a client-side provisioning framework that is functionally equivalent to the current Update Manager yet is more flexible and extensible.
<p/>
The key characteristics researched by this work are:
<ul>
<li>sharing of plug-ins across multiple installations</li>
<li>configuration of non-running Eclipse and management of multiple configurations</li>
<li>separation of metadata and data to allow hosting on different servers (in Update Manager terminology, have site.xml on one server and the jars on another one)</li>
<li>integration with the OS prerequisites (e.g. JREs, registry entries, etc.)</li>
<li>support for the OSGi constructs</li>
<li>transactional operations (install, update, etc.)</li>
</ul>
<p/>
Pluggability and flexibility goes without saying since it should be our underlying motto to enable things like pluggable transports, pluggable repositories (maven, OBR, etc.), flexible mirror choices, decision as to what to install / update, etc.


<p class=bar>Community</p>
To ensure the suitability of the solution to a wide set of use cases, we are actively looking for interested parties (with or without technology) with definite interest in this area who are willing to contribute time and resources.


<p class=bar>Timeline</p>
Given the foreseen impact of this work, we will have to operate under an aggressive schedule to be able to quickly produce a stable result. This will allow 
the platform team and interested parties ample time to review and buy in to this new provisioning story before integration into the Eclipse platform. 
If accepted, we intend to start integration of the new provisioning story as early as September 2007 and reach completion in December 2007, thus leaving us the rest of the release cycle for polish.


<p class=bar>Resources</p>
Please direct comments or questions to equinox-dev@eclipse.org.





<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/server/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>