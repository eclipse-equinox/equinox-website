<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OSGi based JSP Support";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
	
<p>JSPs are in wide-spread use and provide a relatively natural way of generating dynamic content directly in web page centric manner. 
For this reason and along with broad framework support JSP remains one of the most popular means of generating
web application content with virtually all servlet containers providing support.</p>

<p>Providing support for JSP in OSGi environments is complicated to some degree by a different set of assumptions when compared with a servlet container.
This portion of the incubator is investigating the use of the Jasper 2 JSP compiler to provide JSP support while retaining
the modularity benefits of OSGi dependency and class loader resolution.</p> 

<p><b>Note:</b><br />
The current JSP support work in the incubator is in good shape, supported in bugzilla, and can be integrated against. 
With that said, it's quite likely the API will experience a few minor changes as it moves toward formal graduation.
Differences will be tracked here.</p> 

<p>For a look at the earlier work on JSP Support see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140430">bug 140430</a>.</p>

<h3>Bundles</h3>
<ul>
<li><b>org.eclipse.equinox.jsp.jasper (Bundle)</b><br />
<i>Provides an OSGi friendly JSPServlet based on the use of the Jasper 2 compiler and runtime.</i>
</li>
<li><b>org.eclipse.equinox.jsp.jasper.registry (Bundle)</b><br />
<i>Provides a JSPFactory that allows JSP usage with the org.eclipse.equinox.http.registry.servlets extension-point.</i>
</li>
</ul>

<p>These projects can be downloaded from the equinox-incubator CVS depot. <br /> 
(e.g. cvsroot/eclipse/equinox-incubator/org.eclipse.equinox.jsp.jasper)</p>
<p>
In addition a number of third party bundles are required to provide JSP support. These are all available as bundle project for the Orbit CVS depot. <br/>
<ul>
<li>
(/cvsroot/tools/org.eclipse.orbit/javax.servlet.jsp [branch v2_0])
</li>
<li>
(/cvsroot/tools/org.eclipse.orbit/org.apache.common.logging [v1_0_4])
</li>
<li>
(/cvsroot/tools/org.eclipse.orbit/org.apache.commons.el [branch v1_0])
</li>
<li>
(/cvsroot/tools/org.eclipse.orbit/org.apache.jasper [branch v5_5_17])
</li>
</ul>
</p>
<p><i>[Suggested]</i> If you're using Eclipse it might be far simpler to "import" a team project set with everything needed. 
(<a href="downloads/jspsupport-anon.psf">regular</a>) or (<a href="downloads/jspsupport-anon-proxy.psf">proxied</a>)</p>
<p><b>Additional Notes: </b><ul style="list-style-type: none"><i>
<li>To build and use these projects you'll need to be running Eclipse 3.2 or later. </li>
<li>The JSP Support requires an HTTP Service that provides support for the Servlet 2.4 API. 
(See Jetty in <strong><a href="http_in_container.php">Embedding Equinox in a Servlet Container</a></strong>
 or <strong><a href="http_in_equinox.php">Embedding an HTTP server in Equinox</a></strong> -- Note: modification of the servletbridge is no longer needed.)</li>
</ul>
</i></p> 

<h3>Examples</h3>
<p><b>Note:</b> The examples require org.eclipse.equinox.http.helper from the equinox-incubator CVS depot</p>
<ul>
<li><i>JSTL bundle (required by other examples) - see <a href="http://prdownloads.sourceforge.net/sse-examples/org.eclipse.equinox.jsp.jstl-proj.zip?download">Plug-in project</a></i></li>
<li><i>JSP Examples Bundle - see <a href="http://prdownloads.sourceforge.net/sse-examples/org.eclipse.equinox.jsp.examples-proj.zip?download">Plug-in project</a></i></li>
<li><i>JSTL Examples Bundle - see <a href="http://prdownloads.sourceforge.net/sse-examples/org.eclipse.equinox.jsp.jstl.examples-proj.zip?download">Plug-in project</a></i></li>
<li><i>Struts Examples Bundle - see <a href="http://prdownloads.sourceforge.net/sse-examples/org.eclipse.equinox.struts.examples-proj.zip?download">Plug-in project</a></i></li>
</ul> 

</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
