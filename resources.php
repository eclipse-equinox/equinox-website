<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle = "Equinox Resources";
	$pageKeywords = "equinox, osgi, framework, runtime, resources";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
	<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	  <tr>
	    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	    <td><a href="http://www.eclipse.org/projects/project_summary.php?projectid=rt.equinox" target="_top"><b>Summary</b></a><br>
	    The Equinox project summary</td>
	  </tr>
	  <tr>
	    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	    <td><a href="http://wiki.eclipse.org/Equinox" target="_top"><b>Wiki</b></a><br>
	    The Equinox project Wiki</td>
	  </tr>
	  <tr>
	    <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	    <td><a href="news://news.eclipse.org/eclipse.technology.equinox" target="_top"><b>Newsgroup</b></a><br>
	    Talk to the people using Equinox</td>
	  </tr>
	  <tr>
	    <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	    <td width="98%"><a href="http://dev.eclipse.org/mailman/listinfo/equinox-dev" target="_top"><b>Mailing
	            list </b></a><br>
	    Talk to the people working on Equinox</td>
	  </tr>
	  <tr>
	    <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	    <td width="98%"><a href="http://eclipse.org/equinox/planning/" target="_top"><b>Planning</b></a><br>
	    The current and past release plans for the Equinox project</td>
	  </tr>
		<tr>
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	      <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=Equinox&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top"><b>Bugs/Issues</b></a><br>
	    Discover the current bugs and issues in Equinox. Note that a large amount of the activity goes on in Bugzilla. 
	    You can <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=RT&product=Equinox&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" target="_top">browse the bugs</a> 
	    or configure your Bugzilla account email preferences to watch the various Equinox inbox
	      users listed below to monitor bug activity of interest to you.
	      <ul>
			<li>equinox.compendium-inbox@eclipse.org</li>
			<li>equinox.components-inbox@eclipse.org</li>
			<li>equinox.framework-inbox@eclipse.org</li>
			<li>equinox.incubator-inbox@eclipse.org</li>
			<li>equinox.p2-inbox@eclipse.org</li>
			<li>equinox.security-inbox@eclipse.org</li>
			<li>equinox.server-side-inbox@eclipse.org</li>
			<li>equinox.website-inbox@eclipse.org</li>
	      </ul>
	      <p><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Equinox">Enter new bugs</a> by choosing the related 
	      component and providing full details.
	      </td>
	  </tr>
		<tr>
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	      <td><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/?root=RT_Project" target="_top"><b>CVS</b></a><br>
	      The Equinox code is hosted in the RT project repository and
	        is available via <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.equinox/?root=RT_Project">web
	        access</a> or direct CVS access. For direct access, use anonymous login
	        to the CVS repo
	        <blockquote>
	          <p>:pserver:anonymous@dev.eclipse.org:/cvsroot/rt</p>
	        </blockquote>
	        <p>The Equinox work goes on in various folders as appropriate for the
	          work being done. See the project lists in the <a href="framework/index.php#frameworkprojects">framework</a>, <a href="bundles/index.php#bundleprojects">bundles</a> and <a href="incubator/index.php#workareas">incubator</a> components
	          for more details.</p>
	      </td>
	  </tr>
		<tr>
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
	      <td> <a href="http://eclipse.org/equinox" target="_top"><b>Website</b></a><br>
	      The Equinox  website itself is hosted in a CVS repository and mirrored
	          on a conventional HTTP server every minute or so. This allows use of
	          PHP, Flash, ... and enables versioning and diffing using Eclipse. The
	          site is open for editing by all Equinox committers using:
	        <blockquote>
	          <p>:extssh:&lt;you here&gt;@dev.eclipse.org:/cvsroot/org.eclipse</p>
	        </blockquote>
	        <p>The Equinox website is in </p>
	        <blockquote>
	          <p>www/equinox</p>
	        </blockquote>        
	      <p>You can use Eclipse to check out the whole site and then edit and commit.
	      Remember your changes will take a minute or so to be reflected in the real
	        site.</p></td>
	  </tr>
	</table>
	<p>&nbsp;</p>
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
