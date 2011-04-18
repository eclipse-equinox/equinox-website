<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML

	<div id="midcolumn">
		<h2>$pageTitle</h2>

			<h3Mission Statement</h3>
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

			<h3>Work Areas</3>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td width="98%"><a href="aspects/index.php" target="_top"><b>Aspects</b></a><br>
    Issues around Aspect-oriented programming, load-time weaving and modularity.</td>
  </tr>
  <tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td width="98%"><a href="monitoring/index.php" target="_top"><b>Resource Monitoring</b></a><br>
	A cool, lightweight, infrastructure for monitoring running OSGi based systems.</td>
  </tr>
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td><a href="security" target="_top"><b>Security</b></a><br>
    Seeking to enable and integrate Java security mechanisms with Eclipse. See the <a href="http://wiki.eclipse.org/Category:Security" target="_top">wiki</a> for additional info.</td>
  </tr>
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td><a href="server" target="_top"><b>Server Side OSGi</b></a> <br>
    This incubator project is targeted at eliminating barriers to using and integrating OSGi (and Equinox more specifically) on
  the server.  Note that some of this work has graduated.  See the <a href="http://eclipse.org/equinox/server">server-side</a> website.</td>
  </tr>
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td><a href="provisioning" target="_top"><b>p2</b></a> <br>
    This is the incubator project for the Equinox p2 component.</td>
  </tr>
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td><a href="osgi-next" target="_top"><b>OSGi Next</b></a> <br>
    This incubator project is targeted at implementing prototypes of the specifications developed by the 
    <a href="http://www.osgi.org">OSGi Alliance</a> while the specification is being developed.</td>
  </tr>
    <tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
      <td><a href="console/index.php" target="_top"><b>Console</b></a> <br>
    Console with telnet and ssh access features for Equinox.</td>
  </tr>
</table>

<p>For an understanding of how work is carried out in the incubators, check out
  the <a href="howto.php">How to Incubate</a> guide.</p>

			<h3>Committers</h3>
      <p>The following people are committers on the Equinox Incubator:</p>
      <ul>
        <li>John Arthorne, IBM Rational</li>
        <li>Oleg Besedin, IBM Rational</li>
        <li>Pavlin Dobrev, Prosyst</li>
        <li>Stoyan Boshev, ProSyst</li>
        <li>Matt Flaherty, IBM Lotus</li>
		<li>Ted Habeck, IBM Research</li>
        <li>BJ Hargrave, IBM Lotus</li>
        <li>Simon Kaegi, IBM Rational</li>
        <li>Eric W Li, IBM Lotus</li>
        <li>Stefan Liebig, compeople</li>
        <li>Martin Lippert, it-agile</li>
        <li>Jeff McAffer, Code 9 (Project co-lead)</li>
        <li>Susan McCourt, IBM Rational</li>
        <li>Andrew Niefer, IBM Rational</li>
        <li>Pascal Rapicault, IBM Rational</li>
        <li>Dave Stevenson, IBM Rational</li>
        <li>Tom Watson, IBM Lotus (Project co-lead)</li>
        <li>Matthew Webster, IBM Hursley</li>
        <li>Ikuo Yamasaki, NTT Corporation</li>
        <li>Heiko Seeberger, WeigleWilczek</li>
        <li>Lazar Kirchev, SAP</li>
      </ul>

		<h3>Old Work Areas</h3>
		<p>See the <a href="archive">Equinox Incubator Archive</a> for details of previous
  		work areas.</p>

	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
