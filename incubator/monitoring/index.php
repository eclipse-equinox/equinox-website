<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Resource Monitoring";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, monitor";
	
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
<p>To provide 
a framework for monitoring resources that are contributed by bundles installed
on the host machine.  The term 'resources' is used to describe something as specific
as a single object or something as abstract as an OSGI bundle.</p>
<p>See the <a href="http://www.eclipse.org/equinox/documents/tools-proposal.php">incubator proposal</a> for more detail.</p>

			<p class=bar>Latest News</p>
<table width="100%" border="0">
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><img src="http://eclipse.org/images/new.gif">June 6, 2006 - Added a new feature for the common code and removed duplicate bundles
		from the client and server.
    </td>
</tr>
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%">May, 2006 - Initial release.
    </td>
</tr>
</table>

			<p class=bar>Working with the resource monitoring framework</p>
<p>The monitoring incubator uses the main <a href="../resources.php">incubator
    resources</a> with the following refinements.</p>

<table width="100%" border="0">
  <tr>
    <td><strong>Bugs</strong></td>
    <td>Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bmonitoring%5D&classification=Eclipse&product=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[monitoring]</a></strong></td>
  </tr>

<tr>
	<td> </td>
	<td><center><strong>Projects</strong></center></td>
</tr>

<tr>
	<td><strong>RelEng</strong></td>
	<td> </td>
</tr>

  <tr>
    <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
    <td width="98%"><b>Equinox Incubator Release Engineering
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.incubator.releng">org.eclipse.equinox.incubator.releng</a>)</b><br>
    This project contains the Team Project Set files to aid developers in loading the projects into their workspace.
    Developers interested in loading the monitoring projects into their workspace should load this project, navigate 
    to the <em>monitoring</em> folder, selecting the project set file (<em>.psf</em>) that they are interested 
    in, and then choose <em>Import Project Set...</em> from the context menu.
    </td>
  </tr>
  
<tr>
	<td><strong>Common</strong></td>
	<td> </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Common Feature
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.common.feature">org.eclipse.equinox.jmx.common.feature</a>)</b><br>
    This is the feature project for the common code.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Common
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.common">org.eclipse.equinox.jmx.common</a>)</b><br>
    This bundle contains the resource monitoring code which is common to both the client and the server.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Apache Commons Codec
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.apache.commons.codec">org.apache.commons.codec</a>)</b><br>
    This bundle contains Apache Common Codec code which is a requirement of the Apache XML-RPC bundle.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Apache Commons HTTP Client
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.apache.commons.httpclient">org.apache.commons.httpclient</a>)</b><br>
    This bundle contains Apache Commons HTTP Client code which is a requirement of the Apache XML-RPC bundle.</td>
</tr>
  
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Apache Commons Logging
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.apache.commons.logging">org.apache.commons.logging</a>)</b><br>
    This bundle contains Apache Commons Logging code which is a requirement for the Apache XML-RPC bundle.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Apache Web Services Common Utils
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.apache.ws.commons.util">org.apache.ws.commons.util</a>)</b><br>
    This bundle contains Apache Web Services Common Utils code which is a requirement for the Apache XML-RPC bundle.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Apache Web Services JaxME
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.apache.ws.jaxme">org.apache.ws.jaxme</a>)</b><br>
    This bundle contains Apache Web Services JaxME code which is a requirement for the Apache XML-RPC bundle.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Apache XML-RPC
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.apache.xmlrpc">org.apache.xmlrpc</a>)</b><br>
    This bundle contains the code for Apache XML-RPC. This is an alternative transport for the resource monitoring
    framework.</td>
</tr>

<tr>
	<td><strong>Client</strong></td>
	<td> </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Client Feature
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.client.feature">org.eclipse.equinox.jmx.client.feature</a>)</b><br>
    This is the feature project for the client.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Client
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.client">org.eclipse.equinox.jmx.client</a>)</b><br>
    This project contains the client-specific code.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Client RMI
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.client.rmi">org.eclipse.equinox.jmx.client.rmi</a>)</b><br>
    This project contains the client portion of the code which contributes RMI as a transport.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Client XML-RPC
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.client.xmlrpc">org.eclipse.equinox.jmx.client.xmlrpc</a>)</b><br>
    This project contains the client portion of the code which contributes XML-RPC as a transport.</td>
</tr>

