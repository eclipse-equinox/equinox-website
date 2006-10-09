<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox QuickStart Guide";
	$pageKeywords	= "equinox, osgi, framework, runtime, resources, quick, start";
	
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
		
<p class=bar>Getting and using the Equinox OSGi implementation</p>
<p>The Equinox OSGi framework implementation forms the underpinnings of the Eclipse
RCP and IDE platforms but it is in fact a fully standalone OSGi implementation.
  To run Equinox OSGi on its own either download the org.eclipse.osgi JAR from
the download site or look in your Eclipse 3.1 or 3.2 install for a file like &lt;install
location&gt;/eclipse/plugins/org.eclipse.osgi_3.1.0.jar. Once you have the Equinox
framework, use the following command line:</p>
<pre>  java -jar org.eclipse.osgi_3.1.0.jar -console</pre>
<p>  You will then see an osgi&gt; prompt. Type '?' at the prompt for command help.</p>
<p>If you don't have Eclipse and just want OSGi, click <a href="http://download.eclipse.org/eclipse/equinox/">here</a> to get the JAR from the 
Equinox download site. </p>
<p class=bar>Configurations and all that...</p>
<p>The Equinox OSGi implementation is extremely configurable. One of the most
  common configuration scenarios is to have the framework automatically install
  and run a set of bundles when it is started. You do this every time you run
Eclipse the IDE. Here's how it works and how you can use it in your situation.</p>
<p>Say you have bundles B1.jar and B2.jar that you want to have installed and
  started on startup. As with other OSGi implementations, you can run the framework
  (see
above) and install and start B1 and B2 using the console. This is a manual process
  but you need only do it the first time you setup Equinox.  To do something
    completely automated, create a <em>configuration</em> that
    lists B1 and B2 as bundles to be installed and started. Set up
  something like</p>
<pre>somedir/
  org.eclipse.osgi_3.1.0.jar
  B1.jar
  B2.jar
  configuration/
    config.ini</pre>
<p>Where config.ini is a Java properties file that contains the following line.
  Note
that the osgi.bundles property is quite powerful. See the doc for details. </p>
<pre>  osgi.bundles=B1.jar@start, B2.jar@start
  eclipse.ignoreApp=true
</pre>
<p>When Equinox is started using the command line above, B1 and B2
  are installed and started. If you want to specify a different configuration,
  just
  add -configuration &lt;location&gt; to the command line. Notice that since
  you are just running your bundles, we added a line to tell Equinox to skip
  trying to start an Eclipse application. This setting is not critical but without
  it a scary but otherwise inoccuous message appears in your log. For more information
    on the set of command-line args and system properties available
    to set things
  up, see (note that several options have been added to 3.2 and that doc is currently
  only available in the full Eclipse SDK downloads).</p>
<blockquote>
  <p>  <a href="http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/runtime-options.html">http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/runtime-options.html</a></br>
  <a href="http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/index.html">http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/index.html</a></p>
</blockquote>
<p>Now, if you want to make things even easier, you can add in a few Eclipse
  bundles (i.e., org.eclipse.core.runtime and org.eclipse.update.configurator).
  This gives you an application model, automatic bundle discovery/install, extension
  registry, ... Standard Eclipse tooling configurations use this approach. See
  the Eclipse plug-in list for plug-ins that may be useful to you.</p>
<p>For those who are interested in some of the Eclipse extensions to OSGi, see</p>
<blockquote>
  <p><a href="http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/bundle_manifest.html">http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/bundle_manifest.html</a></p>
</blockquote>
<p>Most of these facilities are experimental. Some general and we will propose
      for OSGi R5, others are Eclipse-specific. All were put in place to solve
      real problems that we (or our consumers) were having. You may be having
related problems.</p>

<p class=bar>Other Information</p>
<ul>
  <li>The Eclipse SDK includes some very sophisticated tooling for defining,
    developing, debugging, building and deploying bundles. To use this tooling
    run the SDK and mentally replace the word &quot;Plugin&quot; with &quot;Bundle&quot; in all the
    menu/wizard entries. For example, File &gt; New &gt; Plugin Project creates a project
    suitable for coding OSGi bundles. The &quot;Plugin Editor&quot; is really a bundle
    editor with some extra support for Eclipse constructs such as the Extension
    registry.</li>
  <li>Log bug reports in the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Equinox&version=3.1&component=Framework&priority=P3&bug_severity=normal&bug_status=NEW&assigned_to=&cc=&bug_file_loc=&short_desc=&comment=&form_name=enter_bug">Equinox/Framework
      component</a></li>
  <li>Questions and comments should go in the <a href="news://news.eclipse.org/eclipse.technology.equinox">equinox</a> newsgroup.</li>
  <li>Development questions can go to <a href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a>.</li>
</ul>
<p>&nbsp;</p>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/documents/component-links.html";
	include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
