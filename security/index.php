<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Security - Project Info";
    $pageKeywords	= "equinox, security";
	$pageAuthor		= "Matt Flaherty";
	
	# Paste your HTML content between the markers!	
   ob_start();
   ?>

   <div id="midcolumn">
	  <p class=bar>Mission Statement</p>
      <p>To ensure the Equinox runtime (and the Eclipse product) is secure, enabling users and administrators to confidently use and
      deploy products built on it in environments where not all users and/or code sources are friendly. Providing integrated security
      functionality will allow Equinox and Eclipse-based applications to protect their data, to authenticate and authorize valid users,
      and to protect against potentially malicious code packaged and distributed as bundles.
      </p>
	
      <p class=bar>Goals</p>
      
      <table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><strong>Support <u>user credential management</u>:</strong><br>
            When dealing with user's credentials - such as passwords, keys, and certificates - applications need to use some form of
            secure storage backend for sensitive materials. In the 3.4 release we have added support for 'Secure Storage', a
            preferences-style interface that can be used to store encrypted data, such as passwords. Support for integrated management
            of other types of credentials, such as keys and certificates, is intended for a future release.
            </td>
         </tr>
      
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><strong>Provide an extensible <u>user authentication framework</u>:</strong><br>
            In many environments, there are applications which require the user to login before interacting with the system, and provide
            a different user experience based on the user's login. The Eclipse RCP does not yet support login, and the goal is to provide
            a framework that will manage the lifecycle of login for an RCP application. Java provides a pluggable system called the
            <a href="http://java.sun.com/j2se/1.4.2/docs/guide/security/jaas/JAASRefGuide.html">Java Authentication and Authorization
            Service (JAAS)</a>, similar to the <a href="http://www.kernel.org/pub/linux/libs/pam/">pluggable authentication module
            (PAM)</a> systems used in many Linux distributions.
      
            In the 3.4 release, we have added support for declarative wiring of JAAS components, a factory for generating context objects
            for managing login state, and an event model around the lifecycle of login.
            </td>
         </tr>

         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><strong>Enable flexible mechanisms for <u>code authorization</u>:</strong><br>
            As the Eclipse platform grows as a basis for rich desktop applications, it will become more of a target for authors of malicious viruses. Java provides mechanisms for
            cryptographically signing Jar files, and ships with a powerful architecture for fine-grained code authorization. 
            <a href="http://en.wikipedia.org/wiki/Sandbox_%28computer_security%29">Sandboxing</a> is done by enabling
            a <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/lang/SecurityManager.html">SecurityManager</a> and granting
            <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/Permission.html">Permissions</a> to application code. Eclipse should
            provide the ability to enable a SecurityManager and manage Permissions granted to plug-in code via integrated UI. In addition to the
            fine-grained <u>run-time</u> but resource intensive mechanisms enabled by Java, Eclipse should also explore less granular but potentially more
            performant and manageable authorization mechanisms - such as checking signatures at bundle <u>install-time</u>, or bundle <u>load-time</u>.
            </td>
         </tr>

         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><strong>Integrate with and <u>support security-aware projects</u>:</strong><br>
            Several Eclipse projects have already expressed interest in
            standardized solutions for security fundamentals like the ones listed above. Integrating well with projects like
            <a href="http://www.eclipse.org/higgins/">Higgins</a> and the <a href="http://www.eclipse.org/ecf/">Eclipse Communications Framework</a> 
            is a core goal of the platform security initiative.  
           </td>
         </tr>         
      </table>
      
      <p class=bar>Community</p>
      <p>We are actively looking for contributors (with or without technology) with interest in this area who are
      willing to contribute time and resources. 
      </p>
      
   </div>
   
<?php
   $html = ob_get_contents();
   ob_end_clean();

   # Generate the web page
   $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
