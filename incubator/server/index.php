<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Server-Side";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>	
<div id="midcolumn">
<h1><?= $pageTitle ?></h1>

<div class="homeitem3col">
<h3>Mission Statement</h3>
<p>Eclipse is in use on the desktop in tools and RCP applications. The eRCP and
  other projects are pushing it into mobile phones and handheld devices. Now
  there is significant interest in Equinox on the server. The Apache Geronimo
  folks are interested. Several &quot;people shipping server-based products today&quot;
  are also wanting to move to OSGi. This incubator project is targetted at eliminating
  barriers to using and integrating OSGi (and Equinox more specifically) on
  the server.</p>
<p>See the <a href="proposal.php">incubator proposal</a> for more detail.</p>
</div>

<div class="homeitem3col">
<h3>Working With the Server-side Incubator</h3>
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
</div>

<div class="homeitem3col">
<h3>Current Activity</h3>
<ul>
<li><b><a href="eclipse_serverside_integration.php">Improving Eclipse / Server-Side Integration</a></b><br />
<i>Helping to make Eclipse a stronger platform for server-side integration.</i>
</li>
<li><b><a href="embedding_in_a_servlet_container.php">Embedding in a Servlet Container</a></b><br />
<i>Building common infrastructure for launching eclipse from a servlet container and creating OSGi based servlet applications.</i>
</li>
</ul>
</p>
</div>

<div class="homeitem3col">
<h3>Resources / Articles</h3>
<ul>
<li><a href="http://www.abo.fi/~mbuechi/publications/EclipsePlugins.html">Eclipse Plugin-Based Applications and J2EE Components</a> (Martin Büchi) <br />
<i>Martin was integrating with pre-OSGi Eclipse but nonetheless ran into many similar problems. Very interesting stuff.</i></li>
<li><a href="http://www.infonoia.com/en/content.jsp?d=inf.05.07">Eclipse goes Server-side!</a> and 
<a href="http://www.infonoia.com/en/content.jsp?d=inf.05.09">Developing Eclipse/OSGi component webapps</a> (Wolfgang Gehner) <br />
<i>An early adopter of this technology, in these articles Wolfgang motivates the building of Web UI components with OSGi.</i>
</li>
</ul>
</div>

<div class="homeitem3col">
<h3>Active investigators</h3>
<ul>
<li>Simon Kaegi (Cognos)</li>
</ul>
</div>
</div>

<div id="rightcolumn">
	<div class="sideitem">
		<h6>Equinox links</h6>
		<ul>
			<li><a href="http://www.eclipse.org/equinox">home</a></li>
			<li><a href="http://www.eclipse.org/equinox/framework">framework</a></li>
			<li><a href="http://www.eclipse.org/equinox/bundles">bundles</a></li>
			<li><a href="http://www.eclipse.org/equinox/incubator">incubator</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/Equinox">wiki</a></li>
			<li><a href="http://www.eclipse.org/equinox/documents">documents</a></li>
			<li><a href="http://download.eclipse.org/eclipse/equinox">downloads</a></li>
			<li><a href="http://www.eclipse.org/equinox/resources.php">resources</a></li>
			<li><a href="http://www.eclipse.org/equinox/framework/planning">planning</a></li>
			<li><a href="http://www.eclipse.org/equinox/faq.php">faq</a></li>
		</ul>
	</div>
</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
