<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Documents";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, documents";
	
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
			<h3>Terminology</h3>
			<ul>
				<li>ContributionProvider: Class which extends the server plugins' org.eclipse.jmx.server.contribution extension point.</li>
				<li>Contribution: Classes that are instantiated by a ContributionProvider. Instances of Contribution reside solely on the server 
					and are registered with the server's mbean registry as dynamic mbeans.</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Server Side - Creating your own Contributor (Contribution Provider) plugin and Transport Layer</h3>
			Simple, create a plugin and extend the org.eclipse.equinox.jmx.server.contribution extension point.  Extending 
			this extension point requires you to define a class that is derived from ContributionProvider (more explanation 
			about deriving from this class will follow) and optionally declaring any classes which this contribution provider 
			knows how to 'extend'.</br></br>
			The methods of note when deriving from ContributionProvider are the providesType(Object o) and 
			contributesType(Object o); together these methods define what objects (children) of itself and/or other 
			contribution providers children (or contributions' children) it knows how to expose for remote management.</br></br>
			By returning true for providesType(Object o), it is assumed that createProvider(Object o) returns a 
			ContributionProvider that has been specialized with the object.  By returning true for contributesType(Object o), 
			it is assumed that the provider knows how to expose the particular object for remote management but has no 
			interest in extending that object for its own purposes.</br></br>
			Pluggable transport providers provide a means for users to provide their own network transport layer 
			implementation and can be utilized by extending the org.eclipse.equinox.jmx.server.provider extension point. 
			 Currently, the project includes two transport plugins that users may use: apache xml-rpc (tested using jdk 1.4 
			 on equinx foundation) or jdk5rmi (requires server to be running on jre 1.5+).  The protocol that the transports 
			 use is what distinguishes them, and is a required field of the server's transport extension point.  By default 
			 xmlrpc is used as a transport layer, this can be changed by setting the system property '-Dorg.eclipse.equinox.jmx.server.protocol=xxxx' 
			 prior to launching the application.
		</div>

		<div class="homeitem3col">
			<h3>Client Side - Connecting and Viewing the Server's Exposed Resources</h3>
			The client plugin contributes a perspective that is used to connect and view a server's exposed resources 
			(object exposed by ContributionProviders).  A walkthrough of connecting to the server is provided on the 
			main page; what follows will be a brief explanation of the client transports.  Like the server's transport 
			extension point, the client also defines a similar transport extension point.  By plugging in the transport that 
			matches the one used by the server, a successful connection may be established.  The connection dialog 
			exposes the installed transport plugins and lists them alongside the host to connect to as the protocol to be used.
		</div>

		<div class="homeitem3col">
			<h3>Architecture</h3>
			The most important concept to understand when attempting to extend the functionality is the relationship 
			between ContributionProvider -> Contribution -> ContributionProxy.  A ContributionProvider is derived from 
			Contribution, and Contribution classes know how to create a ContributionProxy.  Instances of Contribution 
			reside solely on the server and are registered as objects which may be remotely managed.  In order to 
			expose the functionality of a Contribution to clients, ContributionProxy instances are created which are 
			a serialized representation of a Contribution.
		</div>

		<div class="homeitem3col">
			<h3>TODO</h3>
				<ul>
					<li>Dynamic view plugins for the client that are associated with a clients' Contribution, these custom views 
						would replace the current view which displays an objects exposed operations and minimal description of 
						its properties.</li>
					<li>Investigate exceptions w.r.t installing/uninstalling contribution providers during runtime - was 
						unable to reproduce (Rob 04/28/2006).</li>
				</ul>
		</div>
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
