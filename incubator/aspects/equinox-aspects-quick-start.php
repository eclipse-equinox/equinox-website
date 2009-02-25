<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects &#8211; Quick-start guide";
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

<p>
	The following steps are intended to help you getting started with Equinox Aspects. Please also take a look at the <a href="http://www.eclipse.org/equinox/incubator/aspects/downloads/demo/equinox-aspects-demo-hello.zip">"Hello world!" demo</a> (from the link for from CVS) which is used as an example at some points.
</p>
<p>
	The following applies to the latest (milestone or development) build of Equinox Aspects which is compatible to Equinox 3.4 and AJDT/AspectJ 1.6.
</p>

<p class="bar">
	Set up your development environment
</p>
<ol>
	<li>Install <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.4-200806172000/index.php">Eclipse 3.4 SDK</a>.
	</li>
	<li>Install the latest version of AJDT from the <a href="http://download.eclipse.org/tools/ajdt/34/dev/update">AJDT update site</a>.
	</li>
	<li>Download the latest build of <a href="http://www.eclipse.org/equinox/incubator/aspects/downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip">Equinox Aspects</a>.
	</li>
	<li>Equinox Aspects comes without any tooling, so you don't need install it into your development environment (SDK).
		
		<p class="inset"><b>Note:</b> We strongly recommend that you keep your SDK installation and Equinox Aspects separate by creating a custom target platform local to your workspace (see next section). However, if you prefer to mix your SDK with Equinox Aspects, you can extract the downloaded archive into your SDK installation and skip the next section.</p>
	</li>
</ol>
<p class="bar">
	Set up a (workspace-local) target platform
</p>
<ol>
	<li>Create a "general" project (a folder), e.g. <i>org.eclipse.equinox.weaving.demo.target</i>.
	</li>
	<li>Copy all bundles which are required for your application into this target project, e.g. into a <i>bundles</i> directory. For Equinox Aspects the following bundles make up the minimal target:
		<ul>
			<li>
				<i>org.eclipse.osgi</i> (The system bundle)
			</li>
			<li>
				<i>org.eclipse.equinox.weaving.hook</i> (Must be co-located with the system bundle!)
			</li>
			<li>
				<i>org.eclipse.equinox.weaving.aspectj</i>
			</li>
			<li>
				<i>org.aspectj.runtime</i>
			</li>
			<li>
				<i>org.aspectj.weaver</i>
			</li>
			<li>Optionally: <i>org.eclipse.equinox.weaving.caching</i>
			</li>
			<li>Optionally: <i>org.eclipse.equinox.weaving.caching.j9</i>
			</li>
		</ul>
	</li>
	<li>Create a target definition (File&gt;New&gt;...) in the target project root, e.g. <i>default.target</i>.
	</li>
	<li>On the first tab (Overview) of the target definition editor select the above directory containing your application's bundles as <i>Target Location</i>.
	</li>
	<li>On the second tab (Content) check <i>Include all plug-ins form the specified target</i>.
	</li>
	<li>
			<i>(Optional)</i> If you want to use this target platform for your whole workspace, click the link <i>Set as Target Platform</i> in the upper right corner of the editor. If instead you want to use Equinox Aspects in selected launch configurations only, add the required bundles listed above to the target platform in the respective launch configuration dialog.
		</p>
	</li>
</ol>
<p class="inset"><strong>Supporting different target platforms:</strong>
	If you are planning to support different target platforms, e.g. with different versions of your bundles, you could also apply a version-based naming scheme to the above directory and target definintion.
</p>
<p>
	For the "Hello world!" demo the target project looks like this:
</p><img src="./Equinox%20Aspects%20-%20Quick-start%20guide_files/hello-target.png" border="1" />


<p class="bar">
	Configure your aspect bundle
</p>
<ol>
	<li>Export all packages containing aspects you want to be woven into other bundles, e.g. <i>org.eclipse.equinox.weaving.demo.hello.aspects</i>.
	</li>
	<li>Use <i>Require-Bundle</i> to declare a dependency on <i>org.aspectj.runtime</i> <!-- (AJDT will prompt for that when applying the AspectJ nature: Click OK!) --> and re-export this dependency.
	</li>
	<li>Put your <i>aop.xml</i> file into the META-INF directory (look at the "Hello world!" demo for an example aop.xml file).
			<p class="inset">You can specify a different location using the special <i>Eclipse-AspectContext</i> manifest header.</p>
	</li>
</ol>
<p>
	For the "Hello world!" demo the bundle manifest looks like this:
</p><img src="./Equinox%20Aspects%20-%20Quick-start%20guide_files/hello-aspect-manifest.png" border="1" />

<p class="bar">
	Declare dependencies between aspect bundles and target bundles
</p>
<p>
	There are two ways to tell Equinox Aspects which bundles (both the aspect bundles and the target bundles) shall be woven.
</p>
<ul>
	<li><strong>Either</strong> you use the special manifest header <i>Eclipse-SupplementBundle</i> in the aspects bundle to declare the target bundles for weaving, e.g. <tt>Eclipse-SupplementBundle: org.eclipse.equinox.weaving.demo.hello</tt> (like in the "Hello world!" demo manifest above).
	</li>
	<li><strong>Or</strong> you require the aspect bundle(s) in the target bundle's manifest, e.g. <tt>Require-Bundle: org.eclipse.equinox.weaving.demo.hello.aspects</tt>.
		</li>
</ul>
<p>
	Effectively this means you can make the dependency between aspect and target bundles in the direction you prefer.
</p>

<p class="bar">
	Configure your runtime
</p>
<ol>
	<li>Tell Equinox to use <i>org.eclipse.equinox.weaving.hook</i> as a framework extension (in the "VM arguments" of your launch configuration, add <tt>-Dosgi.framework.extensions=org.eclipse.equinox.weaving.hook</tt>).
	</li>
	<li>The AspectJ weaving service (bundle <i>org.eclipse.equinox.weaving.aspectj</i>) must be started before any classes are loaded from any bundles targeted for weaving.
	</li>
</ol>
<p>
	For the "Hello world!" demo, applying all these steps will result in printing "Hi from HelloAspect ;-)" when the bundle <i>org.eclipse.equinox.weaving.demo.hello</i> is started (after the AspectJ weaving service).
</p><img src="./Equinox%20Aspects%20-%20Quick-start%20guide_files/hello-run.png" border="1" />


<p class="bar">
	Done!
</p>

<p>You should now be able to implement your aspects.</p>

<p class="inset">
	<strong>What next?</strong><br />
	Have a look at the example projects in the CVS (equinox-incubator/aspects/demos).
</p>

<p class="inset">
	<strong> Using Equinox Aspects with Eclipse Applications and JUnit Plugin Tests:</strong> (Eclipse 3.4)<br />
	To ensure that the weaving service bundle is started early enough, you need to <a href="http://www.nabble.com/Weaving-into-JUnit-Plug-in-Test-with-Equinox-Aspects--tt21054706.html">use a custom config.ini</a>: Add the aspect bundles and set their start level to something smaller than the weaving target bundles.					
</p>

<p>
	&nbsp;
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
