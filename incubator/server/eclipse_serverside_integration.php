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
<p class=bar>Improving Eclipse / Server-Side Integration - Overview</p>
<p>The Eclipse runtime was originally designed to run an IDE. It's a
testament to the runtime's versatility that Eclipse is now used in a
wide variety of RCP applications. Running on the server pushes this further and
raises issues such as:</p>
<ol>
	<li>The OSGi URL Handlers Service requires two singleton operations be
	set with an OSGi aware version
	<ul>
		<li>URL.setURLStreamHandlerFactory(…)</li>
		<li>URLConnection.setContentHandlerFactory(…)</li>
	</ul>
	</li>
	<li>The OSGi Conditional Permission Admin Specification requires the
	SecurityManager be set to an OSGi aware version</li>
	<li>Equinox uses System Properties for configuration properties, and as
	the container for BundleContext properties.</li>
</ol>
<p>For the first two items, a key challenge to be managed is the fact
that in many cases, J2EE app servers set these singletons before
Equinox starts. This makes it dangerous or impossible for Eclipse
to set them. The third item prevents Equinox from being
instantiated multiple times. </p>
<p>Tackling these issues will result in fairly large,
cross-cutting changes in Equinox that are very difficult to
resolve with individual patches. The goal for this area is to find a way to
make these changes without compromising compatibility with existing Eclipse
applications. Any changes will trace the HEAD very closely to facilitate integration.
Ideally these changes would occur in the 3.2 timeframe.</p>
</body>