<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Aspects - Getting Started";
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

<p class=bar>Getting Started</p>
<p>
<ol>
  <li>Install <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.3.1.1-200710231652/index.php">Eclipse 3.3 SDK</a>.</li>
  <li>Install <a href="http://www.eclipse.org/ajdt/downloads/">AspectJ Development Tools (AJDT) 1.5.1</a>.</li>
  <li>Install the AspectJ Equinox Framework Extension using
  either the update site <code>http://www.eclipse.org/equinox/incubator/aspects/downloads/update</code> or by
  downloading and unzipping <a href="downloads/org.aspectj.osgi-incubation-1.1.0-archive.zip">
  <code>org.aspectj.osgi-incubation-1.1.0-archive.zip</code></a>.</li>
<!--  
  <li>Check out the org.aspectj.osgi, org.aspectj.osgi.service.weaving and org.eclipse.osgi_3.2.0 bundles
  from the "aspects" folder in the <a href="http://www.eclipse.org/equinox/incubator/howto.php">incubator repository</a>
  and see the readme.txt in the org.aspectj.osgi project.
  Until we have a regular build and update site you will need to 
  use the org.aspectj.osgi Framework Extension bundle fragment in source form.
  Unfortunatley because of <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=143696">Bug 143696</a>
  you also need to use the source version of OSGi that matches the one in your Eclipse SDK.</li>
-->  
  <li>Check out all the projects in the "aspects/tests" folder
  in the <a href="http://www.eclipse.org/equinox/incubator/howto.php">incubator repository</a> 
  and see the readme.txt in the org.eclipse.osgi.aspectj.tests project for instructions on how 
  to run the basic tests.</li>
  <li>Check out all the projects in the "aspects/demos" folder 
  in the <a href="http://www.eclipse.org/equinox/incubator/howto.php">incubator repository</a> 
  to see the OSGi and Eclipse demos.
  Alternatively you can download and unzipping <a href="http://download.eclipse.org/tools/aspectj/dev/update/demo.aspectj.osgi_archive.zip">
  <code>demo.aspectj.osgi_archive.zip</code></a>
  and use "Import > Existing Projects into Workspace".</li>
</ol>
</p>

<p class=bar>Troubleshooting</p>
<p>When running the tests or a demo using the AO runtime you 
  should see console output similar to this:
<pre>
info adding AspectJ hooks ...
info Starting AspectJ weaving service ...
info not weaving bundle 'org.eclipse.pde.junit.runtime'
info not weaving bundle 'org.eclipse.jdt.junit.runtime'
info not weaving bundle 'org.junit'
info weaving bundle 'org.eclipse.osgi.aspectj.tests'
info not weaving bundle 'org.eclipse.osgi.aspectj.tests.bundles.spareBundle'
info not weaving bundle 'org.eclipse.osgi.aspectj.tests.bundles.aspectWeaving'
...
</pre>
If you don't see the messages that show the AspectJ Framework Extension starting 
then make sure you are using the config.ini provided. To control the amount of 
diagnostic information use the various system properties declared in that file.
You can also use the diagnostic configuration provided by 
<a href="http://www.eclipse.org/aspectj/doc/released/devguide/ltw-configuration.html#weaver-options">AspectJ LTW</a>.

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
