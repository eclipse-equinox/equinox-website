<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Equinox OSGi framework</title>
<link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" href="../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class=bar>Mission Statement</p>
<p>The Equinox Bundles component is tasked with implementing all add-on services
  detailed in the OSGi specifications including the output of Mobile Expert Group
  (MEG) and the Vehicle Expert Group (VEG). In addition, the bundles component
  team defines and produces bundles and services that are of general utility
  to OSGi systems and programmers. For example, the Bundles team is responsible
  for the Extenstion registry used throughout Eclipse.</p>
<p class=bar><a name="bundleprojects"></a>Bundle Projects</p>
<p>The Bundles component consists of several &quot;projects&quot; in the Eclipse
  CVS repository (see the <a href="resources.php">resources</a> page for information
  on repository location and access). In general the name of the project matches
  the symbolic name of the resultant bundle.</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td width="98%"><strong>OSGi Services API (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.osgi.services">org.eclipse.osgi.services</a>)</strong><br>
      This bundle contains the set of OSGi specified service APIs. It is included
        here as a convenience for people developing or deploying service implementations
        independent of their specification.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><strong>OSGi Utilities (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.osgi.services">org.eclipse.osgi.util</a>)</strong><br>
    This bundle contains the set of OSGi specified utilities (e.g., ServiceTracker).
    It is included here as a convenience..</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Preferences Service
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.preferences">org.eclipse.equinox.preferences</a>)</b><br>
    The Eclipse preference service is an extension of the standard OSGi preference
    service that adds listeners and the notion of preference scopes.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Extension Registry  (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.registry">org.eclipse.equinox.registry</a>)</b><br>
      The Eclipse extension registry allows bundles to communicate
        and cooperate using declarative markup and lazy instantiation. The extension
        mechanism
        is similar to OSGi services and declarative services but has some different
        contractual and management characteristics.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14">Declarative Services (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.ds">org.eclipse.equinox.ds</a>)</b><br>
        An implementation of the OSGi R4 Declarative Services specification. It simplifies the task of authoring OSGi services by performing the work of 
        registering the service and handling service dependencies. This minimizes the amount of code a programmer has to write; it also allows service 
        components to be loaded only when they are needed.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14">Log Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.log">org.eclipse.equinox.log</a>)</b><br>
         An implementation of the OSGi R4 Log service. It provides a general-purpose message logger for the OSGi environment.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14"> User Admin Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.useradmin">org.eclipse.equinox.useradmin</a>)</b><br>
        An implementation of the OSGi R4 User Admin Service. It provides support for users, groups, and limited authentication functionality.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14"> Wire Admin Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.wireadmin">org.eclipse.equinox.wireadmin</a>)</b><br>
         An implementation of the OSGi R4 Wire Admin Service. It is an administrative service that is used to control a wiring topology in the OSGi Service Platform. It is intended to be used by user interfaces 
        or management programs that control the wiring of services in an OSGi Service Platform.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14"> Event Admin Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.event">org.eclipse.equinox.event</a>)</b><br>
        An implementation of the OSGi R4 Event Admin Service. It provides an inter-bundle communication mechanism. It is based on a event publish and subscribe model, popular in many message-based systems.</td>
  </tr>  
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Config Admin (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.config">org.eclipse.equinox.config</a>)</b><br>
        <font color="#FF0000">Coming soon...</font> An implementation of the
    OSGi R4 Configuration Admin service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14"> HTTP Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http">org.eclipse.equinox.http</a>)</b><br>
        An implementation of the OSGi R4 HTTP service. It provides an embedded HTTP server that is capable of serving HTML and Java servlets.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14"> Device Access Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.device">org.eclipse.equinox.device</a>)</b><br>
        An implementation of the OSGi R4 Device Access service. It provides automatic detection of attached and detached hardware devices and can automatically download and start appropriate device drivers.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b><img src="../images/new.gif" width="31" height="14"> Metatype Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.metatype">org.eclipse.equinox.metatype</a>)</b><br>
        An implementation of the OSGi R4 Metatype service. It defines interfaces that allow bundle developers to describe attribute types in a computer readable form using so-called metadata.  
        It allows services to specify the type of information of data that they can use as arguments.</td>
  </tr>  
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Common Utility Bundle (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.common">org.eclipse.equinox.common</a>)</b><br>
      A library of utility classes (e.g., IStatus, Assert, IAdaptable,
        ...) that are frequently used by Eclipse bundles. This bundle can be
         used in various different OSGi systems or standalone (i.e., without
        OSGi).</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b> Supplemental Bundle/JAR
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.supplement">org.eclipse.equinox.supplement</a>)</b><br>
      A library that includes a very small number of types normally supplied
      by the Equinox implementation. This JAR is useful when running certain
      bundles outside of Equinox or outside of OSGi altogether. This bundle is
      not needed when running inside Equinox.</td>
  </tr>
</table>
<p>The Framework team typically develops using Eclipse itself so getting and
  managing the projects is quite straightforward. Simply start Eclipse, and use <strong>Import &gt; CVS &gt; Projects
  from CVS</strong>. Enter the repo access information and choose the projects
  you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>
<p class=bar>What's New</p>
<p> <b>Nov 21</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14"> The
  refactored Runtime has been contributed to this week's Integration builds.
  This includes the standalone registry, the preference service, a common utility
  bundle and a supplemental JAR/bundle to help when running outside of OSGi.
  See the <a href="../documents/3.2-migration.php">migration
  doc</a> for
  more details.</p>
<p> <b>Nov 21</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14"> The
  stand-alone Eclipse Extension Registry bundle has been added to the repo. </p>
<p class=bar>Committers</p>
      <p>The following people are committers on the Equinox bundles component:</p>
      <ul>
        <li>Jennifer Fogell, IBM PvC</li>
        <li>BJ Hargrave, IBM PvC</li>
		<li>DJ Houghton, IBM Rational</li>
		<li>Jeff McAffer, IBM Rational (Project lead)</li>
        <li>Pascal Rapicault, IBM Rational</li>
        <li>Tom Watson, IBM PvC</li>
      </ul>

</body>
</html>
