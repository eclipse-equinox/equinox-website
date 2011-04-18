<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox 3.7.0 endgame plan";
	$pageKeywords	= "equinox, 3.7.0, milestone, schedule, endgame, indigo";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
<div id="midcolumn">
	<h2>$pageTitle</h2>
		<div class="homeitem3col">
			<h3>Status</h3>
			<p><b>Equinox follows the same schedule as the Eclipse project.  Check the Eclipse 
			  <a href="http://www.eclipse.org/eclipse/development/plans/freeze_plan_3_7.php">freeze plan</a> plan for the current status.
			</b></p>
      	</div>
		<div class="homeitem3col">
			<h3>Useful Links</h3>
			<ul>
			<li><a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html ">Build Schedule</a> - details on build times.</li>
			<li><a href="http://wiki.eclipse.org/index.php/3.3_Release_checklist">Eclipse Release Checklist</a> -
				 lists various things that need to be checked before each release.</li>
			<li><a href="http://www.eclipse.org/projects/project-plan.php?projectid=rt.equinox">Equinox Project Plan</a></li>
			<li><a href="http://wiki.eclipse.org/index.php/Indigo">Indigo Simultaneous Release</a></li>
			</ul>
      	</div>
    </div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
