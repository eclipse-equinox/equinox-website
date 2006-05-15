<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta
	http-equiv="Content-Type"
	content="text/html; charset=iso-8859-1" />
<title>The Equinox Project - Remote management using JMX</title>
<link rel="stylesheet" href="http://eclipse.org/default_style.css" type="text/css" />
<link rel="stylesheet" href="../../equinox.css" type="text/css" />
</head>
<body>
<?php include("nav-include.html") ?>
<p class=bar>Remote management</p>
<p>The goal of Eclipse to become a platform to produce flexible and dynamic applications,
while realized, does not currently allow for changing the behaviour of the application
from a remote location.  By providing a framwork that consists of a few core libraries
that would allow the execution of a jmx server, users would be able to perform operations
such as installing/uninstalling OSGI bundles or manipulating any other resource located
on the server.  

Possible use cases:
<ul>
	<li>Alter the functionality provided by hand-held devices from a remote location</li>
	<li>Aid a fellow Eclipse user with debugging or updating their platform.</li>
	<li>Managing an Eclipse applications lifecycle remotely, whether this involves
	starting/stopping/installing/uninstalling services or setting an instance
	variable on some object during execution.</li>
</ul>
<p class="bar">Eclipse Changes for Remote Management Operation</p>

<p>Please direct comments or questions to <a
	href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a>.</p>

</body>
</html>
