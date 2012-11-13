<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Equinox Coding Practices";
	$pageKeywords	= "equinox, osgi, framework, runtime, documents, coding, practices";
	$pageAuthor = "Equinox committers";
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

<h3>Coding Practices</h3>
<p>Equinox covers a reasonably large code base. To ensure coherence
  and consistency, the team follows a number of coding conventions and practices.
  For the most part these conventions are supported by the Eclipse tooling (e.g.,
  formatter settings) so its really a matter of setting it up and going from
  there. Give yourself over to the tooling and forget about formatting. Just
  let the tools do their work.</p>

<h4>Legal</h4>
<ul>
<li> <strong>All committed contributions from non-committers must be tracked.</strong> This must be done
  by using the 'contributed' keyword in bugzilla.  A <i>non-committer</i> is someone who is not a committer on the
  <a href="http://eclipse.org/eclipse">Eclipse Top-Level project</a></li>
  <li>All classes MUST have the correct copyright notice. See <a href="http://www.eclipse.org/legal/copyrightandlicensenotice.php">
  the Foundation's legal page</a> for a template.</li>
  <li> If the code was written in 2003, don't have 2000,2003 in the copyright.</li>
</ul>

<h4>Attribution</h4>
<p>Contributors should feel free to identify themselves individually or by company in the code.  
There are three main places this is done.  </p>
<ul>
<li><b>in the copyright line (first line in class comment).</b>  Here the first/main entity that 
legally owns the copyright should be listed first followed by "and others".  See the legal notes above.</li>
<li><b>in the Contributors section of the class comment.</b>  Here we want to capture a rough sense of who 
(people and/or companies) has made contributions.  We do not need to be overly specific about which 
contributions.  General descriptions such as "bug fixes", "performance enhancements" or "continuing
development" are fine.  This is information is partly to cue the legal process to ensure 
proper tracking (though the actual tracking is done through Git and Bugzilla) and partly to give contributors
visibility and acknowledgment for their contributions.  People are free to put their 
names in this section if they choose however, traditionally we have identified simply identified
companies/organizations here.  We have opted for this approach to eliminate the continual maintenance of 
the list.  Contributors wanting to have their names in this section are certainly welcomed to do so in their patches.</li>
<li><b>in the @author tag in the class Javadoc.</b>  For the most part the Eclipse project team does not use @author as there are typically
a vast number of people working on and contributing to the code.  Maintenance of such a list would be 
quite cumbersome and poorly maintained authorship lists give a false picture of code evolution.</li>
</ul>

<h4>Use the tools</h4>
<p>For the most part you can just use the preference template files supplied here to configure the various tools 
to do the same as the rest of the team.  These preference files are typically found in the .settings 
directory of a project.  To apply the preferences simply copy the template file from here into the .settings folder overwriting the original.
Of course, you may choose to merge the settings but beware of varying too far from the standard coding practices.  The templates cover 
code formatting, organize imports, code cleanup wizard settings and enabling these operations to happen automatically on save.</p>
<ul>
<li><a href="org.eclipse.jdt.core.prefs">Equinox JDT Core preferences</a> - template for compiler and code formatting preferences
<li><a href="org.eclipse.jdt.ui.prefs">Equinox JDT UI preferences</a> - template for editor preferences (e.g., format on save etc.)
</ul>

<h4>Coding style</h4>
<ul>
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

<h4>Comments</h4>
<ul>
  <li>Comments are a good thing but are not a substitute for good naming (see next section).
  Comment all &quot;non-obvious&quot; things whether they be methods, fields,
    arguments, algorithm steps, ...</li>
  <li>Javadoc on API is essential</li>
  <li>Follow the Javadoc guidelines as well as @since etc recommendations</li>
</ul>

<h4>Naming</h4>
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

<h4>Internationalization</h4>
<ul>
  <li> Follow the NLS guidelines and use the Eclipse NLS mechanism.</li>
  <li>All sentences which are displayed to the user must end with a period.</li>
  <li> Include parameters if possible</li>
  <li> Remove unused messages</li>
  <li> Make sure if the message accepts a parameter then you pass one in</li>
</ul>

<h4>Exception handling</h4>
<ul>
	<li>When catching exceptions, consider whether it is some low-level error that
	the client should not be aware of or will not be able to interpret. Consider wrapping
	in an exception with a message and API status code that will make sense to the caller.</li>
	<li>Whenever possible let exceptions flow back to the caller through a declared
	exception specified in API rather than catching and swallowing/logging ourselves. 
	Since our code is typically very low level, the caller often has better contextual 
	knowledge of whether it would more appropriate to log the exception, present to a user, or swallow it.</li>
	<li>Only suppress or log exceptions if irrelevant to the caller and doesn't affect
	the success of the operation the caller is attempting to perform.</li>
	<li>Should only have empty catch blocks if the exception is truly impossible,
	or if we completely understand all the cases where this exception can occur and
	we understand that it has no effect on the success of the operation. When in doubt
	log it.</li>
	<li>Never throw generic Exception or Error - use a more specific subclass appropriate
	for the error condition.</li>
	<li>Logged exception messages should not be externalized/translated. If there
	is any possibility of an exception being propagated to client code it must have
	externalized messages.</li>
</ul>
	</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html );
?>
