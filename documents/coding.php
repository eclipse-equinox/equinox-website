<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Equinox Coding Practices</title>
<link rel="stylesheet" title="default" href="http://eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" title="default" href="../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class="bar">Coding Practices</p>
<p>Equinox covers a reasonably large code base. To ensure coherence
  and consistency, the team follows a number of coding conventions and practices.
  For the most part these conventions are supported by the Eclipse tooling (e.g.,
  formatter settings) so its really a matter of setting it up and going from
  there. Give yourself over to the tooling and forget about formatting. Just
  let the tools do their work.</p>
<p class="subbar">Legal</p>
<ul>
<li> <strong>All committed contributions from non-committers must be tracked.</strong> The easiest way is to put
  &quot;[contributed patch applied]&quot; in a comment in the bug report that contains
  the patch/contribution when the code is committed.</li>
  <li>All classes MUST have the correct copyright notice. See XXX for a template.</li>
  <li> If the code was written in 2003, don't have 2000,2003 in the copyright.</li>
</ul>
<p class="subbar">Code Formatting</p>
<ul>
  <li>Use the <a href="../equinox_formatting.xml">Equinox formatter settings</a>.    </li>
  <li>Set the number of imports needed for import coalesing (i.e., using *) to
    3.</li>
  <li> Disable the import grouping feature by removing all entries from the grouping
    list.</li>
  <li>Format and Organize Imports before committing</li>
  <li>Use blank lines sparingly. Group lines of code together as you would group
  sentences into paragraphs in written text.</li>
  <li>These settings should be done on each Equinox project so that everyone
    uses the same settings.</li>
</ul>
<p class="subbar">Comments</p>
<ul>
  <li> Comments are a good thing.</li>
  <li>Javadoc on API is essential</li>
  <li>Follow the Javadoc guidelines as well as @since etc recommendations</li>
  <li> Comment all &quot;non-obvious&quot; things whether they be methods, fields,
    arguments, algorithm steps, ...</li>
</ul>
<p class="subbar">Naming</p>
<ul>
  <li>Choose class/method/field names that describe the purpose of the entire
    method/class.</li>
  <li>Choose names that are semantically useful. Type-based names are taboo!
    Java is strongly typed, why repeat the type in the name? For example, use
    setFoo(Foo foo) is not as interesting as setFoo(Foo value).</li>
  <li>Try for complete words rather than fragments (e.g., getProjectValue is
    better than getProjVal).</li>
  <li>Avoid generic variable names like &quot;temp&quot; or &quot;index&quot; (Exception:
    really short methods where usage is very straight-forward Ok to use i, j,
    etc for loop indexes).</li>
  <li>get/set prefixes should be reserved for real accessors. If the method does
    real work, it's not an accessor. (Note: we
    don't
    always
    follow this rigorously, but we try).</li>
  <li>Avoid random word prefixes such as &quot;a&quot; and &quot;the&quot;. They don't add value.</li>
</ul>
<p class="subbar">Use the tools</p>
<ul>
  <li>Turn on all the compiler prefs including unused temps, synthetic accessor
    methods, unused imports, unused parameters, non-NLS'd strings, etc etc</li>
  <li>Turn on compiler warnings for javadoc<br>
&nbsp;&nbsp;Javadoc -&gt; Process Javadoc comments<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Malformed Javadoc comments -&gt; warning <br>
&nbsp;&nbsp;&nbsp;&nbsp;- Report Errors in tags -&gt; true </li>
  <li> Compiler tasks. We have 3 that we use as a team (TODO, FIXME, XXX) Do
    not add your own as this is unecessary and requires everyone on the team
  to change their compiler settings in order to see these tasks.</li>
  <li>Sort the methods within a class alphabetically (use the sort members action).</li>
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
</ul>
<p class="subbar">Internationalization</p>
<ul>
  <li> Follow the NLS guidelines and use the Eclipse NLS mechanism.</li>
  <li>All sentences
      which are displayed to the user must end with a period.</li>
  <li> Include parameters if possible</li>
  <li> Remove unused messages</li>
  <li> Make sure if the message accepts a parameter then you pass one in</li>
</ul>
<p>&nbsp;</p>
</body>
</html>
