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
      <p class=bar>Under construction...    
      <br/>Note:  Use cut/past from Plug-in reports into a Java Stack Trace console to navigate to source in your workspace.
      <br/>From the web, simply click the source file hyper link to view the source line via viewcvs.</p>
<h2>SWORD4J analysis report generated Aug 29, 2007</h2>
<br/><br/>
[sword4j] WARNING: in (<a href="viewcvs.php?projectName=org.eclipse.core.runtime&packageName=org.eclipse.core.runtime&fileName=Preferences.java&linenumber=383#curline">org.eclipse.core.runtime.Preferences.java:383</a>)
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
