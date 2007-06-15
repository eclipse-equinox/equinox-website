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
the <a href="http://download.eclipse.org/eclipse/equinox/">download site</a> or look in your Eclipse install for a file like &lt;install
location&gt;/eclipse/plugins/org.eclipse.osgi_3.2.0_xxx.jar. Once you have the Equinox
framework JAR, use the following command line:</p>
<pre>  java -jar org.eclipse.osgi_3.2.0.jar -console</pre>
<p>Once this is running you will see an osgi&gt; prompt. This is the OSGi console waiting for you to type commands.  
Type '?' at the prompt for command help.  The most interesting commands for getting started are:
<ul>
<li>install &lt;bundle URL&gt; - Installs the bundle from the given URL</li>
<li>start &lt;bundle # or bundle name&gt; - Starts the bundle with the given numeric or symbolic id</li>
<li>stop &lt;bundle # or bundle name&gt; - Stops the bundle with the given numeric or symbolic id</li>
<li>ss - Reports a summary status of all installed bundles</li>
<li>diag &lt;bundle # or bundle name&gt; - Reports any resolution problems for the bundle with the given numeric or symbolic id</li>
</li>
</p>

<p>If you don't have Eclipse and just want OSGi, click <a href="http://download.eclipse.org/eclipse/equinox/">here</a> to get the JAR from the 
Equinox download site. </p>
<p class=bar>Configurations and all that...</p>
<p>The Equinox OSGi implementation is extremely configurable. One of the most
  common configuration scenarios is to have the framework automatically install
  and run a set of bundles when it is started. You do this every time you run
Eclipse the IDE. Here's how it works and how you can use it in your situation.</p>
<p>Say you have bundles B1.jar and B2.jar that you want to have installed and
  started when Equinox is run. As with other OSGi implementations, you can run the framework
  (see
above) and install and start B1 and B2 using the console. This is a manual process
  but you need only do it the first time you run Equinox (OSGi frameworks remember the installed and
  started bundles from run to run).  To do something
    completely automated, create a <em>configuration</em> that
    lists B1 and B2 as bundles to be installed and started. Set up
  something like</p>
<pre>somedir/
  configuration/
    config.ini
  org.eclipse.osgi_3.2.0.jar
  B1.jar
  B2.jar</pre>
<p>Where config.ini is a Java properties file that contains the following line.
  Note that the osgi.bundles property is quite powerful. See the doc for details. </p>
<pre>  osgi.bundles=B1.jar@start, B2.jar@start
  eclipse.ignoreApp=true
</pre>
<p>When Equinox is started using the command line above, B1 and B2
  are installed and started. If you want to specify a different configuration,
  just add -configuration &lt;location&gt; to the command line. Notice that since
  you are just running your bundles, we added a line to tell Equinox to skip
  trying to start an Eclipse application. This setting is not critical but without
  it a scary but otherwise inoccuous message appears in your log. For more information
    on the set of command-line args and system properties available
    to set things
  up, see </p>
<blockquote>
  <p>
    <a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/misc/index.html">http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/misc/index.html</a></br>
    <a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/misc/runtime-options.html">http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/misc/runtime-options.html</a>
  </p>
</blockquote>
<p>Now, if you want to make things even easier, you can add in a few Eclipse
  bundles (i.e., org.eclipse.equinox.common and org.eclipse.update.configurator).
  This gives you automatic bundle discovery/install.  Set up something like</p>
<pre>somedir/
  configuration/
    config.ini
  org.eclipse.osgi_3.3.0.jar
  org.eclipse.equinox.common_3.3.0.jar
  org.eclipse.update.configurator_3.2.100.jar
  plugins/
    B1.jar
    B2.jar</pre>
