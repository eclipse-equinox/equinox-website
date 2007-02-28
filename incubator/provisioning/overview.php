<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Provisioning Overview";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, provisioning";
	
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

<p class=bar>Requirements</p>
<p>
The set of requirements to be addressed by this workarea will evolve over time.  

</p>

<p class=bar>Design</p>
<p>Of course, the design too will evolve over time. To kick off the effort we have sketched out and prototyped
some ideas.  The basis for this design is the desire to factor a provisioning system into constituent parts
and allow those parts to be replaced and reassembled as needed.  In particular we have identified the following
high level concepts.
</p>

<dl>

<dt><b>Agent</b></dt>
<dd>The provisioning infrastructure on client machines is generally referred to as the agent.  The agent may run
separate from any other Eclipse system being managed or may be embedded inside of another Eclipse system.
Agents can manage many profiles (see below) and indeed, a given system may have many agents running on it.
</dd>

<dt><b>Profile</b></dt>
<dd>Profiles are the unit of management in the system.  That is, the provisioning infrastructure can manage 
individual (or collections of) profiles.  Profiles are analogous to Eclipse <i>configuration</i> in some situations.  
For now we have chosen to introduce this new term to separate the conceptual profile from the implementation 
configuration.
</dd>

<dt><b>Artifact</b></dt>
<dd>Artifacts are the elements that are ultimately provisioned to a profile.  For example, Eclipse bundles are artifacts.
</dd>

<dt><b>Metadata</b></dt>
<dd>As with the original Update Manager, there is a need for metadata that describes artifacts separate from the actual 
artifacts themselves.  This allows the provisioning system to reason about profiles hypothetically without 
having to actually incur the cost of downloading all the content.  Broadly speaking the provisioning metadata envisioned here 
takes the form of extensible <b>Installable Units (IUs)</b>.  As the name implies, IUs describe things that can be installed, 
updated or uninstalled.  They do not contain the actual artifacts but rather essential information about such artifacts (e.g., names, ids,
version numbers, dependencies, etc).  The metadata should allow dependencies to be structured as directed acyclic graphs
without forcing containment relationships between nodes.
</dd>

<dt><b>Repository</b></dt>
<dd>Both metadata and artifacts are organized into repositories.  Repository structure, layout and access has long been the source
of much debate and discussion.  We do not intend to fight that battle here. Rather, the provisioning system
must be extensible and thus allow for a wide range of repository formats to be represented.  The pervasive notion of downloading
or managing repository content is <i>mirroring</i>.  Rather than downloading artifacts etc, they are mirrored locally.
</dd>

<dt><b>Transports</b></dt>
<dd>As the name implies transports are the mechanisms by which artifacts, metadata etc are mirrored around the system.  
The set of available transports must be extensible and the programmatic interface to transports should allow for progress
monitoring, cancellation and restart as appropriate.  The incubator work will focus on a small set of transports (e.g., HTTP)
sufficient to do standard Eclipse install management.
</dd>

<dt><b>Director</b></dt>
<dd>Directors are responsible for determining <b>what</b> should be done to a given profile to reshape it as requested. 
That is, given the current state of a profile, a description of the desired end state
of that profile and metadata describing the available IUs, a director produces a list 
of provisioning operations (e.g., install, update or uninstall) to perform on the related IUs.
Directors are also able to validate profiles and assist in the diagnosis of configuration errors.  Note that directors
may range in complexity from very simple (e.g., reading a list of bundles from a static file) to very complex.  In this 
incubator we will create a director sufficient to achieve Update Manager-like function.
</dd>

<dt><b>Engine</b></dt>
<dd>Engines are responsible for determining <b>how</b> to achieve the desired provisioning operations as determined 
by a director.  Whereas the subject of the director's work is metadata, the subject of the engine's work is the artifacts and 
configuration information contained in the IUs selected by the director.  Engines cooperate with repositories and transport
mechanisms to ensure that the required artifacts are available in the desired locations.
</dd>

<dt><b>Phase</b></dt>
<dd>During execution the engine traverses through a set of phases (e.g., fetch, install, configurre). 
At each phase all the IUs being operated on have an 
opportunity to participate in the lifecycle.  The mechanism by which they specify their participation is undecided at this point.
</dd>

<dt><b>Touchpoints</b></dt>
<dd>IUs can be stamped with a <i>type</i>.  Using this type the engine identifies the touchpoint responsible for marrying 
the IU with the related system.  For example, an IU of type "Eclipse bundle" would be handled by the Eclipse Touchpoint.  
That touchpoint is responsible for putting the bundle in the appropriate spot, adding it to the Eclipse configuration files
and setting any related/described settings.  The set of touchpoints is open-ended.
</dd>
</dl>

<p>
The interactions between some of these concepts are depicted in the <a href="1000ft.jpg">1000ft</a> view diagram.
</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
