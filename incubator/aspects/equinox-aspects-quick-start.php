<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects - Quick-start Guide";
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

<p>The following steps are intended to help you getting started with Equinox Aspects. Please also take a look at the <a href="downloads/equinox-aspects-hello-world_1.1.0.zip">"Hello world!"</a> demo (from the link for from CVS) which is used as an example at some points.</p>

<p class=bar>Setting up your development environment</p>

<p>
The following applies to the latest release of Equinox Aspects.
Currently this is version 1.1.0 which is compatible to Equinox 3.3.2 and 
AJDT 1.5.2 / AspectJ 1.6.0.
</p>

<ol>
  <li>Install <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.3.2-200802211800/index.php">Eclipse 3.3.2 SDK</a>.</li>
  <li>Install <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/33/update/ajdt_1.5.2_for_eclipse_3.3.zip">AspectJ Development Tools (AJDT) 1.5.2</a>.</li>
  <li>Download <a href="downloads/org.aspectj.osgi-incubation-1.1.0-archive.zip">Equinox Aspects 1.1.0</a>.</li>
  <li>Equinox Aspects comes without any tooling, thus there is no need to install it into your development environment (SDK). We strongly recommend to use a custom target platform inside your workspace as described in the next section. But if you prefer to mix your SDK with Equinox Aspects you could extract the downloaded archive into your SDK installation.
  </li>
</ol>

<p class=bar>Setting up a workspace local target platform</p>

<p>
These steps are highly recommended. If you installed Equinox Aspects into your SDK you could skip them.
</p>

<ol>
<li>Create a "general" project (a folder), e.g. <i>org.eclipse.equinox.aspects.demo.target</i>.</li>
<li>Copy all bundles which are required for your application into this target project, e.g. into a <i>plugins</i> directory. For Equinox Aspects the following bundles make up the minimal target:
<ul>
<li>org.eclipse.osgi</li>
<li>org.aspectj.osgi (Must be co-located with the system bundle!)</li>
<li>org.aspectj.osgi.service.weaving</li>
<li>org.aspectj.runtime</li>
<li>org.aspectj.weaver</li>
<li>Optionally: org.aspectj.osgi.service.caching</li>
<li>Optionally: org.aspectj.osgi.service.caching.j9</li>
</ul>
</li>
<li>Create a target definition (File>New>...) in the target project root, e.g. <i>default.target</i>.</li>
<li>On the first tab (Overview) of the target definition editor select the above directory containing your application's bundles as <i>Target Location</i>.</li>
<li>On the second tab (Content) check <i>Include all plug-ins form the specified target</i>.</li>
<li>Set your workspace local target platform by clicking the link <i>Set as Target Platform</i> in the upper right corner of the editor.</li>
</ol>

<p>
If you are planning to support different target platforms, e.g. with different versions of your bundles, you could also apply a version-based naming scheme to the above directory and target definintion.
</p>

<p>For the Hello world demo the target project looks like this:</p>
<img src="images/hello-target.png" border="1" />

<p class=bar>Configuring your aspect bundle</p>

<p>
There is nothing special about non-aspect bundles in Equinox Aspects. Your aspect-bundles however need some special treatment:
</p>

<ol>
<li>Export all packages containing aspects you want to be woven into other bundles, e.g. <i>org.eclipse.equinox.aspects.demo.hello.aspects</i>.</li>
<li>Put your <i>aop.xml</i> file into an exported package, if you want to weave other bundles. Best practice: Always use <i>org.aspectj</i> as package name, as this name also has to be provided as a system property for runtime (later).</li>
<li>Use <i>Require-Bundle</i> to declare a dependency on <i>org.aspecj.runtime</i> (AJDT will prompt for that when applying the AspectJ nature: Click OK!) and re-export this dependency.</li>
<li>Use the extended manifest header <i>Eclipse-SupplementBundle</i> to declare the target bundles for weaving, e.g. <i>Eclipse-SupplementBundle: org.eclipse.equinox.aspects.demo.hello</i>.
</ol>

<p>For the Hello world demo the bundle manifest looks like this:</p>
<img src="images/hello-aspect-manifest.png" border="1" />

<p class=bar>Configuring your runtime</p>
<ol>
<li>Tell Equinox to use <i>org.aspectj.osgi</i> as framework extension using the system property <i>osgi.framework.extensions=org.aspectj.osgi</i>.</li>
<li>Tell Equinox Aspects where to look for aop.xml files using the system property <i>org.aspectj.weaver.loadtime.configuration=org/aspectj/aop.xml</i>.</li>
<li>The weaving service (bundle <i>org.aspectj.osgi.service.weaving</i>) has to be started before classes are loaded from any bundles targeted for weaving.</li>
</ol>

<p>&nbsp;</p>

<p>For the Hello world demo applying all these steps will result in printing "Hi from HelloAspect ;-)" when the bundle <i>org.eclipse.equinox.aspects.demo.hello</i> is started (after the weaving service).</p>
<img src="images/hello-run.png" border="1" />

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
