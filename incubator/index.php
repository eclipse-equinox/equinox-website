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

			<p class=bar>Mission Statement</p>
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

			<p class=bar>Work Areas</p>
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
      <td><a href="security" target="_top"><b>Security</b></a><br>
    Seeking to enable and integrate Java security mechanisms with Eclipse. See the <a href="http://wiki.eclipse.org/Category:Security" target="_top">wiki</a> for additional info.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="server" target="_top"><b>Server Side OSGi</b></a> <br>
    This incubator project is targetted at eliminating barriers to using and integrating OSGi (and Equinox more specificially) on
  the server.  Note that some of this work has graduated.  See the <a href="http://eclipse.org/equinox/server">server-side</a> website.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="provisioning" target="_top"><b>Provisioning</b></a> <br>
    This incubator project is targetted at investigating the 3.3 plan item around provisioning support.</td>
  </tr>
</table>

<p>For an understanding of how work is carried out in the incubators, check out
  the <a href="howto.php">How to Incubate</a> guide.</p>

		  <p class=bar>What's New</p>
		    <p><b>Aug 10</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The <a href="http://www.eclipse.org/equinox/incubator/provisioning/">Provisioning workarea</a> team in the 
		       <a href="http://www.eclipse.org/equinox/incubator">Equinox Incubator</a> has released an M1a of the new provisioning
		       support.  For more information see <a href="http://wiki.eclipse.org/Equinox_Provisioning_M1">the wiki</a>.</p>
		    <p><b>Aug 8</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The <a href="http://www.eclipse.org/equinox/incubator/security/">Security workarea</a> in the 
		       <a href="http://www.eclipse.org/equinox/incubator">Equinox Incubator</a> has come alive with various contributions from Lotus
		       around JAAS, JCA and Keystores.  Matthew Flaherty and Eric Li from Lotus have joined the incubator as committers working in 
		       the security area.</p>
		    <p><b>July</b> - <img src="http://www.eclipse.org/images/new.gif" width="31" height="14">
		       The team at <a href="http://prosyst.com">Prosyst</a> has contributed implementations of 4 standard OSGi services to the 
		       <a href="http://www.eclipse.org/equinox/incubator">Equinox Incubator</a>. And Pavlin Dobrev and Teodor Todorov
		       from Prosyst have joined the incubator as committers.</p>
<p><b>June 5, 2007</b> - <IMG src="http://www.eclipse.org/images/new.gif"
	width="31" height="14"> Matt Flaherty and Eric W Li from the Lotus division of IBM have joined as committers. They will be working
	on enabling security functionality for the Eclipse platform. More info in the <a href="http://wiki.eclipse.org/Category:Security">security</a>
	category of the wiki.
</p>
			<p>&nbsp;</p>

			<p class=bar>Committers</p>
      <p>The following people are committers on the Equinox Incubator:</p>
      <ul>
        <li>Pavlin Dobrev, Prosyst</li>
        <li>Matt Flaherty, IBM Lotus</li>
        <li>Jennifer Fogell, IBM PvC</li>
		<li>Ted Habeck, IBM Research</li>
        <li>BJ Hargrave, IBM Lotus</li>
        <li>Simon Kaegi, IBM Rational</li>
        <li>Eric W Li, IBM Lotus</li>
        <li>Martin Lippert, it-agile</li>
        <li>Jeff McAffer, IBM Rational (Project lead)</li>
        <li>Andrew Niefer, IBM Rational</li>
        <li>Pascal Rapicault, IBM Rational</li>
        <li>Teodor Todorov, Prosyst</li>
        <li>Tom Watson, IBM Lotus</li>
        <li>Matthew Webster, IBM Hursley</li>
        <li>Ikuo Yamasaki, NTT Corporation</li>
      </ul>

		<p class=bar>Old Work Areas</p>
		<p>See the <a href="archive">Equinox Incubator Archive</a> for details of previous
  		work areas.</p>

<p>&nbsp;</p>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
