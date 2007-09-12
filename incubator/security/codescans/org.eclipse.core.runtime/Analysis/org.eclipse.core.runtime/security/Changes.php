<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

   #*****************************************************************************
   #
   #
   #****************************************************************************
	
   #
   # Begin: page-specific settings.  Change these. 
   $pageTitle 		= "Equinox Security - org.eclipse.core.runtime analysis report";
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
      <p class=bar>Under construction...    Note:  Use cut/past from Plug-in reports into a Java Stack Trace console to navigate to source in your workspace. </p>
<?php
 function open_file(projectName, packageName, fileName, lineNumber )
 {
   $int_line = 0 + lineNumber;
   $tmpPath = packageName+"."+fileName;
   $filePath = str_replace(".","/",$tmpPath);
   $file = fopen ("http://dev.eclipse.org/viewcvs/index.cgi/"+$projectName+"/src/"+$filePath+"?view=markup", "r");
   if (!$file) {
    echo "<p>Unable to open remote file:"+$filePath+"\n";
    exit;
   }
   $cur_line = 0;
   while (!feof ($file)) 
   {
      $line = fgets ($file, 1024);
      $cur_line+=1;
      if ($cur_line == $int_line)
      {
        // spank in a highlight on this line, and a <a name=" "> tag so it can be naivated with #name.
        echo "<a name=\"curline\"><FONT style=\"background-color:#F2C553;display;inline\">"+line+"</FONT></a>"
      } else
      {
        echo $line;
      }
  }
  fclose($file);
 }
?>
<h2>SWORD4J analysis report generated Aug 29, 2007</h2>
<br/><br/>
[sword4j] WARNING: in <a href="#" onClick='open_file(org.eclipse.core.runtime,org.eclipse.core.runtime,Preferences.java, 383 )'> org.eclipse.core.runtime.Preferences.java:383</a>)
<br/>[sword4j] void importPreferences(org.eclipse.core.runtime.IPath)
<br/>[sword4j] J2SE Permission required to invoke the method.<br/>
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
