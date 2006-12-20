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
<p class=bar>News</p>
<p>The Aspects project is pleased to announce the availability of Version 1.0.1.
  This release, which is available from the update site or as a download, includes Phase I
  and Phase II of the project. Most importantly the co-opt programming model no longer
  requires a replacement system bundle. This code 
  comprises an OSGi Framework extension, tests and demos that allow you to create flexible
  aspect-oriented applications using Eclipse and AJDT. These can be deployed as bundles, 
  Eclipse plug-ins or an RCP application using a seemless 
  <a href="http://www.eclipse.org/aspectj/">AspectJ</a> load-time weaving 
  environment. Phase I supports the "opt-in" model of aspect weaving described previously on the
  <a href="http://dev.eclipse.org/mhonarc/lists/equinox-dev/msg00444.html">equinox-dev<a>
  mailing list.
  Phase II introduces the "co-opt" model and includes an Eclipse "Tooltip" demo.
  Phase III will follow shortly and include byte-code 
  caching. The next stage of the project will integrate the AJEER programming model into this 
  aspect-oriented runtime.</p>
<p>There is an expanded set of demos available for download including several that show how 
to implement and deploy new or modified extension points for existing plug-ins.
<p>Please read <a href="getting_started.php">Getting Started</a> guide.
  
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
  into general OSGi bundles. It does not matter if the pointcuts you defined inside the
  aspects contain join points that are defined by classes within the same bundle or any
  other bundle in your installation. The load-time weaving extension will take care that
  your aspects are woven with the appropriate classes at load-time.</p>
<p>To illustrate this lets assume the following situation: You would like to write an
  aspect that traces something within the JDT plug-ins of Eclipse. Without some kind of
  load-time aspect weaving you would somehow need to recompile those JDT plug-ins using
  AJDT (for example) together with your aspect. By using the load-time aspect weaving
  extension all you need is to implement your aspect and add that bundle to your system.
  The load-time aspect weaving extension takes care of weaving your aspect with the
  JDT code as it is loaded. And it doesn?t matter if a new JDT is installed by the user
  later on. The next time your application is started the load-time aspect weaving will
  take care of weaving your aspect into these bundles as well, if necessary.</p>
<p>With this technology is becomes possible to modularize crosscutting concerns across
  different plug-ins while keeping the idea of separate compilation for bundles.</p>

<p class=bar>Goals</p>
<p><b>Provide Runtime Modularity and Versioning for Crosscutting Concerns:</b> Aspects are used to implement crosscutting concerns. However such concerns usually comprise of interfaces, classes and configurations as well as at least one aspect. OSGi bundles provide an ideal mechanism for packaging and applying crosscutting concerns. Aspects can also provide a new interface to existing functionality: rather than explicitly invoking a security API methods that require authorization can be selected using pointcut or identified using an annotation.
<p><b>Facilitate the Independent Delivery of Crosscutting Capability:</b> Traditionally AspectJ applications have been compiled and woven at the same time. This produces a complete application with no special requirements other than a dependence on the AspectJ runtime which can be executed on any JVM. However this monolithic approach prevents elements of the application and the aspects themselves from evolving separately. An aspect-enabled OSGi allows an application to be deployed and maintained as a set of components which implement both core and crosscutting capability.

<p class=bar>Events</p>
<p>Both investigators plan to be at EclipseCon 2007. If you want to learn more 
about AspectJ please register for the <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3575"/>tutorial</a>.
Also why not vote for the proposed long talk: <a href="http://eclipsezilla.eclipsecon.org/show_bug.cgi?id=3848"/>
AOP and OSGi - A Marriage Made in Heaven</a>.
<p>Here are the slides from EclipseCon 2006:
<ul>
<li>Demo: Integrating Load-Time Weaving into OSGi (<a href="EclipseCon2006-DemoIntegratingLoadTimeWeavingIntoOSGi.ppt">slides, ppt</a>)</li>
</ul>

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
    <td>equinox-incubator/aspects</td>
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
