<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Equinox OSGi incubator</title>
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
    <td><i>(current activity uses the main Eclipse 3.2 HEAD)</i></td>    
  </tr>
</table>
<br/><IMG height="14"	src="http://www.eclipse.org/images/new.gif" width="31"><a href="./devel.html">Developer resources</a>
<p class="bar">Current Activity</p>
The current implementation consists of a set of features and bundles that are intended to be placed
in your eclipse install.  <br/>
Requirements:
<ul>
<li>Java runtime version 1.4 or 1.5 depending on which plugins are to be used.
<li>Tested with Eclipse 3.2RC1.
</ul>
Running:
<ul>
<li>Unzip the client and/or the server feature(s) into an existing Eclipse install.
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
Note: The client and server archives both contain the <font face="bold">org.eclipse.jmx.common plugin as it is a requirement for both.
</p>
<p class="bar">Active investigators</p>
<ul>
<li>Jeff McAffer (IBM)</li>
<li>DJ Houghton (IBM)</li>
<li>Robert Connell (UNB)</li>
</ul>
</body>
</html>
