<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle = "Equinox Resources";
	$pageKeywords = "equinox, osgi, framework, runtime, resources";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">

	<h3>Equinox Nightly Build: N20101001-0943</h3>
	<p>October 1, 2010</p>
	<p>These downloads are provided under the <a href="http://www.eclipse.org/legal/epl/notice.html">
	Eclipse Foundation Software User Agreement</a>. Click <a href="verifyMD5.html">here</a> for instructions 
	on how to verify the integrity of your downloads.</p>

	<p><a href="apitools/index.html">API Version Verification Report</a> Verifies the versions
	of the plugins against Eclipse 3.6.  See org.eclipse.releng/apiexclude/exclude_list_external.txt for exclusions.</p>

	<p><a href="apitools/apitoolsdeprecations/apideprecation.html">API Deprecation Report</a> 
	Report of API deprecated since 3.6.</p>

	<!--p><a href="apitools/report.html"><b>API Tools Post-API Freeze Report</b></a>  This report describes API changes 
	since 3.6M6.  Exclusions are listed in org.eclipse.releng/apiexclude/exclude_list.txt.</p-->

	<div class="homeitem3col">
		<h3><a name="Equinox"> Equinox</a></h3>
		<p> A complete set of all bundles and launchers produced by the Equinox project. This zip is also a p2 repo. </p>
		<table BORDER=0 CELLSPACING=2 CELLPADDING=0 WIDTH="99%" bordercolor="#999999" >
			<tr><td width="5%"/> <td width="65%"/></tr>
			<tr>
				<td align="CENTER"><img src="OK.gif" height=15 alt="OK"></td>
				<td><img src="repo.gif"/>&nbsp;<a href="download.php?dropFile=equinox-SDK-N20101001-0943.zip">equinox-SDK-N20101001-0943.zip</a></td>
				<td>18 MB</td>
				<td><a href="http://download.eclipse.org/equinox/drops/N20101001-0943/checksum/equinox-SDK-N20101001-0943.zip.md5">(md5)</a> <a href="http://download.eclipse.org/equinox/drops/N20101001-0943/checksum/equinox-SDK-N20101001-0943.zip.sha1">(sha1)</a></td>
			</tr>
		</table>
	</div>
	
	<div class="homeitem3col">
		<h3><a name="Framework"> Framework</a></h3>
		<p>The Equinox OSGi R4 <a href="http://eclipse.org/equinox/framework">framework</a> implementation includes all optional parts 
	of the R4 spec as well as several additional mechanisms (e.g., x-internal, platform filters, ...) that are generally useful in a standalone 
	package.  See the <A HREF="http://eclipse.org/equinox/quickstart.html">Quick Start Guide</A> for details on how to use this JAR.</P>
		<table BORDER=0 CELLSPACING=2 CELLPADDING=0 WIDTH="99%" bordercolor="#999999" >
			<tr><td width="5%"/> <td width="65%"/></tr>
			<tr>
				<td align="CENTER"><img src="OK.gif" height=15 alt="OK"></td>
				<td>&nbsp;<a href="download.php?dropFile=org.eclipse.osgi_3.7.0.N20101001-0943.jar">org.eclipse.osgi_3.7.0.N20101001-0943.jar</a></td>
				<td>1.2 MB</td>
				<td><a href="http://download.eclipse.org/equinox/drops/N20101001-0943/checksum/org.eclipse.osgi_3.7.0.N20101001-0943.jar.md5">(md5)</a> <a href="http://download.eclipse.org/equinox/drops/N20101001-0943/checksum/org.eclipse.osgi_3.7.0.N20101001-0943.jar.sha1">(sha1)</a></td>
			</tr>
		</table>
	</div>
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
