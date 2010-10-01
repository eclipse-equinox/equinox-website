<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App=new App(); $Nav=new Nav(); $Menu=new Menu();	include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle="Equinox";
	$pageKeywords="equinox, osgi, framework, runtime";
	$pageAuthor="Equinox Committers";

	$Nav = null; // delete right side navigation
	$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rap/rap-big-header.css"/>' );

$html=<<<EOHTML;	
<div id="big-header">
  <div id="rap-logo"></div>
  <div id="rap-big-buttons">
    <h3>Primary Links</h3>
    <ul>
      <li>
        <a id="rap-button-download" href="/equinox/downloads/">
          <div class="rap-button-icon"></div>
          <h4>Download</h4>
          <p>Distributions, Repositories,<br/>Target Components</p>
        </a>
      </li>
      <li>
        <a id="rap-button-documentation" href="/eclipsert/gettingstarted.php">
          <div class="rap-button-icon"></div>
          <h4>Documentation</h4>
          <p>Tutorials, Examples,<br/>Articles, Reference Docs</p>
        </a>
      </li>
      <li>
        <a id="rap-button-support" href="/equinox/support/">
          <div class="rap-button-icon"></div>
          <h4>Support</h4>
          <p>FAQ, Newsgroup,<br/>Bug Tracker</p>
        </a>
      </li>
      <li>
        <a id="rap-button-demos" href="/eclipsert/case_studies/case_studies.php">
          <div class="rap-button-icon"></div>
          <h4>Case Studies</h4>
          <p>Adopter stories and experiences<br/></p>
        </a>
      </li>
    </ul>
  </div>
</div>

<div id="midcolumn">
	<div class="homeitem">
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
			<li>Implementation of all aspects of the OSGi specification (including the EEG, MEG and VEG work) </li>
			<li> Investigation and research related to future versions of OSGi specifications and related runtime issues </li>
			<li>Development of non-standard infrastructure deemed to be essential
				to the running and management of OSGi-based systems </li>
			<li>Implementation of key framework services and extensions needed for running Eclipse 
				(e.g., the Eclipse Adaptor, Extension registry) and deemed generally useful to people using OSGi.</li>
		</ul>
		<p>As part of the RT project, the Equinox OSGi code is
			managed by the RT PMC.  There is a close binding however to the Eclipse project and its PMC.
			Equinox, as the base for all of Eclipse, ships with all the major releases. 
			The various other bundles developed here may ship independently
			and on different schedules. 
		</p>
	</div>

	<div class="homeitem">
		<h3>Getting Started and Getting Involved</h3>
		<p>The easiest way to get involved in Equinox is to try it out. See the <a href="documents/quickstart.php">Quick
			Start Guide</a> for how to get up and running with the standalone
			Equinox OSGi framework and  the <a href="http://download.eclipse.org/equinox">downloads</a> page
			for more information on acquiring various Equinox OSGi bundles.</p>
		<p>If you want to find out more, ask questions, report bugs, get (or contribute
			:-) code, check out the <a href="resources.php">community
			resources</a> and look into the work going on in the <a href="framework">framework</a>, 
			<a href="bundles">bundles</a> or <a href="incubator">incubator</a> components
			of Equinox.</p>
	</div>
</div>
EOHTML;

	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
