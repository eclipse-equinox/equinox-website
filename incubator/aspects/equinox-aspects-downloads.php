<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects - Downloads";
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

<p class=bar>Development Builds</p>

<p>
<a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip">org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip</a><br/>
</p>

<p>&nbsp;</p>

<p class=bar>Releases</p>

<p>
  Take a look at the <a href="http://wiki.eclipse.org/Equinox_Aspects_Plan">Equinox Aspects Release Plan Wiki</a>.
</p>

<p>&nbsp;</p>

<p class=bar>Demos</p>

<p>
<a href="downloads/equinox-aspects-hello-world_1.1.0.zip">Hello world! demo</a><br/>
This minimal demo shows how to use Equinox Aspects. It is also used for the <a href="equinox-aspects-quick-start.php">quick-start guide</a>.
</p>

<p>&nbsp;</p>

<p class=bar>Archived Builds</p>

<p>
<a href="downloads/org.aspectj.osgi-incubation-1.1.0-archive.zip">Release 1.1.0</a><br/>
This version of Equinox Aspects works with AJDT 1.5.1 as well as the development builds of
AJDT 1.5.2 and AJDT 1.6.0. This means also that Equinox Aspects works with Eclipse 3.3 and
the current Eclipse 3.4 milestone builds. Older versions of AJDT are not supported with this
release. Please let us know if you need Equinox Aspects for older AJDT versions.<br/>
This version delivers caching of woven bundles for non-IBM VMs for the first time. This means that you have
a caching bundle for standard Java VMs. This service was contributed by Heiko Seeberger.
Many thanks to Heiko for this great work!<br/>
In addition to the standard caching service this release includes a number of bug fixes and
stability improvements. See the readme.txt for details. As a side effect of the reworked
supplementing mechanism you no longer need to list aspect bundles in the config.ini and you
can even install aspects bundles dynamically at runtime.<br/>
<b>Special thanks</b> go to Heiko Seeberger and Wojciech Durczynski for bug reporting, testing and
last but not least great patch contributions!
</p>

<p>
<a href="downloads/org.aspectj.osgi_1.0.4_archive.zip">Release 1.0.4</a>
</p>

<p>
<a href="downloads/org.aspectj.osgi_1.0.3a_archive.zip">Release 1.0.3</a><br/>
This release, which is available from the update site or as a download, includes Phase I, 
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161020">Phase II</a> and 
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161023">Phase III</a> 
completing the first stage of the incubator. This code 
comprises an OSGi framework extension, tests and demos that allow you to create flexible
aspect-oriented applications using Eclipse and AJDT. These can be deployed as bundles, 
Eclipse plug-ins or an RCP application using a seemless 
<a href="http://www.eclipse.org/aspectj/">AspectJ</a> load-time weaving 
environment.
</p>

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
