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

<!-- someday
<p class=bar>Quickstart</p>
<p>This set of instructions should get you up and running in a just a few minutes.</p>
<ol>
<li>Install a servlet container (e.g. <a href="tomcat.apache.org/">Tomcat</a>, <a href="jetty.mortbay.org/jetty/">Jetty</a>, or whatever is handy)</li>
<li>Download and deploy this web application archive. (<a href="bridge.war">bridge.war</a>)</li>
</ol>
-->


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

<p class="bar">Build Information</p>
<p><i>The current build tools do not directly support building this style of application so for the time being build instructions
are just descriptive. (A bug should be opened to track this once a stronger notion is developed for what sort of build infrastructure is required.)</i> 
</p>
<p><i>Note: To build and use these projects you'll need to be running Eclipse 3.2M4 or later.</i></p>
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
holding something similar to an RCP application (but naturally containing components more sutitable
for server side interaction). As with RCP applications there are a wide variety of possible
configurations and what's given in org.eclipse.equinox.servlet is just one possibility.</p>


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

<p class="bar">Getting Started</p>