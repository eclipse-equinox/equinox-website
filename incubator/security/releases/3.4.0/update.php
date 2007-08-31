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

<div>
<a name="update"></a><p class="bar">Release 3.4 Milestone 1</p>
<p>The following is information on the delivery of Milestone 1 (M1) of Release 3.4 of security features in
Eclipse Equinox. The release was completed on <strong>August 17th, 2007</strong>.</p> 
</div>

<div id="div_toparea" style="position: relative; height: 400px;">
<div id="div_update" style="position: absolute; top: 0px; left: 0px; right: 420px; margin-right: 10px; min-width: 205;">
<a name="update"></a><p class="bar">Status Update</p>
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/3.4.0/M1/update.html";
?>
</div>
<div id="div_demo" style="position: absolute; top: 0px; right: 0px; width: 420px;">
<a name="demo"></a><p class="bar">Feature Demo</p>
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/3.4.0/M1/demo.html";
?>
</div>
</div>

<div id="div_bottomarea">
<div id="div_plan">
<a name="plan"></a><p class="bar">Development Plan</p>
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/3.4.0/M1/plan.html";
?>
</div>
</div>
<p></p>
</div>

<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/sidebar.php";
?>

<?php
   $html = ob_get_contents();
   ob_end_clean();

   # Generate the web page
   $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

