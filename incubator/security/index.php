<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

   #*****************************************************************************
   #
   #
   #****************************************************************************
	
   #
   # Begin: page-specific settings.  Change these. 
   $pageTitle 		= "Equinox Incubator - Security";
   $pageKeywords	= "equinox, incubator, security";
	
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

      <p class=bar>Mission Statement</p>
      <p>
      To enable Java's standard security mechanisms within the Eclipse platform, and define new functionality
      where there are gaps in the available standards. Extending Eclipse to support security will ensure that
      mission critical applications will have the functionality needed to protect their data, and prevent against
      malicious code masquerading as Eclipse plug-ins.
      </p>

      <p class=bar>Latest News</p>
      <table width="100%" border="0">
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%">June, 2007 - Initial contribution of <a href="http://wiki.eclipse.org/Security:_JCA/JAAS_framework_contribution">JCA/JAAS framework</a>.</td>
         </tr>
      </table>


      <p class=bar>Active Investigators</p>
      <ul>
         <li>Matt Flaherty (IBM Lotus)</li>
         <li>Eric W Li (IBM Lotus)</li>
         <li>Ted Habeck (IBM Research)</li>
      </ul>

   </div>

<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
   if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
   $html = ob_get_contents();
   ob_end_clean();

   # Generate the web page
   $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
