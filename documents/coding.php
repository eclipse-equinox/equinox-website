<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Coding Practices";
	$pageKeywords	= "equinox, osgi, framework, runtime, documents, coding, practices";
	
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

<p class="bar">Coding Practices</p>
<p>Equinox covers a reasonably large code base. To ensure coherence
  and consistency, the team follows a number of coding conventions and practices.
  For the most part these conventions are supported by the Eclipse tooling (e.g.,
  formatter settings) so its really a matter of setting it up and going from
  there. Give yourself over to the tooling and forget about formatting. Just
  let the tools do their work.</p>
<p class="subbar">Legal</p>
<ul>
<li> <strong>All committed contributions from non-committers must be tracked.</strong> This must be done
  by using the 'contributed' keyword in bugzilla.  A <i>non-committer</i> is someone who is not a committer on the
  <a href="http://eclipse.org/eclipse">Eclipse Top-Level project</a></li>
  <li>All classes MUST have the correct copyright notice. See <a href="http://www.eclipse.org/legal/copyrightandlicensenotice.php">
  the Foundation's legal page</a> for a template.</li>
  <li> If the code was written in 2003, don't have 2000,2003 in the copyright.</li>
</ul>

<p class="subbar">Attribution</p>
<p>Contributors should feel free to identify themselves individually or by company in the code.  
There are three main places this is done.  </p>
<ul>
<li><b>in the copyright line (first line in class comment).</b>  Here the first/main entity that 
legally owns the copyright should be listed first followed by "and others".  See the legal notes above.</li>
<li><b>in the Contributors section of the class comment.</b>  Here we want to capture a rough sense of who 
(people and/or companies) has made contributions.  We do not need to be overly specific about which 
contributions.  General descriptions such as "bug fixes", "performance enhancements" or "continuing
development" are fine.  This is information is partly to cue the legal process to ensure 
proper tracking (though the actual tracking is done through CVS and Bugzilla) and partly to give contributors
visibility and acknowledgment for their contributions.  People are free to put their 
names in this section if they choose however, traditionally we have identified simply identified
companies/organizations here.  We have opted for this approach to eliminate the continual maintenance of 
the list.  Contributors wanting to have their names in this section are certainly welcomed to do so in their patches.</li>
<li><b>in the @author tag in the class Javadoc.</b>  For the most part the Eclipse project team does not use @author as there are typically
a vast number of people working on and contributing to the code.  Maintenance of such a list would be 
quite cumbersome and poorly maintained authorship lists give a false picture of code evolution.</li>
</ul>

<p class="subbar">Use the tools</p>
<p>For the most part you can just use the preference template files supplied here to configure the various tools 
to do the same as the rest of the team.  These preference files are typically found in the .settings 
directory of a project.  To apply the preferences simply copy the template file from here into the .settings folder overwriting the original.
Of course, you may choose to merge the settings but beware of varying too far from the standard coding practices.  The templates cover 
code formatting, organize imports, code cleanup wizard settings and enabling these operations to happen automatically on save.</p>
<ul>
<li><a href="org.eclipse.jdt.core.prefs">Equinox JDT Core preferences</a> - template for compiler and code formatting preferences
<li><a href="org.eclipse.jdt.ui.prefs">Equinox JDT UI preferences</a> - template for editor preferences (e.g., format on save etc.)
</ul>

<p class="subbar">Coding style</p>
  <li>Use blank lines sparingly. Group lines of code together as you would group
  sentences into paragraphs in written text.</li>
  <li>Don't use braces for simple if/for statements. Use braces where it improves
  code readability and clarity, such as in nested control statements.
  <li>These settings should be done on each Equinox project so that everyone
    uses the same settings.</li>
  <li> Data type size initialization -&gt; use meaningful values if possible,
  not things like: new HashSet(65)</li>
  <li> Use interfaces when declaring variable types and in method signatures
    unless it is necessary to use implementing class</li>
  <li> Use accessor methods, don't access variables on other classes directly</li>
  <li> Exit methods as early as possible by using the &quot;true&quot; case
    of an &quot;if&quot; clause. For example, if the whole method
    is inside an &quot;if (!foo) {}&quot; then just say &quot;if (foo) return&quot;.</li>
  <li> Ignored exceptions must have a comment saying that they are being ignored
    on purpose (compiler warning)</li>
  <li> The lines where we create new CoreExceptions and throw them can become
    quite long. We usually declare the String message on the line previous to
    make it easier to read.</li>
  <li> Check for null if null could be returned (table look-ups, etc)</li>
  <li> Should use IPath for path logic rather than Strings and concatenation</li>
  <li> IPaths are your friend. Replace &quot;new File(location.toOSString())&quot; with
    location.toFile();</li>
  <li> Don't catch Exception unless you have to. Try to catch specific exceptions.</li>
  <li> Don't wrap the whole method in a try {} catch {} block. This makes it
    hard to generate specific error messages</li>
  <li> If you have nested readers/streams you should only have to call #close()
    on the outside one and all wrapped streams should be closed automatically
    (note: you may have to call #flush() first)</li>
  <li> Ensure all file I/O is buffered.</li>
  <li> When sharing code with others, ensure that all the code released to the
    repository at least compiles. </li>
  <li> Compiler tasks. We have 3 that we use as a team (TODO, FIXME, XXX) Do
    not add your own as this is unnecessary and requires everyone on the team
  to change their compiler settings in order to see these tasks.</li>
</ul>

<p class="subbar">Comments</p>
<ul>
  <li>Comments are a good thing but are not a substitute for good naming (see next section).
  Comment all &quot;non-obvious&quot; things whether they be methods, fields,
    arguments, algorithm steps, ...</li>
  <li>Javadoc on API is essential</li>
  <li>Follow the Javadoc guidelines as well as @since etc recommendations</li>
</ul>

<p class="subbar">Naming</p>
<ul>
  <li>Choose class/method/field names that describe the purpose of the entire
    method/class.</li>
  <li>Choose names that are semantically useful. Type-based names are taboo!
    Java is strongly typed, why repeat the type in the name? For example, use
    setFoo(Foo foo) is not as interesting as setFoo(Foo value).</li>
  <li>Further, the use of semantic names makes cutting and pasting of similar code 
  easier and less error-prone.</li>
  <li>Try for complete words rather than fragments (e.g., getProjectValue is
    better than getProjVal).</li>
  <li>Avoid generic variable names like &quot;temp&quot; or &quot;index&quot; (Exception:
    really short methods where usage is very straight-forward an in cases of i, j,
    etc for loop indexes).</li>
  <li>get/set prefixes should be reserved for real accessors. If the method does
    real work, it's not an accessor. (Note: we don't always follow this rigorously, but we try.  Lazy
    initialization is one such exception).</li>
  <li>Avoid random word prefixes such as &quot;a&quot; and &quot;the&quot;. They don't add value.</li>
</ul>

<p class="subbar">Internationalization</p>
<ul>
  <li> Follow the NLS guidelines and use the Eclipse NLS mechanism.</li>
  <li>All sentences which are displayed to the user must end with a period.</li>
  <li> Include parameters if possible</li>
  <li> Remove unused messages</li>
  <li> Make sure if the message accepts a parameter then you pass one in</li>
</ul>
<p class="subbar"><a name="NewProjectTemplate"/>New project template</p>
<p>
When setting up a new Equinox project, you can use this <a href="org.eclipse.jdt.core.prefs">
template</a> of the .settings/org.eclipse.jdt.core.prefs file. This will configure the code
style and compiler settings outlined above.
</p>
<p>&nbsp;</p>

	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/documents/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>