<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

   #*****************************************************************************
   #
   #
   #****************************************************************************
	
   #
   # Begin: page-specific settings.  Change these. 
   $pageTitle 		= "Equinox Security - Source viewer";
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
      <p class=bar>Under construction...</p>
      <?php

 function open_file()
 {
   echo "<br/>linenumber=";
   echo $_REQUEST['linenumber'];
   echo "<br/>projectName=";
   echo $_REQUEST['projectName'];
   echo "<br/>packageName=";
   echo $_REQUEST['packageName'];
   echo "<br/>fileName=";
   echo $_REQUEST['fileName'];
   echo "<br/>";
   $int_line = $_REQUEST['linenumber'];
   echo "int_line=$int_line<br/>";
   $tmpPath = $_REQUEST['packageName'];
   echo "tmpPath=$tmpPath<br/>";
   $filePath = str_replace(".","/",$tmpPath);
   $filePath = "$filePath/" . $_REQUEST['fileName'];
   echo "filePath=$filePath<br/>";
   $cvs_url = "http://dev.eclipse.org/viewcvs/index.cgi/" . $_REQUEST['projectName'] . "/src/$filePath?root=Eclipse_Project&view=markup";
   echo "cvs_url=$cvs_url<br/>"; 
   $file = fopen($cvs_url, "r");
   if (!$file) 
   {
    echo "<p>Unable to open remote file:$cvs_url\n</p>";
    exit;
   } else {
    echo "<p>Progress!!! The file was opened OK.</p>";
   }
   fclose($file);
 }
 
 open_file();
?>
      
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