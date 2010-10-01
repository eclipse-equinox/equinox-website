<?php
# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/
# Largely copied from the RAP team

	$Nav->setLinkList( array() );
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/Equinox", "_self", 1);
	$Nav->addCustomNav("Mailing Lists", "http://eclipse.org/mail", "_self", 1);
	$Nav->addNavSeparator("Components", "index.php");
	$Nav->addCustomNav("Equinox", "http://eclipse.org/equinox", "_self", 1);
	$Nav->addCustomNav("Incubator", "http://eclipse.org/eclipse/incubator", "_self", 1);
	
	$Nav->addNavSeparator("Related", "");
	$Nav->addCustomNav("RT", "http://eclipse.org/rt", "_self", 1);
	$Nav->addCustomNav("Eclipse", "http://eclipse.org/eclipse", "_self", 1);
	$Nav->addCustomNav("PDE", "http://eclipse.org/pde", "_self", 1);
	$Nav->addCustomNav("RAP", "http://eclipse.org/rap", "_self", 1);
	$Nav->addCustomNav("ECF", "http://eclipse.org/ecf", "_self", 1);
	$Nav->addCustomNav("Development", "http://eclipse.org/eclipse/development", "_self", 1);

	$Menu->setMenuItemList( array() );
	$Menu->addMenuItem( "Home", "/equinox/", "_self" );
	$Menu->addMenuItem( "Demos", "/equinox/demos/", "_self" );
	$Menu->addMenuItem( "Get Started", "/equinox/getting-started/", "_self" );
	$Menu->addMenuItem( "Downloads", "/equinox/downloads/", "_self" );
	$Menu->addMenuItem( "Documentation", "/equinox/documentation/", "_self" );
	$Menu->addMenuItem( "Wiki", "http://wiki.eclipse.org/Equinox", "_self" );

  $App->AddExtraHtmlHeader( '<link rel="stylesheet" type="text/css" href="/equinox/rap-layout-fixes.css"/>' );
  $App->AddExtraHtmlHeader( '<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="/equinox/rap-layout-fixes-ie.css"/><![endif]-->' );
  $App->AddExtraHtmlHeader( '<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>' );

//  $App->Promotion = TRUE; # set true to enable current eclipse.org site-wide promo

  function createRapNavigation( $Nav ) {
    $html = <<<EOHTML
<div id="rap-small-header">
  <a href="/equinox"><div id="rap-small-logo"></div></a>
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
