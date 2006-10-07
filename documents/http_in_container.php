<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox in a Servlet Container";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server";
	
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
<h3>Overview</h3>
<p>One of the objectives in the initial proposal was to look at what's involved in launching
and interacting with various server-side containers. Currently, there is active work in the
equinox-incubator CVS looking at embedding in a servlet container.</p>

<p>There are three Eclipse projects involved:
<ul>
<li><b>org.eclipse.equinox.servlet.bridge.launcher (Bundle)</b><br />
<i>Launches the framework and provides a place for the framework to hook back into the servlet container.</i>
</li>
<li><b>org.eclipse.equinox.servlet.bridge.http (Bundle)</b><br />
<i>Hooks back into the servlet bridge and proxies through the servlet container to provide an OSGi Http Service.</i>
</li>
<li><b>org.eclipse.equinox.http.registry (Bundle)</b><br />
<i>Provides a servlet, resource, and httpcontext extension points based on an OSGi HttpService.</i>
</li>
</ul>
</p>
<p>These three project can be downloaded from the equinox incubator CVS depot. <br /> 
(e.g. cvsroot/eclipse/equinox-incubator/org.eclipse.equinox.servlet.bridge.launcher)
<p><b>Additional Notes: </b><ul style="list-style-type: none"><i>
<li>To build and use these projects you'll need to be running Eclipse 3.2 or later. </li>
<li>Since M5 there have been a number of naming changes and the extension schema is now more attribute based. 
See bugs 
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=128059">128059</a> and 
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=131480">131480</a>.
</li>
</ul>
</i></p> 

</div>

<div class="homeitem3col">
<h3>Quickstart</h3>
<p>This set of instructions should get you up and running in a just a few minutes.
<ol>
<li>Install a servlet container (e.g. <a href="tomcat.apache.org/">Tomcat</a>, <a href="jetty.mortbay.org/jetty/">Jetty</a>, or whatever is handy)</li>
<li>Download and deploy this pre-built web application archive. (<b><a href="downloads/bridge.war">bridge.war</a></b>) <i>[built 2006.07.21]</i></li>
<li>Start the web container and verify things are installed correctly by going to "/sp_test". (e.g. http://localhost:8080/bridge/sp_test)
</ol>
At this point you should begin familiarizing yourself with the use of the OSGi console to manage the platform.<br />
<p>Here are a couple of Eclipse projects that might help get you started using the OSGi Http Service:
<ul>
<li><b><a href="downloads/sample-http.zip">sample.http</a></b> - demonstrates basic Hello World type use of the OSGi Http Service</li>
<li><b><a href="downloads/sample-http-reg.zip">sample.http.registry</a></b> - same as sample.http but instead uses extension points from org.eclipse.equinox.http.registry</li>
</ul>
</p>
You might also see if you can install and start the http-console bundle described <b><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=122911">here</a></b>.
</div>

<div class="homeitem3col">
<h3>Configuration</h3>
<p>The servlet.bridge web.xml provides a couple of initial parameters:

<ul>
<li>
<strong>commandline</strong> Allows all non-VM command line parameterizations of Eclipse. <br />
The default value is "-console" to allow you to use the console to "experiment" with managing an active framework (e.g. installing, starting, stopping, 
uninstalling bundles etc.). Currently the console is configured to run directly off standard input/output of the
launching appserver's process.
</li>
<li>
<strong>enableFrameworkControls</strong> (true / false) - Controls whether or not the sp_* control URLs are accessible<br />
<ul>
<li>sp_deploy - Copies the contents of /platform to the install area (the servlet context tempdir is used - parameterizable someday)</li>
<li>sp_undeploy - Removes the copy of Eclipse from the install area</li>
<li>sp_redeploy - Resets the platform (e.g. stops, undeploys, deploys, starts)</li>
<li>sp_start - Starts a deployed platform</li>
<li>sp_stop - Stops the platform</li>
</ul>
These commands are available at http://yourhost/yourcontext/sp_command. ( for example, http://localhost/bridge/sp_stop )
</ul>
</p>

</div>

<div class="homeitem3col">
<h3>Extending</h3>
<p>Currently there are two approaches for extending the basic installation:
<ol>
<li>Write a bundle that uses the OSGi HttpService registered by org.eclipse.eqinox.servlet.bridge.http</li>
<li>Write a bundle that adds extensions from org.eclipse.equinox.http.registry</li>
</ol>
The functionality offered by either approach is very similar. The extension points in org.eclipse.equinox.servlet.ext are 
simply a mapping of the OSGi HttpService.
</p>

</div>

<div class="homeitem3col">
<h3>Build Information</h3>
<p><i>The current eclipse build tools and wizards do not directly support building this style of application so for the time being the
build is performed with a series of Ant scripts and resource templates</i> 
</p>

<p>At a high-level the idea is to create a WAR file structured as follows:
<ul style="list-style-type: none">
<li>/WEB-INF
 <ul style="list-style-type: none">
 <li>/web.xml (with one servlet entry assigning all incoming requests to the BridgeServlet)</li>
 <li>/lib/servletbridge.jar (the classes associated with the equinox.servlet.bridge.launcher)</li>
 <li><b>/platform (the eclipse dir)</b>
  <ul style="list-style-type: none">
  <li>launch.ini (contains framework properties that will allow override of any eclipse specific System Properties)
  <li>/configuration (contains config.ini which lists the bundles you want to have available)</li>
  <li>/features</li>
  <li>/plugins</li>
  </ul>
 </li>
 </ul>
</li>
</ul>
<p>The above structure is meant to be very close to an RCP application with the /platform directory
holding something similar to an RCP application (but naturally containing components more suitable
for server side interaction). </p>

A reasonable way to think of the build is to divide into two initial pieces:
<ol>
<li>The web-app portion (based on the servlet.bridge)</li>
<li>The eclipse portion</li>
</ol>
These two pieces should then be combined by placing the eclipse portion in the "/platform"
directory. <br />


<p>org.eclipse.equinox.servlet.bridge.launcher contains an ant script in "/scripts/webAppBuilder.xml" that can be used from the IDE
for constructing the war file structure above. (It can also be used for a head-less build by customizing various properties) 
Additionally "/tempates" provides the resource content like the web.xml, launch.ini, and config.ini which might also be customized.</p> 

<p>To create the WAR file's contents from the Quickstart section:
<ol>
<li>Synch the following projects from the equinox-incubator CVS site
	<ul>
	<li>org.eclipse.equinox.servlet.bridge.launcher</li>
	<li>org.eclipse.equinox.servlet.bridge.http</li>
	<li>org.eclipse.equinox.servlet.bridge.feature</li>
	<li>org.eclipse.equinox.http.registry</li>
	</ul>
</li>
<li>Right-Click on the webAppBuilder.xml script in the IDE and "Run Ant". <br />
<i>(Note: So that the pde.exportFeatures task is available in the IDE select 
"Run in the same JRE as the workspace" on the JRE tab from "Run Ant..")</i></li>
</ol>
</p>

As with RCP applications there are a wide variety of possible configurations. What's given
in org.eclipse.equinox.servlet.bridge.feature is just one possibility.</p>
<hr />
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

