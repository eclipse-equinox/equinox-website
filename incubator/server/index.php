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
<p class=bar>Mission Statement</p>
<p>Eclipse is in use on the desktop in tools and RCP applications. The eRCP and
  other projects are pushing it into mobile phones and handheld devices. Now
  there is significant interest in Equinox on the server. The Apache Geronimo
  folks are interested. Several &quot;people shipping server-based products today&quot;
  are also wanting to move to OSGi. This incubator project is targetted at eliminating
  barriers to using and integrating OSGi (and Equinox more specificially) on
  the server.</p>
<p>See the <a href="proposal.php">incubator proposal</a> for more detail.</p>
<p class=bar>Working With the Server-side Incubator</p>
<p>The Server-side incubator uses the main <a href="../resources.php">incubator
    resources</a> with
  the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td>Bugs</td>
    <td colspan="2">Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bserver%5D%0F%22uct=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit(%22der=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[server]</a></strong></td>
  </tr>
  <tr>
    <td width="11%" rowspan="2" valign="top">CVS</td>
    <td width="30%"><strong>Project</strong></td>
    <td width="59%"><strong>Branch</strong></td>
  </tr>
  <tr>
    <td>org.eclipse.osgi</td>
    <td>server</td>
  </tr>
</table>
<p class=bar>Embedding in a Servlet Container</p>
<p>One of the objectives in the initial proposal was to look at what's involved in launching
and interacting with various server-side containers. Currently, there is active work in the
equinox-incubator CVS looking at embedding in a servlet container.</p>

<p>There are three Eclipse projects involved:
<ul>
<li><b>org.eclipse.equinox.servlet.bridge (Java)</b><br />
<i>Launches the framework and provides a place for the framework to hook back into the servlet container.</i>
</li>
<li><b>org.eclipse.equinox.servlet.http (Bundle)</b><br />
<i>Hooks back into the servlet bridge and proxies through the servlet container to provide an OSGi Http Service.</i>
</li>
<li><b>org.eclipse.equinox.servlet.ext (Bundle)</b><br />
<i>Provides a servlet, resource, and httpcontext extension points based on an OSGi HttpService.</i>
</li>
</ul>
</p>

<p>At a high-level the idea is to create a WAR file structured as follows:
<ul style="list-style-type: none">
<li>/WEB-INF
 <ul style="list-style-type: none">
 <li>/web.xml (with one servlet entry assigning all incoming requests to the BridgeServlet)</li>
 <li>/lib/servletbridge.jar (the classes associated with the equinox.servlet.bridge)</li>
 <li><b>/platform (the eclipse dir)</b>
  <ul style="list-style-type: none">
  <li>/configuration</li>
  <li>/features</li>
  <li>/plugins</li>
  </ul>
 </li>
 </ul>
</li>
</ul>
<p>The above structure is meant to be very close to an RCP application with the /platform directory
holding something similar to an RCP application (but naturally containing components more sutitable
for server side interaction). As with RCP applications there are a wide variety of possible
configurations and what's given in org.eclipse.equinox.servlet is just one possibility.</p>

<p><i>Note: To build and use these projects you'll need a build of Eclipse 3.2M4 or later. Slightly
earlier integration builds (I20051123-1200 or later) should also work. This is just a set of preliminary
notes for this work area. If you're interested and find anything unclear or have questions please post
to the dev list.</i></p>  

<p class=bar>Active investigators</p>
<ul>
<li>Simon Kaegi (Cognos)</li>
</ul>
</body>
</html>