<p>Add these bundles on the osgi.bundles list in your config.ini as follows:</p>
<pre>  osgi.bundles=org.eclipse.equinox.common@2:start, org.eclipse.update.configurator@3:start</pre>
<p>When the Update configurator bundle starts, it automatically discovers and installs all the bundles in the <em>plugins</em>
directory that is beside the Equinox JAR.  Note that the configurator does not automatically start these bundles.</p>
<p>Finally, if version 3.3 is used, you can add the equinox launcher to your configuration.  The equinox launcher comes in 3 pieces: the native
executable (eclipse.exe), a shared library (eclipse_1017.dll) and the launcher jar (org.eclipse.equinox.launcher_1.0.0.jar).  
The executable lives in the root of the eclipse install.  The shared library is in a platform specific fragment 
(i.e. org.eclipse.equinox.launcher.win32.win32.x86).  The shared library and the launcher jar live in the <em>plugins</em> directory. 
Set up something like</p>
<pre>somedir/
  configuration/
    config.ini
  eclipse.exe
  plugins/
    org.eclipse.equinox.common_3.3.0.jar
    org.eclipse.equinox.launcher.win32.win32.x86_1.0.0/
      eclipse_1017a.dll
      [other launcher fragment content]
    org.eclipse.equinox.launcher_1.0.0.jar
    org.eclipse.osgi_3.3.0.jar
    org.eclipse.update.configurator_3.2.100.jar
    B1.jar
    B2.jar</pre>
<p>When the equinox launcher is used all bundles (including the framework org.eclipse.osgi) must be placed in the
plugins directory which is beside the native executable (eclipse.exe).  The equinox launcher is configured by default to 
run an eclipse application.  If an eclipse application is not found then the OSGi framework is shutdown and equinox will exit.  
To prevent this another property must be added to the config.ini (osgi.noShutdown=true).  The final config.ini will look like this.</p>
<pre>  osgi.bundles=org.eclipse.equinox.common@2:start, org.eclipse.update.configurator@3:start
  eclipse.ignoreApp=true
  osgi.noShutdown=true
</pre>
<p>
Once this is set up you can start equinox with the console using the following command line:
</p>
<pre>  eclipse -console</pre>
<p>The steps above should get you running with a reasonably flexible configuration of Equinox and a collection of bundles.  
Eclipse and Equinox offer a significant set of extensibilty and configuration options that are beyond the scope 
of a getting started document (e.g., extension registry, application model, shared installs, ...).  
To use the full power of Eclipse, look at how the Eclipse IDE and RCP applications are structures and 
check out the Help system links above as well as</p> 
<blockquote>
  <p>
    <a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/misc/multi_user_installs.html">http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/multi_user_installs.html</a>
  </p>
</blockquote>
  <p>For those who are interested in some of the Eclipse extensions to OSGi, see</p>
<blockquote>
  <p><a href="http://help.eclipse.org/help32/topic/org.eclipse.platform.doc.isv/reference/misc/bundle_manifest.html">http://help.eclipse.org/help31/topic/org.eclipse.platform.doc.isv/reference/misc/bundle_manifest.html</a></p>
</blockquote>
<p>Most of these facilities are experimental. Some general and have been proposed
      for inclusion in the OSGi R4.1 or R5 specifications while others are Eclipse-specific. All were put in place to solve
      real problems that we (or our consumers) were having. You may be having related problems.</p>

<p class=bar>Other Information</p>
<ul>
  <li>The Eclipse SDK includes some very sophisticated tooling for defining,
    developing, debugging, building and deploying bundles. To use this tooling
    run the SDK and mentally replace the word &quot;Plugin&quot; with &quot;Bundle&quot; in all the
    menu/wizard entries. For example, File &gt; New &gt; Plugin Project creates a project
    suitable for coding OSGi bundles. The &quot;Plugin Editor&quot; is really a bundle
    editor with some extra support for Eclipse constructs such as the Extension
    registry.</li>
  <li>Log bug reports in the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Equinox&version=3.3&component=Framework&priority=P3&bug_severity=normal&bug_status=NEW&assigned_to=&cc=&bug_file_loc=&short_desc=&comment=&form_name=enter_bug">Equinox/Framework
      component</a></li>
  <li>Questions and comments should go in the <a href="news://news.eclipse.org/eclipse.technology.equinox">equinox</a> newsgroup.</li>
  <li>Development questions can go to <a href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a>.</li>
</ul>
<p>&nbsp;</p>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/documents/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
