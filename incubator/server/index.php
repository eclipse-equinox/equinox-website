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
<p>Eclipse is in use on the desktop in tools and RCP applications. The eRCP and
  other projects are pushing it into mobile phones and handheld devices. Now
  there is significant interest in Equinox on the server. The Apache Geronimo
  folks are interested. Several &quot;people shipping server-based products today&quot;
  are also wanting to move to OSGi. This incubator project is targetted at eliminating
  barriers to using and integrating OSGi (and Equinox more specifically) on
  the server.</p>
<p>See the <a href="proposal.php">incubator proposal</a> for more detail.</p>
<p class="bar">Working With the Server-side Incubator</p>
<p>The Server-side incubator uses the main <a href="../resources.php">incubator
    resources</a> with
  the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td><strong>Bugs</strong></td>
    <td colspan="2">Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bserver%5D&classification=Eclipse&product=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[server]</a></strong></td>
  </tr>

  <tr>
    <td width="11%" rowspan="2" valign="top"><strong>CVS</strong></td>
    <td width="30%"><strong>Branch</strong></td>
    <td width="59%"><strong>Project</strong></td>
  </tr>
  <tr>
    <td>server</td>
    <td><i>(current activity uses the main Eclipse 3.2 HEAD)</i></td>    
  </tr>
</table>
<p class="bar">Current Activity</p>
<ul>
<li><b><a href="eclipse_serverside_integration.php">Improving Eclipse / Server-Side Integration</a></b><br />
<i>Helping to make Eclipse a stronger platform for server-side integration.</i>
</li>
<li><b><a href="embedding_in_a_servlet_container.php">Embedding in a Servlet Container</a></b><br />
<i>Building common infrastructure for launching eclipse from a servlet container and creating OSGi based servlet applications.</i>
</li>
</ul>
</p>

<p class="bar">Resources / Articles</p>
<ul>
<li><a href="http://www.abo.fi/~mbuechi/publications/EclipsePlugins.html">Eclipse Plugin-Based Applications and J2EE Components</a> (Martin Büchi) <br />
<i>Martin was integrating with pre-OSGi Eclipse but nonetheless ran into many similar problems. Very interesting stuff.</i></li>
<li><a href="http://www.infonoia.com/en/content.jsp?d=inf.05.07">Eclipse goes Server-side!</a> and 
<a href="http://www.infonoia.com/en/content.jsp?d=inf.05.09">Developing Eclipse/OSGi component webapps</a> (Wolfgang Gehner) <br />
<i>An early adopter of this technology, in these articles Wolfgang motivates the building of Web UI components with OSGi.</i>
</li>
</ul>


<p class="bar">Active investigators</p>
<ul>
<li>Simon Kaegi (Cognos)</li>
</ul>
</body>
</html>
