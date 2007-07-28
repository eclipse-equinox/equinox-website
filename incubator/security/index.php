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
   # $Nav->addNavSeparator("Security Links", 	"downloads.php");
   $Nav->addCustomNav("A Link", "mypage.php", "_self", 3);
   # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

   # End: page-specific settings
   #
		
   # Paste your HTML content between the markers!	
   ob_start();
   ?>		

   <div id="midcolumn">

      <h1><?= $pageTitle ?></h1>

      <p class=bar>Mission Statement</p>
      <p>To ensure Eclipse is a secure runtime, enabling users and administrators to confidently
      work with the Eclipse client in environments where not all users and/or code sources are friendly.
      Providing integrated security functionality will allow Eclipse applications to protect their data,
      to authenticate and authorize valid users, and to protect against potentially malicious code packaged
      and distributed as plug-ins.
      </p>
      <p>
      This will be done by enabling Java's standard security mechanisms within the Eclipse platform, defining
      new functionality where there are gaps in the available standard interfaces. Using Java's
      core standard interfaces will enable wider integration with code available throughout the Java community.
      </p>

      <p class=bar>Latest News</p>
      <table width="100%" border="0">
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%">July 16, 2007 - Initial contribution of <a href="http://wiki.eclipse.org/Security:_JCA/JAAS_framework_contribution">JCA/JAAS framework</a> is approved. Announcement <a href="http://dev.eclipse.org/mhonarc/lists/equinox-dev/msg02598.html">here</a>.</td>
         </tr>
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%">May 17th, 2007 - A <a href="http://wiki.eclipse.org/Category:Security">security category</a> is launched on the wiki. Announcement <a href="http://dev.eclipse.org/mhonarc/lists/equinox-dev/msg02306.html">here</a>.</td>
         </tr>
      </table>

      <p class=bar>Goals</p>
      <p><b>Provide mechanisms for <u>integrating cryptographic providers</u> into Eclipse:</b> Applications that need to implement
      security related functionality require cryptographic services upon which to build. Java provides
      the <a href="http://java.sun.com/j2se/1.4.2/docs/guide/security/CryptoSpec.html">Java Cryptography Architecture (JCA)</a>
      as a mechanism for installing implementations of several interfaces used for cryptography, including
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/MessageDigestSpi.html">MessageDigest</a>,
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/SignatureSpi.html">Signature</a>,
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/KeyStoreSpi.html">KeyStore</a>,
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/cert/CertStoreSpi.html">Certstore</a>, and
      <a href="http://java.sun.com/j2se/1.4.2/docs/guide/security/CryptoSpec.html">more</a>. In a typical Java application,
      these implementations reside in the extensions directory of the JRE. In a dynamic Eclipse application, the appropriate
      packaging mechanism is in Eclipse plug-ins. The goal is to allow JCA to be used in an Eclipse environment while
      maintaining the programming model of the JCA subsystem. A related goal is to expose the configuration of the JCA
      system via an Eclipse-based user interface, allowing authorized users to inspect and modify the 
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/Security.html">Security</a> object.
      </p>
      <table width="100%" border="0">
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/Security:_JCA/JAAS_framework_contribution">JCA/JAAS framework for Eclipse</a></td>
         </tr>
      </table>
      
      <p><b>Natively support the Java KeyStore and CertStore interfaces for <u>user credential management</u></b>: When dealing with
      user's credentials - such as passwords, keys, and certificates - applications need to use some form of secure storage backend for
      sensitive materials. JCA provides several interfaces that are used for credential management, including
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/KeyStoreSpi.html">KeyStore</a>,
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/cert/CertStoreSpi.html">CertStore</a>,
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/KeyFactorySpi.html">KeyFactory</a> and
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/cert/CertificateFactorySpi.html">CertificateFactory</a>.
      These interfaces are widely documented, and supported by applications like <a href="http://java.sun.com/j2se/1.3/docs/tooldocs/win32/keytool.html">keytool</a> and 
      <a href="http://www.lazgosoftware.com/kse/">KeyStore Explorer</a>. Both KeyStore and CertStore have various uses in the
      Eclipse environment, including acting as a valuable integration point for 3rd party Java libraries. The goal is to provide
      native support for these interfaces, such as building UI and tooling that complement them.
      </p>
      <table width="100%" border="0">
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/Security:_KeyStore_support_for_Eclipse">KeyStore support for Eclipse</a></td>
         </tr>
      </table>
      
      <p><b>Provide an extensible <u>user authentication framework</u> based on Java's JAAS subsystem:</b> In many environments, there
      are applications which require the user to login before interacting with the system, and provide a different user experience based
      on the user's login. The Eclipse RCP does not yet support login, and the goal is to provide a framework that will manage the lifecycle
      of login for an RCP application. Java provides a pluggable system called the
      <a href="http://java.sun.com/j2se/1.4.2/docs/guide/security/jaas/JAASRefGuide.html">Java Authentication and Authorization Service (JAAS)</a>, 
      similar to the <a href="http://www.kernel.org/pub/linux/libs/pam/">pluggable authentication module (PAM)</a> systems used
      in many Linux distributions. JAAS will serve as a basis for this login framework.
      </p>
      <table width="100%" border="0">
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/Security:_JCA/JAAS_framework_contribution">JCA/JAAS framework for Eclipse</a></td>
         </tr>
      </table>
            
      <p><b>Enable mechanisms for <u>code authorization</u> of signed Java plug-ins:</b> As the Eclipse platform grows as a basis for
      rich desktop applications, it will become more of a target for authors of malicious viruses. Java provides mechanisms for
      cryptographically signing Jar files, and ships with a powerful architecture for fine-grained code authorization. 
      <a href="http://en.wikipedia.org/wiki/Sandbox_%28computer_security%29">Sandboxing</a> is done by enabling
      a <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/lang/SecurityManager.html">SecurityManager</a> and granting
      <a href="http://java.sun.com/j2se/1.4.2/docs/api/java/security/Permission.html">Permissions</a> to application code. Eclipse should
      provide the ability to enable a SecurityManager and manage Permissions granted to plug-in code via integrated UI. In addition to the
      fine-grained <u>run-time</u> but resource intensive mechanisms enabled by Java, Eclipse should also explore less granular but potentially more
      performant and manageable authorization mechanisms - such as checking signatures at bundle <u>install-time</u>, or bundle <u>load-time</u>.
      </p>
      <table width="100%" border="0">
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/JAR_Signing">Jar Signing</a></td>
         </tr>
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/Security:_Signed_Java_support_for_Eclipse_Platform_and_IDE">Signed Java support for Eclipse Platform and IDE</a></td>
         </tr>
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/Trusted_Bundles">Checking bundle signatures at load-time</a></td>
         </tr>
         <tr>
            <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
            <td width="98%"><a href="http://wiki.eclipse.org/Security:_Privileged_instructions">Coding for least-privilege</a></td>
         </tr>         
      </table>
      
      <p><b>Integrate with and <u>support security-aware projects</u>:</b> Several Eclipse projects have already expressed interest in
      standardized solutions for security fundamentals like the ones listed above. Integrating well with projects like
      <a href="http://www.eclipse.org/higgins/">Higgins</a> and the <a href="http://www.eclipse.org/ecf/">Eclipse Communications Framework</a> 
      is a core goal of the platform security initiative.  
      </p>
      
      <p class=bar>Plan</p>
      <p>Coming soon.
      </p>

      <p class=bar>Community</p>
      <p>We are actively looking for contributors (with or without technology) with interest in this area who are
      willing to contribute time and resources. 
      </p>

      <p class=bar>Resources</p>
      <p>The security initiative will be using the <a href="../resources.php">incubator resources</a> with
      the following details:</p>
      
      <strong>Wiki:</strong> the security wiki category is available <a href="http://wiki.eclipse.org/Category:Security">here</a>.<br>
      <strong>Bugs:</strong> prefixed with <font face="monospace">[sec]</font>. A current list is <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=substring&short_desc=%5Bsec%5D&classification=Eclipse&product=Equinox&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">here</a> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_file_loc=&bug_file_loc_type=allwordssubstr&bug_id=&bugidtype=include&chfieldfrom=&chfieldto=Now&chfieldvalue=&classification=Eclipse&email1=&email2=&emailtype1=substring&emailtype2=substring&field-1-0-0=classification&field-1-1-0=product&field-1-2-0=short_desc&field0-0-0=noop&keywords=&keywords_type=allwords&long_desc=&long_desc_type=allwordssubstr&product=Equinox&query_format=advanced&remaction=&short_desc=%5Bsec%5D&short_desc_type=substring&status_whiteboard=&status_whiteboard_type=allwordssubstr&type-1-0-0=anyexact&type-1-1-0=anyexact&type-1-2-0=substring&type0-0-0=noop&value-1-0-0=Eclipse&value-1-1-0=Equinox&value-1-2-0=%5Beq-sec%5D&value0-0-0=&votes=&title=Bug%20List&ctype=atom"><img src="images/feed-icon-12x12.gif"></a>
      <br>
      <strong>CVS:</strong> branch name is <font face="monospace">security</font>
      
      
      <p class=bar>Active Investigators</p>
      <ul>
         <li>Matt Flaherty (IBM Lotus)</li>
         <li>Eric W Li (IBM Lotus)</li>
         <li>Ted Habeck (IBM Research)</li>
      </ul>
	  <p>
	  <p>
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
