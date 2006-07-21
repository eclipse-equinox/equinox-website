<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Bundles";
	$pageKeywords	= "equinox, osgi, framework, runtime, bundles";
	
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
			<h3>Mission Statement</h3>
				<p>The Equinox Bundles component is tasked with implementing all add-on services
				detailed in the OSGi specifications including the output of Mobile Expert Group
				(MEG) and the Vehicle Expert Group (VEG). In addition, the bundles component
				team defines and produces bundles and services that are of general utility
				to OSGi systems and programmers. For example, the Bundles team is responsible
				for the Extenstion registry used throughout Eclipse.</p>
		</div>

		<div class="homeitem3col">
			<h3>Specifications</h3>
				<p>The specifications for the services are available from the <a href="http://osgi.org">OSGi</a> web site. Click
				<a href="http://osgi.org/osgi_technology/download_specs2.asp?section=2">here</a> to download them.</p>
		</div>

		<div class="homeitem3col">
			<h3>Bundle Projects</h3>
<p>The Bundles component consists of several &quot;projects&quot; in the Eclipse
  CVS repository (see the <a href="resources.php">resources</a> page for information
  on repository location and access). In general the name of the project matches
  the symbolic name of the resultant bundle.</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td width="98%"><b><a name="app"></a>Application Container
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.app">org.eclipse.equinox.app</a>)</b> <A HREF="#legend" style="color:red;"> status:red</a><br>
       
    An implementation of the OSGi R4 MEG Application Container service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="common"></a>Common Utility Bundle (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.common">org.eclipse.equinox.common</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    A library of utility classes (e.g., IStatus, Assert, IAdaptable, ...) that
      are frequently used by Eclipse bundles. This bundle can be used in various
      different OSGi systems or standalone (i.e., without OSGi).</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="config"></a>Config Admin (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.config">org.eclipse.equinox.config</a>)</b> <A HREF="#legend" style="color:red;"> status:red</a><br>
        <font color="#FF0000">Coming soon...</font> An implementation of the
        OSGi R4 Configuration Admin service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="device"></a>Device Access
        Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.device">org.eclipse.equinox.device</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Device Access service. This service provides
    automatic detection of attached and detached hardware devices and can automatically
    download and start appropriate device drivers.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="ds"></a>Declarative Services (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.ds">org.eclipse.equinox.ds</a>)</b><A HREF="#legend" style="color:red;"> status:red</a><br>
        An implementation of the OSGi R4 Declarative Services specification.
          This service simplifies the task of authoring OSGi services by performing
          the work of registering the service and handling service dependencies.
          This
          minimizes the amount of code a programmer has to write; it also allows
          service 
        components to be loaded only when they are needed.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="event"></a>Event Admin Service
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.event">org.eclipse.equinox.event</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Event Admin Service. This service provides
    an inter-bundle communication mechanism based on an event publish and
    subscribe model,
    popular in many message-based systems.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="http"></a>HTTP Service
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http">org.eclipse.equinox.http</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 HTTP service. This service provides an embedded
    HTTP server that is capable of serving HTML and Java servlets.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="log"></a>Log Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.log">org.eclipse.equinox.log</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Log service. This service provides a general-purpose
      message logger for the OSGi environment.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="metatype"></a>Metatype Service
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.metatype">org.eclipse.equinox.metatype</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Metatype service. This service defines interfaces
    that allow bundle developers to describe attribute types in a computer readable
    form using so-called metadata. It allows services to specify the type of
    information of data that they can use as arguments.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="prefs"></a>Preferences Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.preferences">org.eclipse.equinox.preferences</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    The Eclipse preference service is an extension of the standard OSGi preference
      service that adds listeners and the notion of preference scopes.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="extensions"></a>Extension Registry (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.registry">org.eclipse.equinox.registry</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    The Eclipse extension registry allows bundles to communicate and cooperate
      using declarative markup and lazy instantiation. The extension mechanism
      is similar to OSGi services and declarative services but has some different
      contractual and management characteristics.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><a name="servlet"></a> <img src="../images/new.gif" width="31" height="14">Servlet API (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.servlet.api">org.eclipse.equinox.servlet.api</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    A convenience bundle that contains the javax servlet related APIs. Essentially
      these APIs are copied out of the Tomcat implementation and made available
      here in support of the HTTP service bundle. There may well be multiple
      versions of this bundle to address different versions of the servlet API.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="supplement"></a>Supplemental Bundle/JAR (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.supplement">org.eclipse.equinox.supplement</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    A library that includes a very small number of types normally supplied by
      the Equinox implementation. This JAR is useful when running certain bundles
      outside of Equinox or outside of OSGi altogether. This bundle is not needed
      when running inside Equinox.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="user"></a>User Admin Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.useradmin">org.eclipse.equinox.useradmin</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
        An implementation of the OSGi R4 User Admin Service. This service provides
          support for users, groups, and limited authentication functionality.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> <a name="wire"></a>Wire Admin Service
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.wireadmin">org.eclipse.equinox.wireadmin</a>)</b><A HREF="#legend" style="color:red;"> status:red</a><br>
    An implementation of the OSGi R4 Wire Admin Service. This is an administrative
    service that is used to control a wiring topology in the OSGi Service Platform.
    It is intended to be used by user interfaces or management programs that
    control the wiring of services in an OSGi Service Platform.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><strong><a name="services"></a>OSGi Services API (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.osgi.services">org.eclipse.osgi.services</a>)</strong><A HREF="#legend" style="color:green;"> status:green</a><br>
    This bundle contains the set of OSGi specified service APIs. It is included
      here as a convenience for people developing or deploying service implementations
      independent of their specification.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><strong><a name="util"></a>OSGi Utilities (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.osgi.services">org.eclipse.osgi.util</a>)</strong><A HREF="#legend" style="color:green;"> status:green</a><br>
    This bundle contains the set of OSGi specified utilities (e.g., ServiceTracker).
      It is included here as a convenience.</td>
  </tr>
</table>
<p> <A name="legend"> </A><b>Status key</b><br><FONT COLOR="GREEN">green</font> - bundle is production ready.
<br><FONT COLOR="red">red</font> - bundle is currently not planned to be production ready by the Eclipse 3.2 release.
<p>The Framework team typically develops using Eclipse itself so getting and
  managing the projects is quite straightforward. Simply start Eclipse, and use <strong>Import &gt; CVS &gt; Projects
  from CVS</strong>. Enter the repo access information and choose the projects
  you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>
		</div>
		<div class="homeitem3col">
			<h3>What's New</h3>
				<p><b>Feb 3</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14"> A
 				<a href="#servlet">servlet API bundle</a> is introduced in support of the using and developing with
				the HTTP Service.</p>
		</div>
		<div class="homeitem3col">
			<h3>Committers</h3>
				<p>The following people are committers on the Equinox bundles component:</p>
				<ul>
					<li>Jennifer Fogell, IBM PvC</li>
					<li>BJ Hargrave, IBM PvC</li>
					<li>DJ Houghton, IBM Rational</li>
					<li>Jeff McAffer, IBM Rational (Project lead)</li>
					<li>Pascal Rapicault, IBM Rational</li>
					<li>Tom Watson, IBM PvC</li>
				</ul>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Equinox links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/equinox">home</a></li>
				<li><a href="http://www.eclipse.org/equinox/framework">framework</a></li>
				<li><a href="http://www.eclipse.org/equinox/bundles">bundles</a></li>
				<li><a href="http://www.eclipse.org/equinox/bundles/resources.php">bundles - resources</a></li>
				<li><a href="http://www.eclipse.org/equinox/bundles/planning">bundles - planning</a></li>
				<li><a href="http://www.eclipse.org/equinox/incubator">incubator</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/Equinox">wiki</a></li>
				<li><a href="http://www.eclipse.org/equinox/documents">documents</a></li>
				<li><a href="http://download.eclipse.org/eclipse/equinox">downloads</a></li>
				<li><a href="http://www.eclipse.org/equinox/resources.php">resources</a></li>
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
