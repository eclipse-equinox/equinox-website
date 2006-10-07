<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator";
	
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
<p>
The goal of the Equinox Incubator is to experiment with techniques for 
      broadening the range of Eclipse platform runtime configurations. For example, 
      areas such as security, the use of Equinox on the server and Aspect weaving
      are prime candidates for investigation in the Incubator.</p>

      <p>These issues do not severely impact the usefulness of Eclipse as a development 
        tool platform but they do affect the use of Eclipse in more constrained 
        environments (e.g., handheld devices, IT managed environments, mass-appeal 
        applications, servers, etc.). The Incubator project will investigate such issues and 
        develop approaches which are practical and applicable to the main Equinox
        code base. </p>
		</div>

		<div class="homeitem3col">
			<h3>Work Areas</h3>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="aspects/index.php" target="_top"><b>Aspects</b></a><br>
    Issues around Aspect-oriented programming, load-time weaving and modularity.</td>
  </tr>
  <tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="monitoring/index.php" target="_top"><b>Resource Monitoring</b></a><br>
	A cool, lightweight, infrastructure for monitoring running OSGi based systems.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="security/index.html" target="_top"><b>Security, roles, profiles</b></a><br>
    Study how enable a security model.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="server" target="_top"><b>Server Side OSGi</b></a> <br>
    This incubator project is targetted at eliminating barriers to using and integrating OSGi (and Equinox more specificially) on
  the server.  Note that some of this work has graduated.  See the <a href="http://eclipse.org/equinox/server">server-side</a> website.</td>
  </tr>
</table>

<p>For an understanding of how work is carried out in the incubators, check out
  the <a href="howto.php">How to Incubate</a> guide.</p>
		</div>

		<div class="homeitem3col">
			<h3>Old Work Areas</h3>
<p>See the <a href="archive">Equinox Incubator Archive</a> for details of previous
  work areas.</p>
		</div>

		<div class="homeitem3col">
			<h3>What's New</h3>
<p><b>May 16, 2006</b> - <IMG src="http://www.eclipse.org/images/new.gif"
	width="31" height="14"> Added <a href="monitoring/index.php">Remote Resource Monitoring</a> work area.</p>
<P><B>Nov 11, 2005</B> - Created the <a href="server">Server-side incubator</a>.</P>
<P><B>Oct 12, 2005</B> - Presentation on SWORD4J at OSGi Congress in Paris now
available on the <A href="security/documents/index.html" target="_parent">documents
page</A>.<BR>
  <BR>
  <B>Sept 30, 2005</B> - A collection of Eclipse plug-ins designed to
  aid in performing security related development tasks for Java, Eclipse,
  and OSGi bundle developers has been released on the IBM alphaWorks
  website. The download is called, <B>IBM Security Workbench Development
  Evnironment for Java</B> ( <A
	href="http://www.alphaworks.ibm.com/tech/sword4j" target="_blank">SWORD4J</A> ).
  This tool was used to <A
	href="http://www.eclipse.org/equinox/incubator/security/EJS/ejs.html"
	target="_parent">analyze the RCP plug-ins</A> within the equinox project.</P>
		</div>

		<div class="homeitem3col">
			<h3>Committers</h3>
      <p>The following people are committers on the Equinox Incubator:</p>
      <ul>
        <li>Jennifer Fogell, IBM PvC</li>
        <li>Olivier Gruber, IBM Research</li>
		<li>Ted Habeck, IBM Research</li>
        <li>BJ Hargrave, IBM PvC</li>
        <li>Simon Kaegi, Cognos</li>
        <li>Peter Kriens, aQute</li>
        <li>Martin Lippert, it-agile</li>
        <li>Jeff McAffer, IBM Rational (Project lead)</li>
        <li>Pascal Rapicault, IBM Rational</li>
        <li>Tom Watson, IBM PvC</li>
        <li>Matthew Webster, IBM Hursley</li>
      </ul>
		</div>
	</div>

<?php
	include "global-links.html";
	include "dir-links.html";
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
