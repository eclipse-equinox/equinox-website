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

		<div class="homeitem3col">
			<h3>Mission Statement</h3>
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
	    </div>
		</p>
		<div class="homeitem3col">
		  <h3>Getting Started and Getting Involved</h3>
			<p>The easiest way to get involved in Equinox is to try it out. See the <a href="quickstart.html">Quick
				Start Guide</a> for how to get up and running with the standalone
				Equinox OSGi framework and  the <a href="http://download.eclipse.org/eclipse/equinox">downloads</a> page
				for more information on acquiring various Equinox OSGi bundles.</p>
			<p>If you want to find out more, ask questions, report bugs, get (or contribute
				:-) code, check out the <a href="resources.php">community
				resources</a> and look into the work going on in the <a href="framework">framework</a>, 
				<a href="bundles">bundles</a> or <a href="incubator">incubator</a> components
				of Equinox.</p>
		</div>
		<div class="homeitem3col">
		  <h3>What's New</h3>
			<p><b>Dec 15</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14"> 
				8 new OSGi services are now available. Check out the <a href="http://www.eclipse.org/equinox/bundles">bundles page</a>.</p>
			<p><b>Nov 21</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14"> The
				refactored Runtime has been contributed to this week's Integration builds.
				See the <a href="documents/3.2-migration.php">migration doc</a> and the
				<a href="bundles">bundles component</a> for more details.</p>
			<p><b>Oct 12</b> - Two presentations on Eclipse and OSGi at OSGi Congress in Paris now available
				on the <a href="documents">documents page</a>.</p>
			<p><b>Oct 2</b> - Track the transition details in <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110486">bugzilla</a>.</p>
			<p><b>Sept 23</b> -  Equinox transition approved!! The infrastructure transition should begin presently.</p>
			<p><b>Sept 16</b> - Transition call scheduled for September 23, 2005 at 1800UTC (1400 EST).</p>
			<p><b>Sept 5</b> - <a href="documents/transition.html">Proposal</a> to
				transition Equinox from the Technology PMC to the Eclipse PMC and have it be
				the official home of OSGi at Eclipse.</p>
			<p>&nbsp;</p>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Equinox links</h6>
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="framework">framework</a></li>
				<li><a href="bundles">bundles</a></li>
				<li><a href="incubator">incubator</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/Equinox">wiki</a></li>
				<li><a href="documents">documents</a></li>
				<li><a href="http://download.eclipse.org/eclipse/equinox">downloads</a></li>
				<li><a href="resources.php">resources</a></li>
				<li><a href="faq.php">faq</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
