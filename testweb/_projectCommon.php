<?php
# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/
# Largely copied from the RAP team

ini_set('display_errors', 1); ini_set('error_reporting', E_ALL);

	$Nav->setLinkList( array() );
	$Nav->addNavSeparator("Work Areas", "index.php");
	$Nav->addCustomNav("Bundles", "/equinox/bundles", "_self", 1);
	$Nav->addCustomNav("Framework", "/equinox/framework", "_self", 1);
	$Nav->addCustomNav("Incubator", "/equinox/incubator", "_self", 1);
	$Nav->addCustomNav("p2", "/equinox/p2", "_self", 1);
	$Nav->addCustomNav("Security", "/equinox/security", "_self", 1);
	$Nav->addCustomNav("Server", "/equinox/server", "_self", 1);
	
	$Nav->addNavSeparator("Related", "");
	$Nav->addCustomNav("RT", "http://eclipse.org/rt", "_self", 1);
	$Nav->addCustomNav("Eclipse", "http://eclipse.org/eclipse", "_self", 1);
	$Nav->addCustomNav("PDE", "http://eclipse.org/pde", "_self", 1);
	$Nav->addCustomNav("RAP", "http://eclipse.org/rap", "_self", 1);
	$Nav->addCustomNav("ECF", "http://eclipse.org/ecf", "_self", 1);
	$Nav->addCustomNav("Development", "http://eclipse.org/eclipse/development", "_self", 1);

	$Menu->setMenuItemList( array() );
	$Menu->addMenuItem( "Home", "/equinox/", "_self" );
	$Menu->addMenuItem( "Get Started", "/equinox/getting-started/", "_self" );
	$Menu->addMenuItem( "Downloads", "http//download.eclipse.org/equinox", "_self" );
	$Menu->addMenuItem( "Documents", "/equinox/documents/", "_self" );
	$Menu->addMenuItem( "Resources", "/equinox/resources/", "_self" );
	$Menu->addMenuItem( "FAQ", "/equinox/faq.php/", "_self" );
	$Menu->addMenuItem( "Wiki", "http://wiki.eclipse.org/Equinox", "_self" );

	$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/equinox/testweb/equinox.css"/>' );
	$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/equinox/rap-layout-fixes.css"/>' );
	$App->AddExtraHtmlHeader( '<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/equinox/rap-layout-fixes-ie.css"/><![endif]-->' );
	$App->AddExtraHtmlHeader( '<link rel="shortcut icon" href="/rt/images/favicon.ico" />');
	$App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/rt/rap-posts.css"/>' );
	$App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>' );
	$App->AddExtraHtmlHeader( '<script type="text/javascript" src="/rt/jquery.zrssfeed.min.js"></script>' );

//  $App->Promotion = TRUE; # set true to enable current eclipse.org site-wide promo

  function createRapNavigation() {
    $html = <<<EOHTML
<div id="rap-small-header">
  <a href="/equinox/"><div id="rap-small-logo"></div></a>
</div>
<script type="text/javascript">
  // logo
  var logo = $( '#logo:first-child' );
  var newLogo = '<div id="logo"><a href="http://www.eclipse.org">' 
                + logo.html() + '</a></div>';
  logo.replaceWith( newLogo );
</script>


EOHTML;
    
    return $html;
  }

  function generateRapPage( $App, $Menu, $Nav, $author, $keywords, $title, $html )
  {
    $theme = "Nova";
    $pageHtml = createRapNavigation( $Nav ) . $html;
    	$pageHtml .= file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/equinox/testweb/right-links.html");
    $App->generatePage( $theme, $Menu, $Nav, $author, $keywords, $title, $pageHtml );
  }

  function xslt( $xmlFile, $xslFile ) {
    $xslDoc = new DOMDocument();
    $xslDoc->load( $xslFile );
    $xmlDoc = new DOMDocument();
    $xmlDoc->load( $xmlFile );
    $proc = new XSLTProcessor();
    $proc->importStylesheet( $xslDoc );
    return $proc->transformToXML( $xmlDoc );
  }
  
?>