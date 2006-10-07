<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Documents";
	$pageKeywords	= "equinox, osgi, framework, runtime, documents";
	
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
			<h3>Documents</h3>
				<ul>
				  <li><a href="http_quickstart.php">Quickstart Guide to Setting up an HTTP
				      Server</a><br/>
                      <i>An easy set of steps to set up an HTTP server using
                      the Equinox bundles.</i> </li>
				  <li><a href="http://www.abo.fi/~mbuechi/publications/EclipsePlugins.html">Eclipse
				        Plugin-Based Applications and J2EE Components</a> (Martin Büchi) <br />
                      <i>Martin was integrating with pre-OSGi Eclipse but nonetheless
                      ran into many similar problems. Very interesting stuff.</i></li>
				  <li><a href="http://www.infonoia.com/en/content.jsp?d=inf.05.07">Eclipse
				      goes Server-side!</a> and <a href="http://www.infonoia.com/en/content.jsp?d=inf.05.09">Developing
				      Eclipse/OSGi component webapps</a> (Wolfgang Gehner) <br />
                      <i>An early adopter of this technology, in these articles
                      Wolfgang motivates the building of Web UI components with
                      OSGi.</i> </li>
			    </ul>
		</div>
	  <div class="homeitem3col">
			<h3>Presentations</h3>
		</div>
	  <div class="homeitem3col">
	    <h3>Related Documents
	        </h3>
		</div>
		<div class="homeitem3col">
		  <ul>
				<li> <a href="http://osgi.org/osgi_technology/download_specs.asp?section=2">OSGi specifications</a></li>
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
