<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Framework - 3.2 Planning";
	$pageKeywords	= "equinox, osgi, framework, runtime, planning";
	
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
			<h3>Planning</h3>
<table BORDER=0 CELLPADDING=2 WIDTH="100%" >
  <tr>
    <td ALIGN=RIGHT VALIGN=TOP><img SRC="../../../images/Adarrow.gif" BORDER=0 height=16 width=16></td>
    <td><b>Standalone OSGi support</b>
        <ul>
          <li><img src="../../../images/small_progress.gif" width="14" height="5"> Refactor
            application model</li>
        </ul>
    </td>
  </tr>
  <tr>
    <td ALIGN=RIGHT VALIGN=TOP><img SRC="../../../images/Adarrow.gif" BORDER=0 height=16 width=16></td>
    <td><b>Increased flexibility</b>
        <ul>
          <li><img src="../../../images/small_progress.gif" width="14" height="5"> Refactor
            adaptor layer</li>
      </ul>
    </td>
  </tr>
  <tr> 
    <td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="../../../images/Adarrow.gif" BORDER=0 height=16 width=16></td>
    <td><b>Adopt OSGi standard services </b>
      <ul>
        <li><img src="../../../images/small_progress.gif" width="14" height="5"> Use
          Log service</li>
        <li><img src="../../../images/small_progress.gif" width="14" height="5"> Integrate
        Preferences</li>
      </ul>
    </td>
  </tr>
</table>
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
