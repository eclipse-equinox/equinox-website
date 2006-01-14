<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Container Specific Launchers</title>
<link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" href="../../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class="bar">Embedding in a Servlet Container - Overview</p>
<p>One of the objectives in the initial proposal was to look at what's involved in launching
and interacting with various server-side containers. Currently, there is active work in the
equinox-incubator CVS looking at embedding in a servlet container.</p>

<p>There are three Eclipse projects involved:
<ul>
<li><b>org.eclipse.equinox.servlet.bridge (Java)</b><br />
<i>Launches the framework and provides a place for the framework to hook back into the servlet container.</i>
</li>
<li><b>org.eclipse.equinox.servlet.http (Bundle)</b><br />
<i>Hooks back into the servlet bridge and proxies through the servlet container to provide an OSGi Http Service.</i>
</li>
<li><b>org.eclipse.equinox.servlet.ext (Bundle)</b><br />
<i>Provides a servlet, resource, and httpcontext extension points based on an OSGi HttpService.</i>
</li>
</ul>
</p>
<p>These three project can be downloaded from the equinox incubator CVS depot. <br /> 
(e.g. cvsroot/eclipse/equinox-incubator/org.eclipse.equinox.servlet.bridge)
<p><i>Note: To build and use these projects you'll need to be running Eclipse 3.2M4 or later.</i></p>

<p class=bar>Quickstart</p>
<p>This set of instructions should get you up and running in a just a few minutes.
<ol>
<li>Install a servlet container (e.g. <a href="tomcat.apache.org/">Tomcat</a>, <a href="jetty.mortbay.org/jetty/">Jetty</a>, or whatever is handy)</li>
<li>Download and deploy this pre-built web application archive. (<a href="bridge.war">bridge.war</a>)</li>
<li>Start the web container and verify things are installed correctly by going to "/sp_test". (e.g. http://localhost:8080/bridge/sp_test)
</ol>
At this point you should begin familiarizing yourself with the use of the OSGi console to manage the platform.<br />
Why not see if you can install and start the http-console bundle described <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=122911">here</a>.
</p>

<p class="bar">Configuration</p>
<p>The servlet.bridge web.xml provides a couple of initial parameters:

<ul>
<li>
<strong>enableConsole</strong> (true / false) - Controls whether or not the OSGi console is available.<br />
The console allows you to "experiment" with managing an active framework (e.g. installing, starting, stopping, 
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

<p class="bar">Extending</p>
<p>Currently there are two approaches for extending the basic installation:
<ol>
<li>Write a bundle that uses the OSGi HttpService registered by org.eclipse.eqinox.servlet.httpservice</li>
<li>Write a bundle that adds extensions from org.eclipse.equinox.servlet.ext</li>
</ol>
The functionality offered by either approach is very similar. The extension points in org.eclipse.equinox.servlet.ext are 
simply a mapping of the OSGi HttpService.
</p>

<p class="bar">Build Information</p>
<p><i>The current build tools do not directly support building this style of application so for the time being build instructions
are just descriptive. (A bug should be opened to track this once a stronger notion is developed for what sort of build infrastructure is required.)</i> 
</p>

<p>At a high-level the idea is to create a WAR file structured as follows:
<ul style="list-style-type: none">
<li>/WEB-INF
 <ul style="list-style-type: none">
 <li>/web.xml (with one servlet entry assigning all incoming requests to the BridgeServlet)</li>
 <li>/lib/servletbridge.jar (the classes associated with the equinox.servlet.bridge)</li>
 <li><b>/platform (the eclipse dir)</b>
  <ul style="list-style-type: none">
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
directory. 
<p>For example, org.eclipse.equinox.servlet.bridge has a simple ant script "projectbuilder.xml" that will create 
the war file structure above under org.eclipse.equinox.servlet.bridge/build/bridge. If you then create a 
feature project and matchup the bundles in config.ini you can export to /platform and have a working web-app identical
to the download in Quickstart.
</p>

As with RCP applications there are a wide variety of possible configurations. What's given
in org.eclipse.equinox.servlet is just one possibility.</p>
<hr />

