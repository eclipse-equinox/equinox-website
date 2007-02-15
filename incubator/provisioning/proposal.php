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
Eclipse has advanced quite quickly with new use-cases (RCP, Equinox, server side, etc.) and new technologies. However to date Update Manager has not been enhanced to support or exploit these changes thus limiting the applications being developed.
<p/>
Even though the <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html">3.3 plan</a> had plans to overcome these limitations, nothing has been done.
<p/>
In order to ensure update manager receives appropriate attention in the next release of eclipse, we are proposing the creation of a provisioning incubator to develop new technologies and explore the existing ones. The outcome of this work will graduate as a replacement for update manager.


<p class=bar>Scope of the proposal</p>
In order to increase our chance of success, the scope of this incubator will be limited to the creation of a client-side provisioning platform and a new update manager based on this platform.
<p/>
The key characteristics researched by this work are:
<ul>
<li>Sharing of plug-ins across multiple installations</li>
<li>Configuration of non running eclipse and management of multiple configurations</li>
<li>Separation of the metadata servers from the byte servers (in update manager lingua, have site.xml on one server and the jars on another one)</li>
<li>Integration with the OS (desktop shortcuts, registry entries, etc.)</li>
<li>Support for the OSGi constructs</li>
<li>Transactional installs</li>
</ul>
<p/>
Pluggability and flexibility goes without saying since it should be our underlying motto to enable things like pluggable transports, pluggable repositories (maven, OBR, etc.), flexible mirror choice, decision as to what to install, etc.


<p class=bar>Community</p>
To ensure the suitability of the solution to a wide set of use cases, we are actively looking for interested parties with or without technology but with definite interest in this area to contribute time and resources.


<p class=bar>Timeline</p>
Given the foreseen impact of the work, we will have to operate under an aggressive schedule to make the rest of the platform team comfortable with the new work before it gets completely integrated into the builds. This means that we will have to have something for integration as early as september and show completion in december, then leaving us early 2008 to polish everything.


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