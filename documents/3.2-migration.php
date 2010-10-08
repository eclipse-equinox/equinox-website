<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle = "Equinox Migration Preview";
	$pageKeywords = "equinox, osgi, framework, runtime, resources";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>

<p>This document details the major changes in the Eclipse runtime layer (aka Equinox) during the 3.2 development cycle.</p>

<h3>Runtime Split</h3>

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

<h4>Adapting</h4>
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
  
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
