<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Aspects - Downloads";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, aspects";
	
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

<p class=bar>Releases</p>

<p>
<table width="100%" border="0">
<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%">The planning for the first release is here: <a href="http://wiki.eclipse.org/Equinox_Aspects_Plan">Equinox Aspects Release Plan Wiki</a>.
    </td>
</tr>
</table>
</p>

<p class=bar>Milestone Builds</p>

<p>
<table width="100%" border="0">

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200905031323-M7a-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200905031323-M7a-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M7.html">New and Noteworthy 1.0 M7</a></td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200903141932-M6-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200903141932-M6-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M6.html">New and Noteworthy 1.0 M6</a></td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200901301237-M5-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200901301237-M5-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M5.html">New and Noteworthy 1.0 M5</a></td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200812112125-M4-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200812112125-M4-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M4.html">New and Noteworthy 1.0 M4</a></td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200811012141-M3-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200811012141-M3-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M3.html">New and Noteworthy 1.0 M3</a></td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200809192119-M2-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200809192119-M2-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M2.html">New and Noteworthy 1.0 M2</a></td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="68%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200808061839-M1-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200808061839-M1-archive.zip</a>
    </td>
	<td width="30%" align="right"><a href="equinox-aspects-news-1.0-M1.html">New and Noteworthy 1.0 M1</a></td>
</tr>

</table>
</p>

<p class=bar>Development Builds</p>

<p>
<table width="100%" border="0">

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200904302341-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200904302341-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200904122138-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200904122138-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200904092246-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200904092246-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200904040008-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200904040008-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200903141932-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200903141932-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200902162254-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200902162254-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200901301237-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200901301237-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200812112125-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200812112125-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200811212213-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200811212213-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200811111821-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200811111821-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200811012141-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200811012141-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200810272226-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200810272226-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200808202116-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200809192119-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200808202116-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200808202116-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200808061839-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200808061839-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807302257-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200807302257-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807281655-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200807281655-archive.zip</a>
    </td>
</tr>

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
	<td width="98%"><a href="downloads/dev/org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip">
	    org.eclipse.equinox.weaving-incubation-1.0.0.200807082136-archive.zip</a>
    </td>
</tr>

</table>
</p>

<p class=bar>Demos</p>

<p>
<table width="100%" border="0">

<tr>
	<td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
  <td width="98%"><a href="downloads/demo/equinox-aspects-demo-hello.zip">"Hello world!" demo</a><br/>
This minimal demo shows how to use Equinox Aspects. It is also used for the <a href="equinox-aspects-quick-start.php">quick-start guide</a>.
    </td>
</tr>
</table>
</p>

<p class=bar>Archived Builds</p>

</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include "component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
