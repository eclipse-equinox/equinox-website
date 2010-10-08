<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Getting Started with Equinox ";
	$pageKeywords	= "equinox, osgi, framework, runtime, resources, quick, start";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	<div id="midcolumn">
		
<h3>$pageTitle</h3>
<p>Equinox implements a wide array of standard OSGi services as well as many additional modules. To get started in 
a particular area, follow the related Getting Started Guide from the list below.
<ul>
	<li><a href="quickstart-framework.php">Basic OSGi with Equinox</a> -- Learn how to get, start and extend the Equinox implementation of the OSGi framework specification.
Install bundles, start and stop them, and interact with the OSGi console.</li>
	<li><a href="/equinox/server/http_in_equinox.php">Embed a server in Equinox</a> -- Define bundles that supply servlets, JSPs and resources and then
run them in Equinox using HTTP servers embedded in Equinox.</li>
	<li><a href="/equinox/server/http_in_container.php">Embed Equinox in an existing servlet container</a> -- Define bundles that supply servlets, JSPs and resources and then
run them in Equinox but this time with Equinox bridged to a standard app server.</li>
	<li><a href="/equinox/server/http_writing_application.php">Write a bundle-based server application</a></li>
</ul>

<h3>Other Information</h3>
<ul>
  <li>The Eclipse SDK includes some very sophisticated tooling for defining,
    developing, debugging, building and deploying bundles. To use this tooling
    run the SDK and mentally replace the word &quot;Plugin&quot; with &quot;Bundle&quot; in all the
    menu/wizard entries. For example, File &gt; New &gt; Plugin Project creates a project
    suitable for coding OSGi bundles. The &quot;Plugin Editor&quot; is really a bundle
    editor with some extra support for Eclipse constructs such as the Extension
    registry.</li>
  <li>Log bug reports in the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Equinox&version=3.3&component=Framework&priority=P3&bug_severity=normal&bug_status=NEW&assigned_to=&cc=&bug_file_loc=&short_desc=&comment=&form_name=enter_bug">Equinox/Framework
      component</a></li>
  <li>Questions and comments should go in the <a href="news://news.eclipse.org/eclipse.technology.equinox">equinox</a> newsgroup.</li>
  <li>Development questions can go to <a href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a>.</li>
</ul>


	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
