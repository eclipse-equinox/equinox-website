<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Equinox Migration Preview</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" title="default" href="http://eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" title="default" href="../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>

<p>This document details the major changes in the Eclipse runtime layer (aka Equinox) during the 3.2 development cycle.</p>
<p class=bar>Runtime Split</p>

The Runtime has been refactored as per <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113663">https://bugs.eclipse.org/bugs/show_bug.cgi?id=113663</a>.
The refactoring was done to:

<ul> 
<li>provide extension registry that could be used independently form Eclipse and/or
OSGi
separate Registry, Jobs, Preferences, and Content into stand-alone portions to
simplify re-use
</li>
<li>
make the runtime more flexible
</li>
</ul>
<p>As a result of the refactoring, several new plugins have been added: 
<ul>
<li><strong> org.eclipse.equinox.common</strong> - portions that are needed by more than one piece
  of the former runtime plugin (i.e. IPath, IStatus, IProgressMonitor). This
  should be useful as a common base for a standalone JFace as well as using the
  Registry without OSGi. 
</li>
<li>
  <strong>org.eclipse.equinox.registry</strong> - Extension registry</li>
<li>
  <strong>org.eclipse.equinox.preferences</strong> - Preferences mechanism </li>
<li>
  <strong>org.eclipse.core.jobs</strong> - Jobs mechanism </li>
<li>
  <strong>org.eclipse.core.contenttype</strong> - Content mechanism </li>
<li>
  <strong>org.eclipse.equinox.supplement</strong> - A supplemental &quot;plug-in&quot;
  that is used to support running without OSGi.</li>
</ul>  
  <p>These changes should have no affect on other plugins. </p>
<p class=subbar>Adapting</p>
  <ol>
  <li>Conflicts with new public APIs. org.eclipse.equinox.common includes several
    new API classes (e.g., Assert and ListenerList) that have common names. Code
    which use import com.example.* to import classes by these
names and import org.eclipse.core.runtime.* now have abiguous class references
    at compile time. Organizing the imports and choosing the appropriate import
    source should resolve this problem.</li>
  <li>
  Explicit classpaths in the build scripts. As a result of the code being
    moved into new plugins, custom scripts that explicitly reference org.eclispe.core.runtime
    need to add one
      or more
    of the following as appropriate:</p>
    <ul>
    <li>org.eclipse.equinox.common </li>
    <li>org.eclipse.equinox.registry </li>
    <li>org.eclipse.equinox.preferences </li>
    <li> org.eclipse.core.jobs </li>
    <li>org.eclipse.core.contenttype</li>
    </ul>
  </ol>
  


  <p>&nbsp;</p>
</body>
</html>
