<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Incubator - Server-Side";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server";
	
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

<p class=bar>Improving Eclipse / Server-Side Integration - Overview</p>
<p>The Eclipse runtime was originally designed to
support a desktop IDE but has proven to be useful in  other contexts. One of the key goals
of this work is to look at ways to improve server-side integration of Eclipse.</p>

<p>Many of the larger integration problems have been handled for Eclipse 3.2 and no new
activity is planned for this release. Activity for 3.3 is still in the planning phase 
however as issues arise they'll be added here.</p> 

<p>As much as possible activity occurs directly on the main Eclipse HEAD through bug reports 
and conversation on the equinox-dev mailing list. </p>
<p><i>Note: Should a sufficiently large
sets of changes be considered the equinox-incubator "server" branch will be used however it
is not currently active.</i></p>

<p class=bar>Past Activity (3.2)</p>
<p><strong>OSGi URL Handler Service</strong>
<ul>
<li><i>singleton factory operations - RESOLVED - see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=107909">bug 107909</a></i></li>
<li><i>multiplexed factories - RESOLVED - see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=121472">bug 121472</a></i></li>
</ul> 
</p>
<hr />
<p><strong>Framework Configuration</strong>
<ul>
<li><i>use of system properties - RESOLVED - see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=105851">bug 105851</a></i></li>
</ul>
</p>

<p class=bar>Future Activity (3.3+)</p>
<p><strong>Conditional Permission Admin</strong>
<ul>
<li><i>requires control of security manager - not currently logged</i></li>
</li>
</ul>
</p>
<p>&nbsp;</p>
</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
	# include "dir-links.html";
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>