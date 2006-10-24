<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Embedding an HTTP server in Equinox";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server, servlet, http";
	
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

<p class=bar>Overview</p>
<p>Equinox provides two complete implementations of the OSGi Http Service suitable for embedding.
<ul>
<li><b>org.eclipse.equinox.http</b><br />
Very small footprint suitable for resource constrained environments. <br />
<i>API compatible with Servlet 2.4 but provides limited support beyond Servlet API 2.1.</i>
</li>
<li><b>org.eclipse.equinox.http.jetty</b><br />
Implemented using <a href="http://jetty.mortbay.org">Jetty</a> as the underlying engine for providing Servlet API 2.4 Support.
</li>
</ul>
</p>

<p class=bar>Bundles</p>
<p>The following bundles are involved in putting together an Http Service environment:
<br />
<div style="border: 1px solid gray">
<ul>
	<li><b>org.eclipse.equinox.http</b></li>
</ul>
OR<br />
<ul>
	<li><b>org.eclipse.equinox.http.jetty</b></li>
	<li><b>org.eclipse.equinox.http.servlet</b></li>
	<li><b>org.mortbay.jetty</b> <i>(v5_1_11 - from Orbit Depot)</i></li>
	<li><b>org.apache.commons.logging</b> <i>(v1_0_4 - from Orbit Depot)</i></li>
</ul>
</div>
<br />
<ul>
	<li><b>javax.servlet</b> <i>(v2_4 - from Orbit Depot)</i></li>
	<li><b>[optional] org.eclipse.equinox.http.registry</b><br />
	<i>Provides servlet, resource, and httpcontext extension points based on an OSGi HttpService.</i>
	</li>
</ul>
</p>

<p>The org.eclipse.equinox.* projects can be retrieved from the equinox CVS depot. <br /> 
(e.g. cvsroot/eclipse/org.eclipse.equinox.http)</p>
<p>
The 3rd party bundles can be retrieved from the Orbit CVS Depott. <br/>
(e.g. cvsroot/tools/org.eclipse.orbit/javax.servlet [branch v2_4])]
</p>

<p><i>[Suggested]</i> If you're using Eclipse it might be far simpler to "import" a team project set with everything needed. <br />
<i>Equinox Http Service:</i> (<a href="downloads/equinoxhttp-anon.psf">regular</a>) or (<a href="downloads/equinoxhttp-anon-proxy.psf">proxied</a>)<br />
<i>Jetty-based Http Service:</i> (<a href="downloads/jettyhttp-anon.psf">regular</a>) or (<a href="downloads/jettyhttp-anon-proxy.psf">proxied</a>)</p>

<p><b>Additional Notes: </b><ul style="list-style-type: none"><i>
<li>To build and use these projects you'll need to be running the Eclipse SDK 3.2 or later.</li>
</ul>
</i></p>

<p class=bar>Writing the server application</p>
<p>See the <a href="http://eclipse.org/equinox/documents/http_writing_application.php">Writing a bundle-based server application</a>
 for information on how to write a bundle based web application.</p>

<p class=bar>Running the server</p>
<p>To run the server and your application, carry out the following steps:
<ul>
	<li>Create an OSGi Framework launch configuration <b>Run &gt; Run... &gt; OSGi Framework</b></li>
	<li>In the Plug-ins tab, de-select all the bundles</li>
	<li>Select the bundles listed above and your application (e.g., com.example.http.application)</li>
	<li>Run the launch configuration</li>
	<li>Launch your favorite web browser and access the URLs</li>
</ul>
</p>
<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/server/component-links.html";
	#include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
