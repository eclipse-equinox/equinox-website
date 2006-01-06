<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Improving Eclipse / Server-Side Integration</title>
<link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" href="../../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class="bar">Improving Eclipse / Server-Side Integration - Overview</p>
<p>As mentioned in the original proposal, the Eclipse runtime was originally designed to
support a desktop IDE but has proven to be useful in  other contexts. One of the key goals
of this incubator is to look at ways to improve server-side integration of Eclipse.</p> 

<p>As much as possible activity occurs directly on the main Eclipse HEAD through bug reports 
and conversation on the equinox-dev mailing list. <br /><i>Note: Should a sufficiently large
sets of changes be considered the equinox-incubator "server" branch will be used however it
is not currently active.</i></p>

<p class="bar">Current Activity</p>
<p><strong>OSGi URL Handler Service</strong>
<ul>
<li><i>singleton factory operations - RESOLVED - see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=107909">bug 107909</a></i></li>
<li><i>multiplexed factories - IN PROGRESS - see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=121472">bug 121472</a></i></li>
</ul> 
</p>
<hr />
<p><strong>Framework Configuration</strong>
<ul>
<li><i>use of system properties - IN PROGRESS - see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=105851">bug 105851</a></i></li>
</ul>
</p>
<hr />
<p><strong>Conditional Permission Admin</strong>
<ul>
<li><i>requires control of security manager - not currently logged</i></li>
</li>
</ul>
</p>
<hr />
</body>