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

	<h3></h3>
		<p>As a minimum you will need the following bundles.  All are available from the Eclipse repository.
			<ul>
				<li>org.eclipse.osgi</li>
				<li>org.eclipse.osgi.services</li>
				<li>javax.servlet [or org.eclipse.equinox.servlet.api (deprecated)]</li>
			</ul>
		</p>
		<p>
			<ul>
				<li>org.eclipse.equinox.http.registry</li>
				<li>org.eclipse.equinox.registry</li>
				<li>org.eclipse.equinox.common</li>
			</ul>
		</p>

	<p>To embedd an HTTP server in Equinox you first need an embeddable HTTP Service implementation.  This can be 
	the Equinox HTTP service implementation (org.eclipse.equinox.http), embedded Jetty or any other server configured 
	to run as an OSGi bundle.  So, for example you could get:
	<ul>
	<li>org.eclipse.equinox.http</li>
	</ul>
<p>or</p>
	<ul>
	<li>org.mortbay.jetty</li>
	<li>org.eclipse.equinox.http.jetty</li>
	</ul>
	</p>

<p><i>[Suggested]</i> If you're using Eclipse it might be far simpler to "import" a team project set with everything needed. 
(<a href="/equinox/server/downloads/jettyhttp-anon.psf">Jetty-based Http Service -- regular</a>) or (<a href="/equinox/server/downloads/jettyhttp-anon-proxy.psf">Jetty-based Http Service -- proxied</a>)</p>

	<h4>Installing JSP support</h4>
	<p>TBD</p>

	<h3>Writing the server application</h3>
	<p>See the <a href="http://eclipse.org/equinox/documents/http_writing_application.php">Writing a bundle-based server application</a>
	 for information on how to write a bundle based web application.</p>

	<h3>Running the server</h3>
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
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/documents/component-links.html";
	include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
