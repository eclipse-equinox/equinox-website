<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Documents";
	$pageKeywords	= "equinox, osgi, framework, runtime, documents";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML

	<div id="midcolumn">
		<h3>$pageTitle</h3>
				<ul>
              <li><a href="quickstart.php">Equinox Quickstart Guide </a><br/>
                          <i>An easy set of steps for running Equinox.</i> </li>
              <li><a href="/equinox/server/http_quickstart.php">Equinox Server Quickstart Guide</a><br/>
                          <i>An easy set of steps for running Equinox to serve web content, serlvets and JSPs.</i> </li>
					<li><a href="plugin-versioning.html">Recommendation to version plug-ins</a></li>
					<li><a href="coding.php">Equinox Coding Practices</a></li>
    				<li><a href="3.2-migration.php">3.2 Migration Guide</a></li>
				</ul>

			<h3>Presentations</h3>
				<ul>
					<li><a href="http://live.eclipse.org">Eclipse Live Webinar</a> (Novemeber 2007)
					  - <a href="http://live.eclipse.org/node/387">Introduction to Eclipse Equinox and OSGi</a> - Simon Kaegi and Thomas Watson</li>
					<li><a href="http://www.eclipsist.org">EclipsIST 2007 (Turkish Eclipse Summit 2007)</a> (April)
					  - <a href="eclipsist2007/EclipseSummitTurkey2007-OSGiEquinoxExplained.pdf">OSGi and Eclipse Equinox Explained</a> - Martin Lippert</li>
					<li><a href="http://jaoo.org">JAOO 2006</a> (October)
					  - <a href="jaoo2006/JAOO06-equinox.pdf">Equinox OSGi: Pervasive Componentization</a> - Thomas Watson and Jeff McAffer</li>
					<li><a href="http://jaoo.org">JAOO 2006</a> (October)
					  - <a href="jaoo2006/JAOO06-OSGi_Tutorial.pdf">Programming with Equinox</a> - Thomas Watson and Jeff McAffer</li>
					<li><a href="http://eclipsecon.org">EclipseCon 2006</a> (March)
					  - <a href="eclipsecon2006/Best Practices for Programming Eclipse and OSGi.pdf">Best Practices for Programming
					  Eclipse and OSGi</a> - BJ Hargrave and Jeff McAffer</li>
					<li><a href="http://osgicongress.com">OSGi Developer Forum 2005</a> (October)
					  - <a href="osgicongress2005/mcaffer_1012_1530.pdf">Eclipse the Rich Client Platform</a> - Jeff McAffer</li>
					<li><a href="http://osgicongress.com">OSGi Developer Forum 2005</a> (October)
					  - <a href="osgicongress2005/mcaffer_1013_1330.pdf">Programming Eclipse with Eclipse</a> - Jeff McAffer
					  &amp; Thomas Watson
					  <ul>
					    <li><a href="osgicongress2005/coding.html">Coding bundles on the Slug</a> (demo movie)</li>
					    <li><a href="osgicongress2005/debugging.html">Remote debugging on the Slug</a> (demo movie)</li>
    				  </ul>
				  </li>
    				<li><a href="http://eclipsecon.com">EclipseCon 2006</a> (March)
     				 - <a href="TutorialEclipseCon06.ppt">OSGi Component Programming Tutorial</a> - Tom Watson &amp; Peter Kriens</li>
    			</li>
			</ul>

			<h3><a name="server"></a>Server-side</h3>
			<ul>
              <li><a href="/equinox/server/http_quickstart.php">Quickstart Guide to Setting up an HTTP Server</a><br/>
                          <i>An easy set of steps to set up an HTTP server using
                          the Equinox bundles.</i> </li>
              <li><a href="http://www.abo.fi/~mbuechi/publications/EclipsePlugins.html">Eclipse
                  Plugin-Based Applications and J2EE Components</a> (Martin B?chi) <br />
                            <i>Martin was integrating with pre-OSGi Eclipse but
                            nonetheless ran into many similar problems. Very
                            interesting stuff.</i></li>
              <li><a href="http://www.infonoia.com/en/content.jsp?d=inf.05.07">Eclipse
                  goes Server-side!</a> and <a href="http://www.infonoia.com/en/content.jsp?d=inf.05.09">Developing
                  Eclipse/OSGi component webapps</a> (Wolfgang Gehner) <br />
                          <i>An early adopter of this technology, in these articles
                          Wolfgang motivates the building of Web UI components
                          with OSGi.</i></li>
		  </ul>

			<h3>Related Documents</h3>
			<ul>
				<li> <a href="http://osgi.org/osgi_technology/download_specs.asp?section=2">OSGi specifications</a></li>
				<li> <a href="iplogs/EquinoxIPlog.html">IP Logs</a></li>
			</ul>
	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
