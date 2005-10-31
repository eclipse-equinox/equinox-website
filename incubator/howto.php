<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Equinox OSGi incubator</title>
<link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" href="../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class=bar>How to Work in an Incubator</p>

<p>A work in progress...</p>
<p>- the current repo structure gives incubator committers access to the &quot;equinox-incubator&quot; folder
  in the dev.eclipse.org/cvsroot/eclipse repository. We'll call that the &quot;incubator
  repo&quot; even though it is not really a repo on its own (see http://dev.eclipse.org/viewcvs/index.cgi/equinox-incubator/)</p>
<p>- in the incubator repo we currently have a large number of plugin projects.
  In general the HEAD stream of these projects contain copies of code from the
  main Eclipse repo and the content for each work area is in branches off of
  these.</p>
<p>- this is a convenient structure because it allows/encourages the work areas
  to stay in sync with the main code base. Remember, the Equinox incubator is
  for investigating *changes* to the main Equinox/Eclipse code base. As such,
  the work is destined to be merged at some point. By working in branches off
  HEAD we just need to periodically (e.g., every Milestone) update the code in
  head of the various projects. Then the folks in each branch and merge from
  HEAD into their branch and keep up to date.</p>
<p>- An alternative to this approach is to have each incubator keep a copy of
  the projects they are affecting. This is in some ways simpler (makes it easier
  ot archive when the work is done) but increases the burden of keeping up with
  the main code and basically means that people will not do it.</p>
<p>- For new bundles developed in an incubator, we could have separate workarea
  dirs and put the projects in there. I am tempted to say that there will be
  relatively few of these and so we should just put them in the main incubator
  repo. This is simple, flat, ... Work in these can go on in HEAD or in a branch
  off of an initially empty HEAD project.</p>
<p>- in an effort to help newbies understand where things are, each work area
  should document what projects are relevant and what branch it is using. See
  the aspects work area for an example of what I mean (http://eclipse.org/equinox/incubator/aspects)<br>
</p>
<p class=bar>Populating the Repo</p>
<p>&nbsp;</p>
</body>
</html>
