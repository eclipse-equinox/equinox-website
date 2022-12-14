<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox FAQ";
	$pageKeywords	= "equinox, osgi, framework, runtime, faq";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML
	
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
<table border=0 cellspacing=0 cellpadding=2 width="100%" >
  <tr>
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td >
      <b>I thought Equinox was a Technology project?</b><br>
      It was. And a successful one at that. Its main output, an implementation
        of the OSGi framework specification, has become so popular and interesting
        that we decided to move Equinox to be an Eclipse project and have it
        host an OSGi community at Eclipse.org. For details on the transition,
        why, when, how, ... see the <a href="documents/transition.html">transition proposal</a>. 
    </td>
  </tr>
  <tr>
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td >
      <b>I thought Equinox was a <a href="http://1-human-hair-wigs.com/wigs3/product_info.php/cPath/21/products_id/169?osCsid=92ea26528d218179f95d81bd732d46bf">wig</a>.
          What's up with that?</b><br>
      While quite a number of the Equinox committers are folliclly-challenged,
      we agreed from the outset that wigs were not the correct design choice.
      The naming here is purely coincidence.
    </td>
  </tr>
  <tr> 
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td ><b>What is <em>Phase 2</em> of Equinox?</b><br>
        The first main thrust of Equinox was to produce a new runtime for Eclipse.
          That first phase was completed with the release of Eclipse 3.0. <em>Phase
          2</em> collectively refers to the work in Equinox which started after
          Eclipse 3.0 was released
          (June 2004) and continues on today in the <a href="incubator">incubator</a>.
    </td>
  </tr>
  <tr> 
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td > 
      <b>What is the relationship between Equinox and the Eclipse Platform
          project?</b><br>
        They are siblings under the Eclipse PMC. Equinox produces, among other
        things, the OSGi framework implementation used by the Platform (and all
        other Eclipse-based work) as a component model.
    </td>
  </tr>
  <tr> 
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td><b>Is there still innovation and research going on in Equinox?</b><br>
        Yes! The original mandate of the Equinox project was to investigate and
          prototype new runtime technologies. That mission continues today in
          the <a href="incubator">Equinox incubator</a> component. 
    </td>
  </tr>
  <tr> 
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td> 
      <b>Who can/should participate in Equinox?</b><br>
        Equinox needs people who:
      <ul>
        <li>are interested in OSGi specifications and their implementation</li>
        <li>have ideas relating to Java modularity and componentized systems</li>
        <li>have
              real requirements to run OSGi in scenarios which depart from
          the standard OSGi scenarios</li>
        <li>have a strong desire to dig into the Eclipse runtime model </li>
        <li>are willing and able to contribute production quality code</li>
      </ul>
    </td>
  </tr>
<!--
  <tr> 
	      <td align=RIGHT valign=TOP><img src="/equinox/images/arrow.png" border="0"></td>
    <td> 
      <p><b>question</b><br>
        answer</p>
    </td>
  </tr>
-->
</table>

	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
