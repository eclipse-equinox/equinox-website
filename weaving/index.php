<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Weaving";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, weaving, aspects";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
	

<p>The purpose of Equinox Weavong is to allow developers to use the Equinox together with AspectJ by combining the benefits
of both worlds. Using a load-time weaving extension you are able to add AspectJ aspects to your bundle-based system
just by putting them into general OSGi bundles. It does not matter if the pointcuts you defined inside the aspects contain
join points that are defined by classes within the same bundle or any other bundle in your installation. The load-time
weaving extension will take care that your aspects are woven with the appropriate classes at load-time.</p>
<p>To illustrate this lets assume the following situation: You would like to write an aspect that traces something within
the JDT plug-ins of Eclipse. Without some kind of load-time aspect weaving you would somehow need to recompile those JDT
plug-ins using AJDT (for example) together with your aspect. By using the load-time aspect weaving extension all you need
is to implement your aspect and add that bundle to your system. The load-time aspect weaving extension takes care of weaving
your aspect with the JDT code as it is loaded. And it doesn't matter if a new JDT is installed by the user later on. The
next time your application is started the load-time aspect weaving will take care of weaving your aspect into these bundles
as well, if necessary.</p>
<p>With this technology is becomes possible to modularize crosscutting concerns across different plug-ins while keeping the
idea of separate compilation for bundles.</p>



<h3>Working with Equinox Weaving</h3>
<p><strong><a href="http://wiki.eclipse.org/Equinox_Weaving_QuickStart">Quick Start Guide</a></strong> - 
See the quick start guide for getting up and running aspect weaving with Equinox.</p>


<h3>Weaving Bundles</h3>
<p>The Weaving work component consists of several bundles maintained in Eclipse
  CVS repository projects. See the <a href="../bundles/resources.php">resources</a> page
  for information on repository location and access. In general
  the name of the project matches the symbolic name of the resultant bundle.</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
    <td><b><a name="http" id="http"></a>Weaving Hook (<a href="http://dev.eclipse.org/viewcvs/viewvc.cgi/org.eclipse.equinox/weaving/bundles/org.eclipse.equinox.weaving.hook/?root=RT_Project">org.eclipse.equinox.weaving.hook</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    This is the framework extension project containing the hooks to insert bytecode weaving and caching at load-time.</td>
  </tr>
  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
    <td width="98%"><b><a name="http.registry" id="http.registry"></a>AspectJ Weaving (<a href="http://dev.eclipse.org/viewcvs/viewvc.cgi/org.eclipse.equinox/weaving/bundles/org.eclipse.equinox.weaving.aspectj/?root=RT_Project">org.eclipse.equinox.weaving.aspectj</a>)</b> </a><A HREF="#legend" style="color:green;">status:green</a><br>
      This bundle contains the bridge to use AspectJ as load-time weaving implementation.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
    <td><b><a name="servletbridge" id="servletbridge"></a>Standard Caching (<a href="http://dev.eclipse.org/viewcvs/viewvc.cgi/org.eclipse.equinox/weaving/bundles/org.eclipse.equinox.weaving.caching/?root=RT_Project">org.eclipse.equinox.weaving.caching</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    This bundle provides a caching for woven bytecode for standard Java virtual machines.</td>
  </tr>
  <tr>
    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" /></td>
    <td><b><a name="http.servlet" id="http.servlet"></a>J9-Specific Caching (<a href="http://dev.eclipse.org/viewcvs/viewvc.cgi/org.eclipse.equinox/weaving/bundles/org.eclipse.equinox.weaving.caching.j9/?root=RT_Project">org.eclipse.equinox.weaving.caching.j9</a>)</b> <A HREF="#legend" style="color:green;">status:green</a><br>
    This bundle contains a cache alternative cache implementation that uses IBM J9 VM shared classes for caching woven classes.</td>
  </tr>
</table>

<p><A name="legend"> </A><b>Status key</b><br>
  <FONT COLOR="GREEN">green</font> - bundle is production ready. <br>
  <FONT COLOR="red">red</font> - bundle development is in progress. </p>
<p>The team typically develops using Eclipse itself so getting and managing the
  projects is quite straightforward. Simply start Eclipse, and use <strong>Import &gt; CVS &gt; Projects
  from CVS</strong>. Enter the repo access information and choose the projects
  you want to load into the workspace. </p>
<p>If you are working without Eclipse (gads! :-) then use your favorite CVS client
  and check out the relevant projects.</p>


<h3>OSGi Weaving Specification vs. Equinox Weaving</h3>
<p>
Equinox Weaving and the OSGi Weaving Specification are separate things at the moment. The general Equinox OSGi runtime
implements the OSGi Weaving Specification out of the box. This allows you to implement and inject our own
bytecode modifiers into the OSGi runtime. Equinox Weaving was implemented a long time before the OSGi Weaving Specification
was available, mostly to allow AspectJ aspects to be woven into bundles at load-time. Therefore Equinox Weaving uses
Equinox-specific hooks to inject bytecode weaving into the runtime.</p>
<p><strong>When to use what?</strong></p>
<p>If you are looking towards implementing your own bytecode modifier for OSGi to do some special kind of bytecode
manipulation at load-time, you should take a look at the hooks provided by the OSGi Weaving Specification. If you wanna
use a ready-to-use aspect weaving solution for AspectJ and also wanna have caching of woven bytecode to improve
performance and footprint at the second startup, you should take a look at using Equinox Weaving.</p>
<p><strong>Outlook</strong></p>
<p>The future plan is to have the AspectJ weacing and caching parts of Equinox Weaving being reimplemented on
top of the OSGi Weaving Specification. Contributions to this are highly welcome!</p>

<h3>History</h3>
<p>The project was developed under the name "Equinox Aspects" as part of the incubator of the Equinox project some
time ago. Therefore if you find resources calling it Equinox Aspects, thats we this comes from. Equinox Aspects graduated
and was renamed into Equinox Weaving within the Helios release timeframe.</p>

</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
