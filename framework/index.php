<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Framework";
	$pageKeywords	= "equinox, osgi, framework, runtime";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

			<p class=bar>Mission Statement</p>
				<p>The Equinox Framework component is tasked with being a full implementation
					to the OSGi Core Framework R4 specification. In addition, the Framework component
					produces launchers, bootstrap infrastructure and application models that facilitate
					the use of Equinox OSGi in end-user product scenarios.</p>

<h3>Framework Projects</h3>
<p>The Framework component consists of several &quot;projects&quot; in the Eclipse CVS
  repository (see the <a href="resources.php">resources</a> page for information on repository location and
  access).</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td width="98%"><strong>OSGi R4 Framework (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/framework/bundles/org.eclipse.osgi/?root=RT_Project">org.eclipse.osgi</a>)</strong><br>
    The main framework project. This includes a set of adaptors and enough
      function to make a standalone OSGi framework. When built this project produces
    org.eclispe.osgi.jar.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td><b>Java Launcher (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/framework/bundles/org.eclipse.equinox.launcher/?root=RT_Project">org.eclipse.equinox.launcher</a>)</b><br>
      This helps setup the framework classloader and launches the Framework
      etc. <font color="#FF0000">Note: this code used to be included in the startup.jar and has be moved from its old location in the 
      <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.platform/">org.eclipse.platform</a> project.</font> 
      See <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113069">bug 113069</a> for more details.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td><b>Native Launcher (<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/framework/bundles/org.eclipse.equinox.executable/?root=RT_Project">org.eclipse.equinox.executable</a>)</b><br>
      The launcher is the native executable that finds and runs the java launcher org.eclipse.equinox.launcher and thus
      the framework. It is also responsible for putting up the splash screen
      etc. The launcher is written in C and currently supports a wide range of
      operating systems, window systems and processor architectures.
      The launcher is split into a small native executable and a platform specific library.  The source for both the launcher and 
      the library can be found in the org.eclipse.equinox.executable project.
      </td>
  </tr>
</table>
<p>The Framework team typically develops using Eclipse itself so getting and
  managing the projects is quite straightforward. Simply start Eclipse, and use
  <strong>Import &gt; CVS &gt; Projects from CVS</strong>. Enter the repo access
information and choose the projects you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>

		  <h3>Committers</h3>
			<p>The following people are committers on the Equinox Framework component:</p>
			<ul>
				<li>BJ Hargrave, IBM Lotus</li>
				<li>DJ Houghton, IBM Rational</li>
				<li>Jeff McAffer, Code 9 (Project co-lead)</li>
				<li>Andrew Niefer, IBM Rational</li>
				<li>Pascal Rapicault, IBM Rational</li>
				<li>Tom Watson, IBM Lotus (Project co-lead)</li>
			</ul>
	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
