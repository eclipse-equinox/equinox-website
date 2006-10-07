<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Server-side Quickstart";
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
	<h3>Overview</h3>
	<p>Equinox can be used on the server to serve up static content and to run servlets or JSPs.  In each of these cases you 
	need to setup an HTTP server and then configure it with the appropriate content.  There are two basic ways of running an 
	HTTP server in Equinox;</p>
	<ul>
		<li>embed an HTTP server in Equinox</li>
		<li>embed Equinox in and existing application server and surface the server's functionality</li>
	</ul>
	Both techniques are detailed here.
</div>

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
</div>

<div class="homeitem3col">
	<h3>Your Bundle Project</h3>
	<ul>
		<li><b>Create a new project</b> - Next you need to create a bundle project that will supply the resources that will be served up
			by the server. In this example, we will create a new bundle project called <code>org.eclipse.equinox.example.http</code>.</li>
		<li><b>Add resources to your project</b> - The HTTP server will server up resources from your bundle so you will now add files
			to your bundle. In our example we will create a folder in our project called <code>web_files</code>.</li>
		<li><b>Create an extension</b> - This is the key part to the example. Now we create an extension to the server to tell it
			where to get our files.
<pre><code>
	&lt;extension point="org.eclipse.equinox.http.registry.resources"&gt;
		&lt;resource
			alias="/files"
			base-name="/web_files"&gt;
	&lt;/extension&gt;
</code></pre>
		</li>
		<li><b>Explanation</b> - In the extension above, the <code>alias</code> attribute refers to the part of the URL that will be
			used to access the files and the <code>base-name</code> attribute describes where (in your bundle) the resources can be 
			found. So in our example we would access an index file via the following URL <code>http://localhost/files/index.php</code>
			and it would live inside our <code>org.eclipse.equinox.example.http</code> project in the <code>web_files</code> folder.</li>
	</ul>
</div>

<div class="homeitem3col">
	<h3>Running Your Server</h3>
	<p>You can create an OSGi Framework Launch configuration to run the server.
	<ul>
		<li>Create a new OSGi Framework launch configuration.</li>
		<li>In the Plug-ins tab, de-select all the bundles.</li>
		<li>Select the bundles listed above to be part of your launch config.</li>
		<li>Set <code>start=true</code> for the <code>org.eclipse.equinox.http</code> and <code>org.eclipse.equinox.http.registry</code> bundles.</li>
		<li>Run the launch config.</li>
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
