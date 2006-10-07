<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Writing a bundle-based server application";
	$pageKeywords	= "equinox, osgi, framework, runtime, incubator, server, servlet, http";
	
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

<div class="homeitem3col">
	<h3>Overview</h3>
	<p>While Equinox can be setup to run servlets and JSPs in a variety of ways, the technique for writing the applications is the same.
	Use the steps here to create your application and then one of the server setups detailed in the 
	<a href="http://www.eclipse.org/equinox/documents/http_quickstart.php">Server-side quick start guide</a>
	to configure and run your server.</p>
	</div>

<div class="homeitem3col">
	<h3>Writing the server application</h3>
	<p>The server application takes the form of static content, servlets and JSPs.  You can use any combination of these.
	<ul>
		<li><b>Create a new project</b> - Next you need to create a bundle to contain the application.  Your application can be made up
		of many bundles but here we create just one.  Create a new bundle project in the Eclipse IDE and call it <code>com.example.http.application</code>.</li>
		<li><b>Add resources to your project</b> - Add all of the static content files you need for your application by creating 
		a folder called <code>web_files</code> and putting your files there.</li>
		<li><b>Place the resources</b> - Now tell the server where your static
		content lives within the bundle and where it should be placed in URL space.  Create an extension by creating a plugin.xml 
		file with following content.
<code>
&lt;plugin&gt;
  &lt;extension point="org.eclipse.equinox.http.registry.resources"&gt;
    &lt;resource
      alias="/files"
      base-name="/web_files"/&gt;
  &lt;/extension&gt;
&lt;/plugin&gt;
</code>
		<p>In the extension above, the <code>alias</code> attribute locates the resources in URL space and the <code>base-name</code> 
			attribute describes where (in your bundle) the resources are located. So for example the file index.html would 
			live inside the <code>com.example.http.application</code> bundle in the <code>web_files</code> folder and would be accessed
			using the URL <code>http://localhost/files/index.html</code>.
			</p></li>

		<li><b>Add some servlets</b> - You can also add servlets by implementing classes that extent javax.serlvet.http.HttpServlet. Implement 
		these in the example project as you would any class.</li>
		<li><b>Place the servlets</b> - As with the resources, you need to tell the server where the servlets are and where they 
		should show up in URL space.  Add the following XML to the plugin.xml file you created earlier.  Ensure that this new element is placed within
		the &lt;plugin&gt; element.  Note that you can add any number of &lt;resource&gt; elements in the
			one extension.
<pre><code>
  &lt;extension point="org.eclipse.equinox.http.registry.servlets"&gt;
    &lt;servlet
      alias="/test"
      class="com.example.servlet.MyServlet"/&gt;
  &lt;/extension&gt;
</code></pre>
		<p>In the extension above, the <code>alias</code> attribute locates the servlet in URL space and the <code>class</code> 
			attribute identifies the class that implements the servlet.  So for example the servlet MyServlet would be accessed
			using the URL <code>http://localhost/test</code>.  Note that you can add any number of &lt;servlet&gt; elements in the
			one extension.
			</p></li>
		<li><b>Add some JSPs</b> - TBD</li>
		<li><b>Place the JSPs</b> - TBD</li>
	</ul>
</div>

</div>

<?php
	include "global-links.html";
	include "dir-links.html";
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
