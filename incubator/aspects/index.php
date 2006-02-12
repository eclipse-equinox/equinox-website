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
<p>Aspect-oriented computing is continuing to increase in popularity. The modularity
  inherent in OSGi and Eclipse offers unique opportunities for managing and applying
  aspects by supplying them in bundles and directing their application to particular
  sets of bundles. This incubator work area is dedicated to the investigation
  of aspects and OSGi.</p>
<p>The first step will be implement load-time aspect weaving for the platform runtime
  to allow bundles to contribute aspects to the running system. Those aspects would be
  woven into other bundles (if required and defined) at class-loading time.</p>
<p>The goal is to allow developers to use the OSGi runtime of Eclipse together with
  AspectJ by combining the benefits of both worlds. Using the load-time weaving extension
  you are able to add AspectJ aspects to your bundle-based system just by putting them
  into general OSGi bndles. It does not matter if the pointcuts you defined inside the
  aspects contain join points that are defined by classes within the same bundle or any
  other bundle in your installation. The load-time weaving extension will take care that
  your aspects are woven with the appropriate classes at load-time.<br>
  To illustrate this lets assume the following situation: You would like to write an
  aspect that traces something within the JDT plug-ins of Eclipse. Without some kind of
  load-time aspect weaving you would somehow need to recompile those JDT plug-ins using
  AJDT (for example) together with your aspect. By using the load-time aspect weaving
  extension all you need is to implement your aspect and add that bundle to your system.
  The load-time aspect weaving extension takes care of weaving your aspect with the
  JDT code as it is loaded. And it doesn?t matter if a new JDT is installed by the user
  later on. The next time your application is started the load-time aspect weaving will
  take care of weaving your aspect into these bundles as well, if necessary.<br>
  With this technology is becomes possible to modularize crosscutting concerns across
  different plug-ins while keeping the idea of separate compilation for bundles.</p>

<p class=bar>Working With the Aspects Incubator</p>
<p>The Aspects incubator uses the main <a href="../resources.php">incubator resources</a> with
  the following refinements.</p>
<table width="100%" border="0">
  <tr>
    <td>Bugs</td>
    <td colspan="2">Summaries start with <strong><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Baspects%5D%0F%22uct=Equinox&component=Incubator&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit(%22der=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[aspects]</a></strong></td>
  </tr>
  <tr>
    <td width="11%" rowspan="2" valign="top">CVS</td>
    <td width="30%"><strong>Project</strong></td>
    <td width="59%"><strong>Branch</strong></td>
  </tr>
  <tr>
    <td>(current activity uses the main Eclipse 3.2 HEAD)</td>
    <td>aspects</td>
  </tr>
</table>
<p class="bar">Current Activities</p>
<ul>
<li><b>Building a load-time weaving runtime extension</b><br/>
  We are currently trying to unify two slightly different implementautions of load-time aspect
  weaving for the Eclipse runtime: <a href="http://sourceforge.net/projects/ajeer">AJEER</a> and AOSGi (internal IBM implementation).
  Read more about <a href="comparison_ajeer_aosgi.php">how these two approaches relate to each other</a>.
</li>
</ul>
</p>
<p class=bar>Active investigators</p>
<ul>
  <li>Martin Lippert (it-agile)</li>
  <li>Matthew Webster (IBM)</li>
</ul>
</body>
</html>
