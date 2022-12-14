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

			<p class=bar>Terminology</p>
			<ul>
				<li><b>ContributionProvider</b>: Class which extends the server plugins' <code>org.eclipse.jmx.server.contribution</code> extension point.</li>
				<li><b>Contribution</b>: Classes that are instantiated by a <i>ContributionProvider</i>. Instances of <i>Contribution</i> 
					reside solely on the server and are registered with the server's mbean registry as dynamic mbeans.</li>
			</ul>

			<p class=bar>Server Side - Creating your own Contributor (Contribution Provider) plugin and Transport Layer</p>
			<p>
			Simple, create a plugin and extend the <code>org.eclipse.equinox.jmx.server.contribution</code> extension point.  Extending 
			this extension point requires you to define a class that is derived from <i>ContributionProvider</i> (more explanation 
			about deriving from this class will follow) and optionally declaring any classes which this contribution provider 
			knows how to 'extend'.
			</p>
			<p>
			The methods of note when deriving from <i>ContributionProvider</i> are the <i>providesType(Object)</i> and 
			<i>contributesType(Object)</i>; together these methods define what objects (children) of itself and/or other 
			contribution providers children (or contributions' children) it knows how to expose for remote management.
			</p>
			<p>
			By returning true for <i>providesType(Object)</i>, it is assumed that <i>createProvider(Object)</i> returns a 
			<i>ContributionProvider</i> that has been specialized with the object.  By returning true for <i>contributesType(Object)</i>, 
			it is assumed that the provider knows how to expose the particular object for remote management but has no 
			interest in extending that object for its own purposes.
			</p>
			<p>
			Pluggable transport providers provide a means for users to provide their own network transport layer 
			implementation and can be utilized by extending the <code>org.eclipse.equinox.jmx.server.provider</code> extension point. 
			 Currently, the project includes two transport plugins that users may use: apache xml-rpc (tested using jdk 1.4 
			 on equinox foundation) or jdk5rmi (requires server to be running on jre 1.5+).  The protocol that the transports 
			 use is what distinguishes them, and is a required field of the server's transport extension point.  By default 
			 xmlrpc is used as a transport layer, this can be changed by setting the system property <code>-Dorg.eclipse.equinox.jmx.server.protocol=xxxx</code>
			 prior to launching the application.
			 </p>

			<p class=bar>Client Side - Connecting and Viewing the Server's Exposed Resources</p>
			The client plugin contributes a perspective that is used to connect and view a server's exposed resources 
			(object exposed by ContributionProviders).  A walkthrough of connecting to the server is provided on the 
			main page; what follows will be a brief explanation of the client transports.  Like the server's transport 
			extension point, the client also defines a similar transport extension point.  By plugging in the transport that 
			matches the one used by the server, a successful connection may be established.  The connection dialog 
			exposes the installed transport plugins and lists them alongside the host to connect to as the protocol to be used.

			<p class=bar>Architecture</p>
			The most important concept to understand when attempting to extend the functionality is the relationship 
			between ContributionProvider -> Contribution -> ContributionProxy.  A ContributionProvider is derived from 
			Contribution, and Contribution classes know how to create a ContributionProxy.  Instances of Contribution 
			reside solely on the server and are registered as objects which may be remotely managed.  In order to 
			expose the functionality of a Contribution to clients, ContributionProxy instances are created which are 
			a serialized representation of a Contribution.

			<p class=bar>TODO</p>
				<ul>
					<li>Dynamic view plugins for the client that are associated with a clients' Contribution, these custom views 
						would replace the current view which displays an objects exposed operations and minimal description of 
						its properties.</li>
					<li>Investigate exceptions w.r.t installing/uninstalling contribution providers during runtime - was 
						unable to reproduce (Rob 04/28/2006).</li>
				</ul>
<p>&nbsp;</p>
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
