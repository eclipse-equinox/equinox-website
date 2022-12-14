<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Bundles";
	$pageKeywords	= "equinox, osgi, framework, runtime, bundles";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML

	<div id="midcolumn">
		<h2>$pageTitle</h2>
		<p>The Equinox Bundles component is tasked with implementing all add-on services
		detailed in the OSGi specifications including the output of the various OSGi Expert groups.
		For example, the Core Platform, Enterprise and Mobile Expert Groups.
		In addition, the bundles component
		team defines and produces bundles and services that are of general utility
		to OSGi systems and programmers. For example, the Bundles team is responsible
		for the Extenstion registry used throughout Eclipse.</p>

		  <h3>Bundle Projects</h3>
		  <p>The Bundles component consists of several &quot;projects&quot; in the Equinox 
		  bundles git repository (see the <a href="resources.php">resources</a> page for information
  on repository location and access). In general the name of the project matches
  the symbolic name of the resultant bundle.</p>
<p>See also the bundles supplied by the <a href="http://eclipse.org/equinox/server">server
    side</a> work</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td width="98%"><b><a name="app"></a>Application Container
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.app">org.eclipse.equinox.app</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 MEG Application Container service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b><a name="common"></a>Common Utility Bundle (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.common">org.eclipse.equinox.common</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
    A library of utility classes (e.g., IStatus, Assert, IAdaptable, ...) that
      are frequently used by Eclipse bundles. This bundle can be used in various
      different OSGi systems or standalone (i.e., without OSGi).</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b><a name="config"></a>Config Admin (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.cm">org.eclipse.equinox.cm</a>)</b> <A HREF="#legend" style="color:green;"> status:green</a><br>
        An implementation of the OSGi R4 Configuration Admin service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="device"></a>Device Access
        Service (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.device">org.eclipse.equinox.device</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Device Access service. This service provides
    automatic detection of attached and detached hardware devices and can automatically
    download and start appropriate device drivers.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b><a name="ds"></a>Declarative Services (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.ds">org.eclipse.equinox.ds</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
        An implementation of the OSGi R4 Declarative Services specification.
          This service simplifies the task of authoring OSGi services by performing
          the work of registering the service and handling service dependencies.
          This minimizes the amount of code a programmer has to write; it also allows
          service components to be loaded only when they are needed.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="event"></a>Event Admin Service
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.event">org.eclipse.equinox.event</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Event Admin Service. This service provides
    an inter-bundle communication mechanism based on an event publish and
    subscribe model,
    popular in many message-based systems.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="http"></a>HTTP Service
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.http">org.eclipse.equinox.http</a>)</b><A HREF="#legend" style="color:orangered;"> status:orange</a><br>
    An implementation of the OSGi R4 HTTP service. This service provides an embedded
    HTTP server that is capable of serving HTML and Java servlets.
    <p/>
    <i>The org.eclipse.equinox.http bundle was deprecated as of Eclipse 3.8 Juno in favor of <a href="https://www.eclipse.org/equinox/server/">org.eclipse.equinox.http.jetty</a> and is no longer shipped.</i></td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="io"></a>IO Connector Service 
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.io">org.eclipse.equinox.io</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 IO Connector Service.  This service adopts the javax.microedition.io packages as a basic communications infrastructure.
    This specification defines a service that adopts the flexible model of the Connector framework in J2ME, but allows OSGi bundles to extend it.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="ip"></a>Initial Provisioning 
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.ip">org.eclipse.equinox.ip</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Initial Provisioning.  This service Defines how the Management Agent can make its way to the Service Platform, 
    and gives a structured view of the problems and their corresponding resolution methods.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b><a name="log"></a>Log Service (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.log">org.eclipse.equinox.log</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Log service. This service provides a general-purpose
      message logger for the OSGi environment.  In the Indigo (3.7) release the Equinox log service was integrated directly into
      the core framework.  This bundle is no longer needed if you are using the 3.7 or greater Equinox Framework.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="metatype"></a>Metatype Service
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.metatype">org.eclipse.equinox.metatype</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Metatype service. This service defines interfaces
    that allow bundle developers to describe attribute types in a computer readable
    form using so-called metadata. It allows services to specify the type of
    information of data that they can use as arguments.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b><a name="prefs"></a>Preferences Service (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.preferences">org.eclipse.equinox.preferences</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    The Eclipse preference service is an extension of the standard OSGi preference
      service that adds listeners and the notion of preference scopes.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b><a name="extensions"></a>Extension Registry (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.registry">org.eclipse.equinox.registry</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    The Eclipse extension registry allows bundles to communicate and cooperate
      using declarative markup and lazy instantiation. The extension mechanism
      is similar to OSGi services and declarative services but has some different
      contractual and management characteristics.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="supplement"></a>Supplemental Bundle/JAR (<a href="http://git.eclipse.org/c/equinox/rt.equinox.framework.git/tree/bundles/org.eclipse.osgi/supplement">org.eclipse.equinox.supplement</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    A library that includes a very small number of types normally supplied by
      the Equinox implementation. This JAR is useful when running certain bundles
      outside of Equinox or outside of OSGi altogether. This bundle is not needed
      when running inside Equinox.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="user"></a>User Admin Service (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.useradmin">org.eclipse.equinox.useradmin</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
        An implementation of the OSGi R4 User Admin Service. This service provides
          support for users, groups, and limited authentication functionality.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="wire"></a>Wire Admin Service
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.wireadmin">org.eclipse.equinox.wireadmin</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
    An implementation of the OSGi R4 Wire Admin Service. This is an administrative
    service that is used to control a wiring topology in the OSGi Service Platform.
    It is intended to be used by user interfaces or management programs that
    control the wiring of services in an OSGi Service Platform.</td>
  </tr>
    <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><b> <a name="equinox.util"></a>Equinox Utilities
        (<a href="http://git.eclipse.org/c/equinox/rt.equinox.bundles.git/tree/bundles/org.eclipse.equinox.util">org.eclipse.equinox.util</a>)</b><A HREF="#legend" style="color:green;"> status:green</a><br>
        A  library of utility classes that are frequently used the Equinox OSGi Service implementation bundles.
        </td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><strong><a name="services"></a>OSGi Services API (<a href="http://git.eclipse.org/c/equinox/rt.equinox.framework.git/tree/bundles/org.eclipse.osgi.services">org.eclipse.osgi.services</a>)</strong><A HREF="#legend" style="color:green;"> status:green</a><br>
    This bundle contains the set of OSGi specified service APIs. It is included
      here as a convenience for people developing or deploying service implementations
      independent of their specification.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" ></td>
    <td><strong><a name="util"></a>OSGi Utilities (<a href="http://git.eclipse.org/c/equinox/rt.equinox.framework.git/tree/bundles/org.eclipse.osgi.util">org.eclipse.osgi.util</a>)</strong><A HREF="#legend" style="color:green;"> status:green</a><br>
    This bundle contains the set of OSGi specified utilities (e.g., ServiceTracker).
      It is included here as a convenience.</td>
  </tr>
</table>
<p> <A name="legend"> </A><b>Status key</b><br><FONT COLOR="GREEN">green</font> - bundle is production ready.
<br>
<FONT COLOR="orangered">orange</FONT> - bundle has been deprecated.
<br/>
<FONT COLOR="red">red</font> - bundle development is in progress.
<p>The team typically develops using Eclipse itself with eGit installed so getting and
  managing the projects is quite straightforward. Simply start Eclipse, and use <strong>Import &gt; Git &gt; Projects
  from Git</strong>. Enter the repo access information and choose the projects
  you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite git client
  and check out the relevant repositories.</p>

			  <h3>Specifications</h3>
			  <p>The specifications for the services are available from the <a href="http://osgi.org">OSGi</a> web
			    site. Click <a href="http://osgi.org/osgi_technology/download_specs2.asp?section=2">here</a> to
			    download them.</p>

			<h3>Committers</h3>
				<p>The <a href="https://projects.eclipse.org/projects/rt.equinox.bundles/who">following people</a> are committers on the Equinox bundles component.</p>
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
