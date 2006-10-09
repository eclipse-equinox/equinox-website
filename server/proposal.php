<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Server-Side Proposal";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server, proposal";
	
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

<p class=bar>Server-Side Environment</p>

<p>Increasingly, developers are thinking about how they might use
Eclipse's powerful component model and extension mechanisms in
server-side environments. The possibility of a shared runtime that
allows the re-use of components between client and server motivates
some. Others see great promise in being able to safely modify the
components and configuration of software running in a live server environment. </p>
<p>Running Eclipse on the server will take a different mindset (and a fair bit
  of work) as it questions some of the design and implementation assumptions
  made and adds a number of additional constraints on Eclipse's running environment.
  For example, in a server-side environment: </p>
<ul>
	<li>You can make few assumptions on the control of global resources</li>
	<li>Your lifecycle is controlled externally</li>
	<li>You might be running for a very long time</li>
	<li>You're expected to integrate in a compliant fashion with other
	server elements</li>
</ul>

<p>The key goal of this incubator is to bring existing work together to
make exploration practical. The intent is to help foster solutions to the issues
  relating to integrating Eclipse with server-side technology. The initial
emphasis is on J2EE implementations but more specifically the following issues
  are to be addressed (this list will evolve):</p>
<ul>
	<li>Eclipse changes for server-side operation</li>
	<li>Container specific launchers</li>
	<li>Application Server Integration</li>
</ul>

<p class=bar>Eclipse Changes for Server-Side Operation</p>

<p>The Eclipse runtime was originally designed to run an IDE. It's a
testament to the runtime's versatility that Eclipse is now used in a
wide variety of RCP applications. Running on the server pushes this further and
raises issues such as:</p>
<ol>
	<li>The OSGi URL Handlers Service requires two singleton operations be
	set with an OSGi aware version
	<ul>
		<li>URL.setURLStreamHandlerFactory(…)</li>
		<li>URLConnection.setContentHandlerFactory(…)</li>
	</ul>
	</li>
	<li>The OSGi Conditional Permission Admin Specification requires the
	SecurityManager be set to an OSGi aware version</li>
	<li>Equinox uses System Properties for configuration properties, and as
	the container for BundleContext properties.</li>
</ol>
<p>For the first two items, a key challenge to be managed is the fact
that in many cases, J2EE app servers set these singletons before
Equinox starts. This makes it dangerous or impossible for Eclipse
to set them. The third item prevents Equinox from being
instantiated multiple times. </p>
<p>Tackling these issues will result in fairly large,
cross-cutting changes in Equinox that are very difficult to
resolve with individual patches. The goal for this area is to find a way to
make these changes without compromising compatibility with existing Eclipse
applications. Any changes will trace the HEAD very closely to facilitate integration.
Ideally these changes would occur in the 3.2 timeframe.</p>

<p class=bar>Container Specific Launchers</p>

<p>One way to think of the Eclipse IDE and RCP applications (in general) is that they
are started by the native executable launcher. For server-side environments,
Eclipse must be launched in a different manner. Initially, this area of the incubator
will focus on a launcher appropriate for embedding in a servlet container;
however, other launchers will be added over time. After the issues for this first environment
are addressed, other scenarios should be far easier to tackle.</p>

<p>
The code, build instructions, and usage instructions for the servlet
launcher will be part of the initial contribution for the incubator.
</p>

<p class=bar>Application Server Integration</p>
The Geronimo community has expressed some interest in OSGi. This incubator intends
to investigate what it means to integrate OSGi and Geronimo as well as any changes
to Equinox that might be required to support Geronimo. Integration with other
application servers is also of interest.

<p class=bar>Resources</p>
<p>Please direct comments or questions to <a
	href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a>.</p>


<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/server/component-links.html";
	include "dir-links.html";
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
