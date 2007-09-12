<html>
<title>SWORD4J analysis report generated Aug 29, 2007</title>
<body><br/><br/>
<?php
 function open_file(projectName, packageName, fileName, lineNumber )
 {
   $int_line = 0 + lineNumber;
   $tmpPath = packageName+"."+fileName;
   $filePath = str_replace(".","/",$tmpPath);
   $file = fopen ("http://dev.eclipse.org/viewcvs/index.cgi/"+$projectName+"/src/"+$filePath+"?view=markup", "r");
   if (!$file) {
    echo "<p>Unable to open remote file:"+$filePath+"\n";
    exit;
   }
   $cur_line = 0;
   while (!feof ($file)) 
   {
      $line = fgets ($file, 1024);
      $cur_line+=1;
      if ($cur_line == $int_line)
      {
        // spank in a highlight on this line, and a <a name=" "> tag so it can be naivated with #name.
        echo "<a name=\"curline\"><FONT style=\"background-color:#F2C553;display;inline\">"+line+"</FONT></a>"
      } else
      {
        echo $line;
      }
    /* This only works if the title and its tags are on one line */
  }
  fclose($file);
 }
?>
[sword4j] WARNING: in <a href="#" onClick='open_file(org.eclipse.core.runtime,org.eclipse.core.runtime,Preferences.java, 383 ")'> org.eclipse.core.runtime.Preferences.java:383</a>)
<br/>[sword4j] void importPreferences(org.eclipse.core.runtime.IPath)
<br/>[sword4j] J2SE Permission required to invoke the method.<br/>
</body>
</html>