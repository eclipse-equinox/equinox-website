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
<p>The Equinox Framework component is tasked with being a full implementation
  to the OSGi Core Framework R4 specification. In addition, the Framework component
  produces launchers, bootstrap infrastructure and application models that facilitate
  the use of Equinox OSGi in end-user product scenarios.</p>

<p class=bar>Framework Projects</p>
<p>The Framework component consists of several &quot;projects&quot; in the Eclipse CVS
  repository (see the <a href="resources.php">resources</a> page for information on repository location and
  access).</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td width="98%"><strong>OSGi R4 Framework (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.osgi/">org.eclipse.osgi</a>)</strong><br>
    The main framework project. This includes a set of adaptors and enough
      function to make a standalone OSGi framework. When built this project produces
    org.eclispe.osgi.jar.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Boot support (org.eclipse.equinox.boot)</b><br>
    This is the Eclipse startup.jar that helps setup the framework classloader
      etc. <font color="#FF0000">Note: this code has yet to be moved. It is currently
      in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.platform/">org.eclipse.platform</a> project.</font> See <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113069">bug
      113069</a> for more details.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td><b>Native Launcher (<a href="http://dev.eclipse.org/viewcvs/index.cgi/platform-launcher/">platform-launcher</a>)</b><br>
    The launcher is the native executable that runs startup.jar and thus
      the framework. It is also responsible for putting up the splash screen
      etc. The launcher is written in C and currently supports a wide range of
    operating systems, window systems and processor architectures.</td>
  </tr>
</table>
<p>The Framework team typically develops using Eclipse itself so getting and
  managing the projects is quite straightforward. Simply start Eclipse, and use
  <strong>Import &gt; CVS &gt; Projects from CVS</strong>. Enter the repo access
information and choose the projects you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>
<p class=bar>What's New</p>

<p class=bar>Committers</p>
      <p>The following people are committers on the Equinox Framework component:</p>
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
