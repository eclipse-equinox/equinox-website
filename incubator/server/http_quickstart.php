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
<p>Setting up an HTTP server using Equinox bundles is simple and this page will explain to you how to do that.
</p>
<ul>
	<li><b><a href="eclipse_serverside_integration.php">Improving Eclipse / Server-Side Integration</a></b><br />
		<i>Helping to make Eclipse a stronger platform for server-side integration.</i></li>
	<li><b><a href="embedding_in_a_servlet_container.php">Embedding in a Servlet Container</a></b><br />
		<i>Building common infrastructure for launching eclipse from a servlet container and creating OSGi based servlet applications.</i></li>

<li>Dependancies - This is the minimal plug-in set that you will need to run an HTTP server.</li>
<li>Incubator Bundles:
	<ul>
		<li>org.eclipse.equinox.http</li>	
		<li>org.eclipse.equinox.http.registry</li>
	</ul>
</li>
<li>Regular Bundles:
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
</p>
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
