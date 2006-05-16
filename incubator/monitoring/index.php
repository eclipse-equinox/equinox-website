<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Equinox OSGi incubator - Remote Resource Monitoring</title>
<link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" href="../../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class="bar">Mission Statement</p>
<p>To provide Eclipse users with the ability to leverage the advantages of jmx by providing
a framework for monitoring resources remotely that are contributed by bundles installed
on the host machine.  The term 'resources' is used to describe something as specific
as a single object or something as abstract as an OSGI bundle.</p>
<p>See the <a href="http://www.eclipse.org/equinox/documents/tools-proposal.php">incubator proposal</a> for more detail.</p>
<p class="bar">Working With the remote monitoring framework</p>
<p>The jmx incubator uses the main <a href="../resources.php">incubator
    resources</a> with the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td><strong>Bugs</strong></td>
    <td colspan="2">Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bmonitoring%5D&classification=Eclipse&product=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[monitoring]</a></strong></td>
  </tr>

  <tr>
    <td width="11%" rowspan="2" valign="top"><strong>CVS</strong></td>
    <td width="30%"><strong>Branch</strong></td>
    <td width="59%"><strong>Project</strong></td>
  </tr>
  <tr>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.client.feature</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.server.feature</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.core.resources.jmx</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.client</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.common</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.rmi</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.server</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.jmx.vm</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.preferences.jmx</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.osgi.jmx</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.swt.jmx</tt></td>    
  </tr>
  <tr>
  	<td> </td>
    <td>HEAD</td>
    <td><tt>org.eclipse.equinox.incubator.releng</tt></td>    
  </tr>
</table>
<br/>

<p class="bar">Latest Pre-Built Zips</p>
If you don't want to check the code out of the repository and export your own plug-ins and 
features, here are some zip files for the client and server.
<ul>
<li>org.eclipse.equinox.monitoring.client <a href="downloads/org.eclipse.equinox.monitoring.client_1.0.0.200605161524.zip">v1.0.0.200605161524</a></li>
<li>org.eclipse.equinox.monitoring.server <a href="downloads/org.eclipse.equinox.monitoring.server_1.0.0.200605161524.zip">v1.0.0.200605161524</a></li>
</ul>

<p class="bar">Current Activity</p>
The current implementation consists of a set of features and bundles that are intended to be placed
in your eclipse install.  <br/>

Requirements:
<ul>
<li>Java runtime version 1.4 or 1.5 depending on which plugins are to be used.
<li>Tested with Eclipse 3.2RC1.
</ul>

Development:
<ul>
<li>Check out the <tt>org.eclipse.equinox.incubator.releng</tt> project from the repository.</li>
<li>Navigate to the <tt>monitoring</tt> sub-folder.</li>
<li>Select the appropriate project-set file(s) and import them.</li>
</ul>

Running:
<ul>
<li>Load the projects from the repository (see above) and then run a Runtime Workbench
with the project as part of your plug-in set.</li>
</ul>
<blockquote>or</blockquote>
<ul>
<li>Unzip the client and/or the server feature(s) into an existing Eclipse install.
</ul>
<blockquote>then</blockquote>
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
<p class="bar">Active investigators</p>
<ul>
<li>Jeff McAffer (IBM)</li>
<li>DJ Houghton (IBM)</li>
<li>Robert Connell (UNB)</li>
</ul>
</body>
</html>
