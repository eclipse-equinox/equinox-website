<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, aspects";
	
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

<p class=bar>Latest news</p>

<p>
  <b>May 1 2009</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14" />
  Milestone 7 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>

<p>
  <b>Mar 14 2009</b> -
  Milestone 6 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>

<p>
  <b>Jan 30 2009</b> - 
  Milestone 5 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>
<!--
<p>
  <b>Dec 12 2008</b> - 
  Milestone 4 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>

<p>
  <b>Oct 31 2008</b> - 
  Milestone 3 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>

<p>
  <b>Sep 19 2008</b> - 
  Milestone 2 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>

<p>
  <b>Aug 08 2008</b> - 
  Milestone 1 for Equinox Aspects 1.0 is there! You can get it at the
  <a href="equinox-aspects-downloads.php">Downloads</a>.
</p>

<p>
  <b>Jun 13 2008</b> -
  We reworked this website and created an up-to-date <a href="equinox-aspects-quick-start.php">
  quick-start guide</a> including a <a href="downloads/demo/equinox-aspects-demo-hello.zip">"Hello world!" demo</a>. We are looking forward to getting your feedback ...
</p>
-->
  
<p class=bar>Mission Statement</p>
<p>Aspect-oriented computing is continuing to increase in popularity. The modularity
  inherent in OSGi and Eclipse offers unique opportunities for managing and applying
  aspects by supplying them in bundles and directing their application to particular
  sets of bundles. This incubator work area is dedicated to delivering an integration
  of aspects and OSGi.</p>
<!--
<p>The first step will be implement load-time aspect weaving for the platform runtime
  to allow bundles to contribute aspects to the running system. Those aspects would be
  woven into other bundles (if required and defined) at class-loading time.</p>
-->
<p>The goal is to allow developers to use the Equinox together with
  AspectJ by combining the benefits of both worlds. Using a load-time weaving extension
  you are able to add AspectJ aspects to your bundle-based system just by putting them
  into general OSGi bundles. It does not matter if the pointcuts you defined inside the
  aspects contain join points that are defined by classes within the same bundle or any
  other bundle in your installation. The load-time weaving extension will take care that
  your aspects are woven with the appropriate classes at load-time.</p>
<p>To illustrate this lets assume the following situation: You would like to write an
  aspect that traces something within the JDT plug-ins of Eclipse. Without some kind of
  load-time aspect weaving you would somehow need to recompile those JDT plug-ins using
  AJDT (for example) together with your aspect. By using the load-time aspect weaving
  extension all you need is to implement your aspect and add that bundle to your system.
  The load-time aspect weaving extension takes care of weaving your aspect with the
  JDT code as it is loaded. And it doesn't matter if a new JDT is installed by the user
  later on. The next time your application is started the load-time aspect weaving will
  take care of weaving your aspect into these bundles as well, if necessary.</p>
<p>With this technology is becomes possible to modularize crosscutting concerns across
  different plug-ins while keeping the idea of separate compilation for bundles.</p>

<p class=bar>Goals</p>
<p><b>Provide Runtime Modularity and Versioning for Crosscutting Concerns:</b> Aspects are used to implement crosscutting concerns. However such concerns usually comprise of interfaces, classes and configurations as well as at least one aspect. OSGi bundles provide an ideal mechanism for packaging and applying crosscutting concerns. Aspects can also provide a new interface to existing functionality: rather than explicitly invoking a security API methods that require authorization can be selected using pointcut or identified using an annotation.
<p><b>Facilitate the Independent Delivery of Crosscutting Capability:</b> Traditionally AspectJ applications have been compiled and woven at the same time. This produces a complete application with no special requirements other than a dependence on the AspectJ runtime which can be executed on any JVM. However this monolithic approach prevents elements of the application and the aspects themselves from evolving separately. An aspect-enabled OSGi allows an application to be deployed and maintained as a set of components which implement both core and crosscutting capability.

<!--
<p class=bar>Events</p>
<p>Both investigators plan to be at EclipseCon 2007. If you want to learn more 
about AspectJ please register for the <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3575"/>tutorial</a>.
Also why not vote for the proposed long talk: <a href="http://eclipsezilla.eclipsecon.org/show_bug.cgi?id=3848"/>
AOP and OSGi - A Marriage Made in Heaven</a>.
<p>Here are the slides from EclipseCon 2006:
<ul>
<li>Demo: Integrating Load-Time Weaving into OSGi (<a href="EclipseCon2006-DemoIntegratingLoadTimeWeavingIntoOSGi.ppt">slides, ppt</a>)</li>
</ul>
-->

<!--
<p class="bar">Current Activities</p>
<ul>
<li><b>Building a load-time weaving runtime extension</b><br/>
  We are currently trying to unify two slightly different implementautions of load-time aspect
  weaving for the Eclipse runtime: <a href="http://sourceforge.net/projects/ajeer">AJEER</a> and AOSGi (internal IBM implementation).
  Read more about <a href="comparison_ajeer_aosgi.php">how these two approaches relate to each other</a>.
</li>
</ul>
</p>
-->

<p class=bar>Active investigators</p>
<ul>
  <li>Martin Lippert (it-agile)</li>
</ul>

<p class=bar>Inactive investigators</p>
<ul>
  <li>Matthew Webster (IBM)</li>
  <li>Heiko Seeberger (WeigleWilczek)</li>
</ul>

<p>&nbsp;</p>

</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include "component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
