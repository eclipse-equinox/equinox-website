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
    <td><b>Extension Registry  (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.registry">org.eclipse.equinox.registry</a>)</b><br>
      <font color="#FF0000">Coming soon...</font> The Eclipse extension registry allows bundles to communicate
        and cooperate using declarative markup and lazy instantiation. The extension
        mechanism
        is similar to OSGi services and declarative services but has some different
        contractual and management characteristics.<font color="#FF0000"> (Currently
        this code is part of the Eclipse runtime but it is being factored out
        to be standalone)</font></td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Declarative Services (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.scr">org.eclipse.equinox.scr</a>)</b><br>
        <font color="#FF0000">Coming soon...</font> An implementation of the
        OSGi R4 Declarative Services specification.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Log Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.log">org.eclipse.equinox.log</a>)</b><br>
        <font color="#FF0000">Coming soon...</font> An implementation of the
    OSGi R4 Log service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Config Admin (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.config">org.eclipse.equinox.config</a>)</b><br>
        <font color="#FF0000">Coming soon...</font> An implementation of the
    OSGi R4 Configuration Admin service.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>HTTP Service (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox.http">org.eclipse.equinox.http</a>)</b><br>
      <font color="#FF0000">Coming soon...</font> An implementation of the OSGi
      R4 HTTP service.</td>
  </tr>
</table>
<p>The Framework team typically develops using Eclipse itself so getting and
  managing the projects is quite straightforward. Simply start Eclipse, and use <strong>Import &gt; CVS &gt; Projects
  from CVS</strong>. Enter the repo access information and choose the projects
  you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>
<p class=bar>What's New</p>
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
