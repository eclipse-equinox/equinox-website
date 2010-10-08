<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Bundles - Resources";
	$pageKeywords	= "equinox, osgi, framework, runtime";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML

	<div id="midcolumn">
		<h2>$pageTitle</h2>

<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="/equinox/images/arrow.png"></td>
      <td width="98%"><a href="news://news.eclipse.org/eclipse.technology.equinox" target="_top"><b>Newsgroup</b></a><br>
    Talk to the people using Equinox</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png"></td>
      <td><a href="http://dev.eclipse.org/mailman/listinfo/equinox-dev" target="_top"><b>Mailing
            list </b></a><br>
    Talk to the people working on Equinox</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png"></td>
      <td><a href=https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%0F%22uct=Equinox&component=Bundles&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit(%22der=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime&field0-0-0=noop&type0-0-0=noop&value0-0-0= target="_top"><b>Bugs/Issues</b></a><br>
    Discover the current bugs and issues in Equinox Bundles component. Note
      that a large amount of the activity goes on in Bugzilla. Configure your
      Bugzilla account email preferences to watch the equinox.bundles-inbox@eclipse.org
      user to monitor bug activity.</td>
  </tr>
	<tr>
      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png"></td>
      <td>
        <a href="http://dev.eclipse.org/viewcvs/index.cgi/" target="_top"><b>CVS</b></a><br>
      The Equinox Bundles code repository is part of the normal Eclipse project
        repository and is available via <a href="http://dev.eclipse.org/viewcvs/index.cgi/">web
        access</a> or direct CVS access. For direct access, use anonymous login
        to the CVS repo</p>
        <blockquote>
          <p>:pserver:anonymous@dev.eclipse.org/cvsroot/eclipse</p>
        </blockquote>
        <p>The Equinox work goes on in various folders as appropriate for the
      bundles being developed. For details, see the list of <a href="index.php#bundleprojects">Bundle
      projects</a>.</td>
  </tr>
</table>
	</div>


EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
