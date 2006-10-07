<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Servlets etc. in Equinox";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server, http";
	
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
	<h3>Embedding an HTTP server in Equinox</h3>
		<p>As a minimum you will need the following bundles.  All are available from the Eclipse repository.
			<ul>
				<li>org.eclipse.osgi</li>
				<li>org.eclipse.osgi.services</li>
				<li>org.eclipse.equinox.common</li>
				<li>org.eclipse.equinox.registry</li>
				<li>org.eclipse.equinox.http.registry</li>
				<li>javax.servlet <b>or</b> org.eclipse.equinox.servlet.api (deprecated)</li>
			</ul>
			</p>

	<p>To embedd an HTTP server in Equinox you first need an embedable HTTP implementation.  This can be 
	the Equinox HTTP service implementation (org.eclipse.equinox.http), embedded Jetty or any other server configured 
	to run as an OSGi bundle.  So, for example you could get:
	<ul>
	<li>org.eclipse.equinox.http</li>
	</ul>
or
	<ul>
	<li>org.mortbay.jetty</li>
	<li>org.eclipse.equinox.http.jetty</li>
	</ul>
	</p>

	<h4>Installing JSP support</h4>
	<p>TBD</p>
</div>

<div class="homeitem3col">
	<h3>Writing the server application</h3>
	See the <a href="http://www.eclipse.org/equinox/documents/http_quickstart.php">Server-side quick start guide</a>
	 for information on how to write a bundle based web application.
</div>

<div class="homeitem3col">
	<h3>Running the server</h3>
	<p>To run the server and your application, carry out the following steps:
	<ul>
		<li>Create an OSGi Framework launch configuration <b>Run &gt; Run... &gt; OSGi Framework</b></li>
		<li>In the Plug-ins tab, de-select all the bundles</li>
		<li>Select the bundles listed above and your application (com.example.http.application)</li>
		<li>Run the launch configuration</li>
		<li>Launch your favorite web browser and access the URLs</li>
	</ul>
	</p>
</div>

</div>

<?php
	include "global-links.html";
	include "dir-links.html";
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
