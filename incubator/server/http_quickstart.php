<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - HTTP Server Quickstart";
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
	<h3>HTTP Server</h3>
	<p>Setting up an HTTP server using Equinox bundles is simple and this page will explain to you how to do that.</p>
</div>

<div class="homeitem3col">
	<h3>Dependancies</h3>
	<p>This is the minimal plug-in set that you will need to run an HTTP server.</p>
	<ul>
		<li><b>Incubator Bundles</b> - These bundles are available from the Equinox Incubator repository.
			<ul>
				<li>org.eclipse.equinox.http</li>	
				<li>org.eclipse.equinox.http.registry</li>
			</ul>
		</li>
		<li><b>Regular Bundles</b> - These bundles are available from the eclipse repository.
			<ul>
				<li>org.eclipse.core.jobs</li>
				<li>org.eclipse.core.runtime.compatibility.registry</li>
				<li>org.eclipse.equinox.common</li>
				<li>org.eclipse.equinox.registry</li>
				<li>org.eclipse.equinox.servlet.api</li>
				<li>org.eclipse.osgi</li>
				<li>org.eclipse.osgi.services</li>
			</ul>
		</li>
	</ul>
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

<div id="rightcolumn">
	<div class="sideitem">
		<h6>Equinox links</h6>
		<ul>
			<li><a href="http://www.eclipse.org/equinox">home</a></li>
			<li><a href="http://www.eclipse.org/equinox/framework">framework</a></li>
			<li><a href="http://www.eclipse.org/equinox/bundles">bundles</a></li>
			<li><a href="http://www.eclipse.org/equinox/incubator">incubator</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/Equinox">wiki</a></li>
			<li><a href="http://www.eclipse.org/equinox/documents">documents</a></li>
			<li><a href="http://download.eclipse.org/eclipse/equinox">downloads</a></li>
			<li><a href="http://www.eclipse.org/equinox/resources.php">resources</a></li>
			<li><a href="http://www.eclipse.org/equinox/framework/planning">planning</a></li>
			<li><a href="http://www.eclipse.org/equinox/faq.php">faq</a></li>
		</ul>
	</div>
</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