<tr>
	<td><strong>Server</strong></td>
	<td> </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Server Feature
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.server.feature">org.eclipse.equinox.jmx.server.feature</a>)</b><br>
    This is the feature project for the server.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Server
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.server">org.eclipse.equinox.jmx.server</a>)</b><br>
    This project contains the server-specific code.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Server RMI
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.server.rmi">org.eclipse.equinox.jmx.server.rmi</a>)</b><br>
    This project contains the server-specific code which contributes RMI as a transport. By default, RMI is the
    default transport for the resource monitoring server.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Server XML-RPC
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.server.xmlrpc">org.eclipse.equinox.jmx.server.xmlrpc</a>)</b><br>
    This comment contains the server-specific code which contributes XML-RPC as a transport. To enable XML-RPC
    as the default transport for the server, you need to set the following system property:<br>
    &nbsp;&nbsp;&nbsp;&nbsp;<em>org.eclipse.equinox.jmx.server.protocol=xmlrpc</em></td>
</tr>

<tr>
	<td><strong>Extensions</strong></td>
	<td> </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>VM Extension
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.jmx.vm">org.eclipse.equinox.jmx.vm</a>)</b><br>
    This project provides the server-specific code that contributes information about the VM such as the number of classes
    loaded, the amount of memory used, etc.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Preferences Extension
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.equinox.preferences.jmx">org.eclipse.equinox.preferences.jmx</a>)</b><br>
    This project contributes the server-specific code which contributes information about the preferences.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>Resources Extension
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.core.resources.jmx">org.eclipse.core.resources.jmx</a>)</b><br>
    This project contributes information and methods for manipulation of workspace resources. (as defined by
    the <em>org.eclipse.core.resources</em> bundle.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>OSGi Extension
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.osgi.jmx">org.eclipse.osgi.jmx</a>)</b><br>
    This project contributes information about OSGi bundles and services.</td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><b>SWT Extension
        (<a href="http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/org.eclipse.swt.jmx">org.eclipse.swt.jmx</a>)</b><br>
    This project contributes informatioin about SWT resources by exposing the 
    <a href="http://www.eclipse.org/swt/tools.php">Sleak</a>
    tool and the information it provides.</td>
</tr>

</table>

			<p class=bar>Latest Pre-Built Zips</p>
If you don't want to check the code out of the repository and export your own plug-ins and 
features, here are some zip files for the client and server.
<ul>
<li>org.eclipse.equinox.monitoring.client <a href="downloads/org.eclipse.equinox.monitoring.client_1.0.0.200606061044.zip">v1.0.0.200606061044</a></li>
<li>org.eclipse.equinox.monitoring.server <a href="downloads/org.eclipse.equinox.monitoring.server_1.0.0.200606061044.zip">v1.0.0.200606061044</a></li>
</ul>

			<p class=bar>Running the Framework</p>
The current implementation consists of a set of features and bundles that are intended to be placed
in your eclipse install.  <br/>

Requirements:
<ul>
<li>Java runtime version 1.4 or 1.5 depending on which plugins are to be used.
<li>Tested with Eclipse 3.2RC6.
</ul>

Running:
<ul>
<li>Start the Eclipse application which contains the installed server feature (starting Eclipse by default starts 
the jmx server).
<li>Start the Eclipse application (if not already running) which contains the installed client feature and switch 
to the 'JMX Resource Management' perspective.</li>
<li>Select 'Open Connection' from the 'JMX Server' menu in the toolbar and enter the host and 
protocol to use to connect to the server.  Note, if a server's resources (objects) are found to exist 
in the same virtual machine as the one which the client is running, a dialog will notify you of this 
and give you the option of bypassing the setup of a tranport layer to facilitate communication between the 
client and server.</li>
<li>Once connected, the list of available 'contributions' (mbeans) registered with the server are shown in a tree view.  
Navigating the tree view allows you to inspect and invoke operations exposed by the resources 
contributed as mbeans.</li>
<li>To disconnect, select 'Disconnect' from the 'JMX Server' menu in the toolbar.</li>
</ul>
</p>

			<p class=bar>Active Investigators</p>
				<ul>
					<li>Jeff McAffer (IBM)</li>
					<li>DJ Houghton (IBM)</li>
					<li>Robert Connell (UNB)</li>
				</ul>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
	include "dir-links.html";
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
