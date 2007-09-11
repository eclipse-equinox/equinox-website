<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

   #*****************************************************************************
   #
   #
   #****************************************************************************
	
   #
   # Begin: page-specific settings.  Change these. 
   $pageTitle 		= "Equinox Security - Weekly Status";
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
   ?>		

   <div id="midcolumn">
      <h1><?= $pageTitle ?></h1>
      <p class=bar>Overview</p>
      
      <p>We'll be hosting a call on Tuesday mornings from 10:00-11:00 EST to discuss progress and
      problems over the previous week. We'll also make time to lay out upcoming development and
      technical issues that require discussion.
      </p>
      
      <p>The agenda will be driven via a page on the <a href="http://wiki.eclipse.org/Security:_Meeting_Agenda">wiki</a>.
      </p>
      
      <p><strong>Call in details: (866) 880-0098 w/passcode 9639110</strong>
      </p>
      
<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/3.4.0/weekly/status_2007-09-11.php";
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/3.4.0/weekly/status_2007-09-04.php";
?> 
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
