<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Embedding an HTTP server in Equinox";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server, servlet, http";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>

<p>Equinox provides two complete implementations of the OSGi Http Service suitable for embedding.<p>
<ul>
<li><b>org.eclipse.equinox.http</b><br />
Very small footprint suitable for resource constrained environments. <br />
<i>API compatible with Servlet 2.4 but provides limited support beyond Servlet API 2.1.</i>
</li>
<li><b>org.eclipse.equinox.http.jetty</b><br />
Implemented using <a href="http://jetty.mortbay.org">Jetty</a> as the underlying engine for providing Servlet API 2.4 Support.
</li>
</ul>

<h3>Bundles</h3>
<p>The following bundles are involved in putting together an Http Service environment:
<br />
<ul>
	<li><b>org.eclipse.equinox.http</b></li>
</ul>
OR<br />
<ul>
	<li><b>org.eclipse.equinox.http.jetty</b></li>
	<li><b>org.eclipse.equinox.http.servlet</b></li>
	<li><b>org.mortbay.jetty</b> <i>(v5_1_11 - from Orbit Depot)</i></li>
	<li><b>org.apache.commons.logging</b> <i>(v1_0_4 - from Orbit Depot)</i></li>
</ul>
<br />
<ul>
	<li><b>javax.servlet</b> <i>(v2_4 - from Orbit Depot)</i></li>
	<li><b>[optional] org.eclipse.equinox.http.registry</b><br />
	<i>Provides servlet, resource, and httpcontext extension points based on an OSGi HttpService.</i>
	</li>
</ul>
</p>

<p>The org.eclipse.equinox.* projects can be retrieved from the equinox CVS depot. <br /> 
(e.g. cvsroot/eclipse/org.eclipse.equinox.http)</p>
<p>
The 3rd party bundles can be retrieved from the Orbit CVS Depott. <br/>
(e.g. cvsroot/tools/org.eclipse.orbit/javax.servlet [branch v2_4])]
</p>

<p><i>[Suggested]</i> If you're using Eclipse it might be far simpler to "import" a team project set with everything needed. <br />
<i>Equinox Http Service:</i> (<a href="downloads/equinoxhttp-anon.psf">regular</a>) or (<a href="downloads/equinoxhttp-anon-proxy.psf">proxied</a>)<br />
<i>Jetty-based Http Service:</i> (<a href="downloads/jettyhttp-anon.psf">regular</a>) or (<a href="downloads/jettyhttp-anon-proxy.psf">proxied</a>)</p>

<p><b>Additional Notes: </b><ul style="list-style-type: none"><i>
<li>To build and use these projects you'll need to be running the Eclipse SDK 3.2 or later.</li>
</ul>
</i></p>

<h3>Writing the server application</h3>
<p>See the <a href="http_writing_application.php">Writing a bundle-based server application</a>
 for information on how to write a bundle based web application.</p>

<h3>Running the server</h3>
<p>To run the server and your application, carry out the following steps:
<ul>
	<li>Create an OSGi Framework launch configuration <b>Run &gt; Run... &gt; OSGi Framework</b></li>
	<li>In the Plug-ins tab, de-select all the bundles</li>
	<li>Select the bundles listed above and your application (e.g., com.example.http.application)</li>
	<li>Run the launch configuration</li>
	<li>Launch your favorite web browser and access the URLs</li>
</ul>
</p>
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
