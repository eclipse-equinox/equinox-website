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
<br>
<p class=bar>Mission Statement</p>

<p>
The goal of the Equinox Incubator is to experiment with techniques for 
      broadening the range of Eclipse platform runtime configurations. For example, 
      areas such as security, the use of Equinox on the server and Aspect weaving
      are prime candidates for investigation in the Incubator.</p>

      <p>These issues do not severely impact the usefulness of Eclipse as a development 
        tool platform but they do affect the use of Eclipse in more constrained 
        environments (e.g., handheld devices, IT managed environments, mass-appeal 
        applications, servers, etc.). The Incubator project will investigate such issues and 
        develop approaches which are practical and applicable to the main Equinox
        code base. </p>

<p class=bar><a name="workareas"></a>Work Areas</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="aspects/index.php" target="_top"><b>Aspects</b></a><br>
    Issues around Aspect-oriented programming, load-time weaving and modularity.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="security/index.html" target="_top"><b>Security, roles, profiles</b></a><br>
    Study how enable a security model.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td><a href="layering/index.html" target="_top"><b>Framework Layering</b></a> (obsolete?)<br>
    The aim of this work is to separate a fairly general purpose module layer
      out of the OSGi framework which supports interface sharing by specification
      version, as defined in OSGi R3, as well as class sharing by implementation
      version, as supported in Eclipse 3.0. This separation allows for more flexibility
      in the use scenarios for OSGi framework implementations. This layering
      is being discussed in the OSGi Core Platform Expert Group and the intention
      is to feed the practical experience gained in Equinox into the CPEG work. </td>
  </tr>
</table>

<p class=bar>Old work areas</p>
<p>See the <a href="archive">Equinox Incubator Archive</a> for details of previous
  work areas.</p>

<P class="bar">What's New</P>
<P><B>Oct 12</B> - <IMG height="14"
	src="http://www.eclipse.org/images/new.gif" width="31"> 
Presentation on SWORD4J at OSGi Congress in Paris now
available on the <A href="security/documents/index.html" target="_parent">documents page</A>.<BR>
<BR>
<B>Sept 30</B> - <IMG src="http://www.eclipse.org/images/new.gif"
	width="31" height="14"> A collection of Eclipse plug-ins designed to
aid in performing security related development tasks for Java, Eclipse,
and OSGi bundle developers has been released on the IBM alphaWorks
website. The download is called, <B>IBM Security Workbench Development
Evnironment for Java</B> ( <A
	href="http://www.alphaworks.ibm.com/tech/sword4j" target="_blank">SWORD4J</A> ). This
tool was used to <A
	href="http://www.eclipse.org/equinox/incubator/security/EJS/ejs.html"
	target="_parent">analyze the RCP plug-ins</A> within the equinox project.<BR>
<BR>
</P>
<p class=bar>Committers</p>
      <p>The following people are committers on the Equinox Incubator:</p>
      <ul>
        <li>Jennifer Fogell, IBM PvC</li>
        <li>Olivier Gruber, IBM Research</li>
		<li>Ted Habeck, IBM Research</li>
        <li>BJ Hargrave, IBM PvC</li>
        <li>Peter Kriens, aQute</li>
        <li>Martin Lippert, it-agile</li>
        <li>Jeff McAffer, IBM Rational (Project lead)</li>
        <li>Pascal Rapicault, IBM Rational</li>
        <li>Tom Watson, IBM PvC</li>
        <li>Matthew Webster, IBM Hursley</li>
      </ul>

</body>
</html>
