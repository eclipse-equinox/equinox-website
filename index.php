<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox";
	$pageKeywords	= "equinox, osgi, framework, runtime";
	
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

			<p class=bar>Mission Statement</p>
				<p>From a code point of view, Equinox is an implementation of the <a href="http://osgi.org/osgi_technology/download_specs.asp?section=2#Release4">OSGi
					R4 core framework specification</a>, a set of bundles that implement
					various optional OSGi services and other infrastructure for running OSGi-based
					systems.
				</p><p>More generally, the goal of the Equinox project is to be a first class OSGi
					community and foster the vision of Eclipse as a landscape of bundles. As
					part of this, it is responsible for developing and delivering the OSGi framework
					implementation used for all of Eclipse. In addition. the project is open to:
				</p>
				<ul>
					<li>Implementation of all aspects of the OSGi specification (including the MEG and VEG work) </li>
					<li> Investigation and research related to future versions of OSGi specifications and related runtime issues </li>
					<li>Development of non-standard infrastructure deemed to be essential
						to the running and management of OSGi-based systems </li>
					<li>Implementation of key framework services and extensions needed for running Eclipse 
						(e.g., the Eclipse Adaptor, Extension registry) and deemed generally useful to people using OSGi.</li>
				</ul>
				<p>As a peer of the Platform, JDT and PDE projects, the Equinox OSGi code is
					managed by the Eclipse PMC and ships with the Eclipse project
					major releases. The various other bundles developed here may ship independently
					and on different schedules. 
				</p>
				<p>Did you come here expecting to find the Equinox Technology project? It has
					been transitioned. See the <a href="documents/transition.html">transition documentation</a> for more details.</p>

		  <p class=bar>Getting Started and Getting Involved</p>
			<p>The easiest way to get involved in Equinox is to try it out. See the <a href="documents/quickstart.php">Quick
				Start Guide</a> for how to get up and running with the standalone
				Equinox OSGi framework and  the <a href="http://download.eclipse.org/eclipse/equinox">downloads</a> page
				for more information on acquiring various Equinox OSGi bundles.</p>
			<p>If you want to find out more, ask questions, report bugs, get (or contribute
				:-) code, check out the <a href="resources.php">community
				resources</a> and look into the work going on in the <a href="framework">framework</a>, 
				<a href="bundles">bundles</a> or <a href="incubator">incubator</a> components
				of Equinox.</p>

		  <p class=bar>What's New</p>
		    <p><b>Sep 4</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The <a href="http://wiki.eclipse.org/Equinox_Summit_2007">Equinox Summit</a> is shaping up to be a great
		       event with some 20 people alread registered.</p>
		    <p><b>Aug 10</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The <a href="http://www.eclipse.org/equinox/incubator/provisioning/">Provisioning workarea</a> team in the 
		       <a href="http://www.eclipse.org/equinox/incubator">Equinox Incubator</a> has released an M1a of the new provisioning
		       support.  For more information see <a href="http://wiki.eclipse.org/Equinox_p2_M1">the wiki</a>.</p>
		    <p><b>Aug 8</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The <a href="http://www.eclipse.org/equinox/incubator/security/">Security workarea</a> in the 
		       <a href="http://www.eclipse.org/equinox/incubator">Equinox Incubator</a> has come alive with various contributions from Lotus
		       around JAAS, JCA and Keystores.  Matthew Flaherty and Eric Li from Lotus have joined the incubator as committers working in 
		       the security area.</p>
		    <p><b>July</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The team at <a href="http://prosyst.com">Prosyst</a> has contributed implementations of 4 standard OSGi services to the 
		       <a href="http://www.eclipse.org/equinox/incubator">Equinox Incubator</a>. And Pavlin Dobrev and Teodor Todorov
		       from Prosyst have joined the incubator as committers.</p>
			<p>&nbsp;</p>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
