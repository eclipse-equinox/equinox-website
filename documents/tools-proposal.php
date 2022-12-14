<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle = "The Equinox Project - Introspection Tools Proposal";
	$pageKeywords = "equinox, osgi, framework, runtime, resources";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
<p>The goal of Eclipse is to become a platform to produce flexible and dynamic applications.
  In such a dynamic environment, it is often hard to know what is happening or
to explain why the system is behaving as it is. Over the history of Eclipse,
  various teams have put together tools (e.g, Core tools, Sleak, ...). This proposed
  incubatory is a recognition that some of the tools we have in place today (e.g.,
  Core Tools) are going neglected and that there are additional/new technologies
  available
  for monitoring, introspecting and managing running OSGi/Eclipse systems (e.g.,
  JMX, aspects, ...)
<p>This incubator carries the very modest
  scope of providing extensible frameworks in support of people instrumenting
  or outfitting Eclipse/OSGi systems such that they can be observed from the
  outside. For example, we propose a simple JMX server infrastruture that runs
  in an instance of OSGi. This framework allows users to contribute providers
  which in turn expose managed objects (i.e., MBeans) for use/interaction from
  local or remote clients. 
<p>While the main focus of this incubator is on the underlying plumbing, we do
  intend
      to implement rudimentary Eclipse user interfaces to facilitate the use
  of the monitoring tools.

<h3>Interested Parties</h3>
<ul>
  <li>Robert Connell (UNB)</li>
  <li>DJ Houghton (IBM)</li>
  <li>Simon Kaegi (Cognos)</li>
  <li>Jeff McAffer (IBM)</li>
  <li>Pascal Rapicault (IBM)</li>
  <li>Thomas Watson (IBM)</li>
</ul>
<p>Please direct comments or questions to <a
	href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a>.</p>

</div>
EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
