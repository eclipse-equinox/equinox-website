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
<p class=bar>Getting Started</p>
<p>
<ol>
  <li>Install <a href="http://fullmoon.torolab.ibm.com/downloads/drops/R-3.2-200606291905/index.php">Eclipse 3.2 SDK</a>.</li>
  <li>Install <a href="http://www.eclipse.org/ajdt/downloads/">AspectJ Development Tools (AJDT) 1.4.1</a>.</li>
  <li>Check out the org.aspectj.osgi, org.aspectj.osgi.service.weaving and org.eclipse.osgi_3.2.0 bundles
  from the "aspects" folder in the <a href="http://www.eclipse.org/equinox/incubator/howto.php">incubator repository</a>
  and see the readme.txt in the org.aspectj.osgi project.
  Until we have a regular build and update site you will need to 
  use the org.aspectj.osgi Framework Extension bundle fragment in source form.
  Unfortunatley because of <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=143696">Bug 143696</a>
  you also need to use the source version of OSGi that matches the one in your Eclipse SDK.</li>
  <li>Check out all the projects in the "aspects/tests" folder and see the readme.txt in the 
  org.eclipse.osgi.aspectj.tests project for instructions on how to run the basic tests.</li>
  <li>Check out all the projects in the "aspects/demos" folder.</li>
</ol>
</p>

<p class=bar>Troubleshooting</p>
<p>When running the tests or a demo using the AO runtime you 
  should see console output similar to this:
<pre>
info adding AspectJ hooks ...
info Starting AspectJ weaving service ...
info not weaving bundle 'org.eclipse.pde.junit.runtime'
info not weaving bundle 'org.eclipse.jdt.junit.runtime'
info not weaving bundle 'org.junit'
info weaving bundle 'org.eclipse.osgi.aspectj.tests'
info not weaving bundle 'org.eclipse.osgi.aspectj.tests.bundles.spareBundle'
info not weaving bundle 'org.eclipse.osgi.aspectj.tests.bundles.aspectWeaving'
...
</pre>
If you don't see the messages that show the AspectJ Framework Extension starting 
then make sure you are using the config.ini provided. To control the amount of 
diagnostic information use the various system properties declared in that file.
You can also use the diagnostic configuration provided by 
<a href="http://www.eclipse.org/aspectj/doc/released/devguide/ltw-configuration.html#weaver-options">AspectJ LTW</a>.
</body>
</html>
