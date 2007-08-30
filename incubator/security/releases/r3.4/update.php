<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

   #*****************************************************************************
   #
   #
   #****************************************************************************
	
   #
   # Begin: page-specific settings.  Change these. 
   $pageTitle 		= "Equinox Security - Milestone Update";
   $pageKeywords	= "equinox, incubator, security";
	
   # Add page-specific Nav bars here
   # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
   # $Nav->addNavSeparator("Security Links", 	"downloads.php");
   # $Nav->addCustomNav("A Link", "mypage.php", "_self", 3);
   # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

   # End: page-specific settings
   #
		
   # Paste your HTML content between the markers!	
   ob_start();

   $target = $_REQUEST['target'];
?>		
 
<div id="midcolumn">
<div id="div_update" style="margin-right: 425px; height: 400px">
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/r3.4/M1/update.html";
?>
</div>
<div id="div_demo" style="position: relative; float: right; width: 420px; height: 400px;">
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/r3.4/M1/demo.html";
?>
</div>
<!--
<div id="div_plan">
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/r3.4/M1/plan.html";
?>
</div>
-->
</div>

<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/sidebar.html";
?>

<?php
   $html = ob_get_contents();
   ob_end_clean();

   # Generate the web page
   $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

