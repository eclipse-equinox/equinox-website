<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Server-Side Equinox";
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

<p class=bar>Overview</p>
<p>Eclipse is in use on the desktop in tools and <a href="http://eclipse.org/rcp">RCP</a> applications. The <a href="http://eclipse.org/ercp">eRCP</a> and
  other projects are pushing it into mobile phones and handheld devices. Now
  there is significant interest in Equinox on the server. This project
  is targetted at eliminating barriers to using and integrating OSGi (and Equinox
  more specifically) on
  the server.</p>
<p>The work detailed here evolved out of the server-side work in the <a href="http://eclipse.org/equinox/incubator">Equinox
  Incubator</a>. See the <a href="proposal.php">incubator
    proposal</a> for
  some historical perspective. From time to time there will continue to be
    some additional work that is incubated before being moved to one
    of the main Equinox components. Note also that this work makes heavy use
    of third-party libraries such as Jetty and Jasper as well as various API
    packages. These bundles are all maintained as part of the <a href="http://eclipse.org/orbit">Orbit</a> project.</p>

<p class=bar>Working with server-side Equinox</p>
<p><strong><a href="http_quickstart.php">Quick Start</a></strong> - 
See the quick start guide for getting up and running with Equinox on the server.</p>
<p><strong><a href="http_in_container.php">Embedding Equinox in a Servlet Container</a></strong> - 
Using the servletbridge to allow us to run OSGi based web applications in a servlet container.</p>
<p><strong><a href="http_in_equinox.php">Embedding an HTTP server in Equinox</a></strong> - 
Looking at what options there are for embedding an HttpService implementation in Equinox.</p>  



<p class=bar>Server-side Bundles</p>
<p>The Server-side work component consists of several bundles maintained in Eclipse
  CVS repository projects. See the <a href="../bundles/resources.php">resources</a> page
  for information on repository location and access. Note that some of the
  bundles listed here are actually part of other projects (e.g., Orbit). In general
  the name of the project matches the symbolic name of the resultant bundle.</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="http" id="http"></a>HTTP service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http">org.eclipse.equinox.http</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    An implementation of the OSGi R4 HTTP service.</td>
  </tr>
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td width="98%"><b><a name="http.registry" id="http.registry"></a>HTTP registry (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http.registry">org.eclipse.equinox.http.registry</a>)</b> </a><A HREF="#legend" style="color:green;">status:green</a><br>
      Support for registering servlets, resources and JSPs via the Eclipse extension
        registry rather than using the code based OSGi registration mechanisms.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="servletbridge" id="servletbridge"></a>Servlet Bridge (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.servletbridge">org.eclipse.equinox.servletbridge</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    Low level hook servlet installed in an existing traditional application server.
      This servlet launches an embedded Equinox and enables it to handle incoming
      HTTP requests originally sent to the underlying server.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="http.servlet" id="http.servlet"></a>HTTP Servlet (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http.servlet">org.eclipse.equinox.http.servlet</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    Generic support for exposing another servlet facility (e.g., an underlying
      application server) as an OSGi HTTP service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="http.servletbridge" id="http.servletbridge"></a>HTTP ServletBridge
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http.servlet">org.eclipse.equinox.http.servletbridge</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    A thin layer that exposes an underlying application server (e.g., Tomcat
    or Jetty) as an
      OSGi HTTP
      service. The underlying server must have the <a href="#servletbridge">servlet
      bridge</a> installed.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="servlet" id="servlet"></a>Servlet API (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.orbit/javax.servlet/?cvsroot=Tools_Project">javax.servlet</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    A bundled version of the standard Servlet API. Multiple versions of this
      API are maintained. This bundle is maintained in <a href="http://eclipse.org/orbit">Orbit</a>.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="jsp" id="jsp"></a>Servlet JSP API (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.orbit/javax.servlet.jsp/?cvsroot=Tools_Project">javax.servlet.jsp</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    A bundled version of the standard Servlet JSP API. Multiple versions of this
      API are maintained. This bundle is maintained in <a href="http://eclipse.org/orbit">Orbit</a>.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="jetty" id="jetty"></a>Jetty (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.orbit/org.mortbay.jetty/?cvsroot=Tools_Project">org.mortbay.jetty</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    A bundled version of the embedded Jetty application server. This bundle is
      maintained in <a href="http://eclipse.org/orbit">Orbit</a>.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="http.jetty" id="http.jetty"></a>HTTP Jetty (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.jetty.http">org.eclipse.equinox.http.jetty</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    A thin layer that exposes an embedded Jetty server as a compliant OSGi HTTP
      service.</td>
  </tr>
</table>
<p><A name="legend"> </A><b>Status key</b><br>
  <FONT COLOR="GREEN">green</font> - bundle is production ready. <br>
  <FONT COLOR="red">red</font> - bundle development is in progress. </p>
<p>The team typically develops using Eclipse itself so getting and managing the
  projects is quite straightforward. Simply start Eclipse, and use <strong>Import &gt; CVS &gt; Projects
  from CVS</strong>. Enter the repo access information and choose the projects
  you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>

<p class=bar>Incubator - Current Activity</p>
<p>From time to time new server side work will be incubated in the general Equinox
  incubator.</p>

<ul>
<li><b><a href="eclipse_serverside_integration.php">Improving Eclipse / Server-Side Integration</a></b><br />
<i>Helping to make Eclipse a stronger platform for server-side integration.</i>
</li>
<li><b><a href="jsp_support.php">JSP Support</a></b><br />
<i>Enabling the use of JSP Support while retaining the modularity benefits of OSGi</i>
</li>
</ul>

<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/server/component-links.html";
	#include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
