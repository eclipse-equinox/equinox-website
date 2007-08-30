<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html XMLNS:Style>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="GENERATOR" content="Mozilla/4.76 [en] (Windows NT 5.0; U) [Netscape]">
	<title>DRAFT Platform Text 3.4 Plan</title>

<script type="text/javascript">
<!--
function linkifyBugs() {
	// Replaces plain text '#xyz' by a link to Eclipse's bugzilla.
	traverseLinkifyBugs(document.getElementsByTagName("body")[0]);
}
function nextNode(node) {
	if (node.nextSibling) {
		return node.nextSibling;
	} else if (node.parentNode == document.getElementsByTagName("body")[0]) {
		return null;
	} else {
		return nextNode(node.parentNode);
	}
}
function traverseLinkifyBugs(node) {
	while (node) {
		if (node.nodeType == 1/*element*/ && node.nodeName == "a") {
			node= nextNode(node);
			
		} else if (node.childNodes != null && node.childNodes.length > 0) {
			node= node.childNodes[0];
			
		} else if (node.nodeType == 3/*text*/) {
			var txt= node.data;
			var regex= /(\#)([0-9]+)/;
			var res= regex.exec(txt);
			if (res) {
				var matchStart= txt.indexOf(res[0]);
				
				var beforeNode= document.createTextNode(txt.substring(0, matchStart));
				node.parentNode.insertBefore(beforeNode, node);
				
				var linkNode= document.createElement("a");
				linkNode.href= "https://bugs.eclipse.org/bugs/show_bug.cgi?id=" + res[2];
				linkNode.appendChild(document.createTextNode(res[1] + res[2]));
				node.parentNode.insertBefore(linkNode, node);
				
				node.data= txt.substr(matchStart + res[0].length);
				// continue with current (shortened) node...
			} else {
				node= nextNode(node);
			}
			
		} else {
			node= nextNode(node);
		}
	}
}

//-->
</script>

	<style>
		body {  
			background-image: url('/equinox/incubator/security/images/bgimage-proposal.gif');
			background-repeat: repeat-y;
			background-position: 100px 100px;
		}
	</style>
	
	 <style type="text/css"><a
  		style\:committed {
  			color: blue;
  			font-style: italic;
  		}
	</style>	
	
</head>
<body text="#000000" bgcolor="#FFFFFF" onload="linkifyBugs()">
    <p class="bar">Overview</p>
    <p>Last revised 18:35 EST August 08, 2007</p>
    
    <p>This plan is under continuous refinement. Please send comments about this plan to
    the <a href="mailto:equinox-dev@eclipse.org">equinox-dev@eclipse.org</a> developer mailing list.
    </p>

    <p class="bar">Goals</p>
    <p>This section lists the goals for Eclipse 3.4 for the Equinox Security project. Note that any <i>time estimates</i> are only provided as an indication of the amount of work implied; these are our best guess and could be revised while addressing these work items. 
    </p>

      <p>
      <strong><a name="1"></a>[1] Java Security Provider Integration</strong>. Integrate and expose functionality in support of Java's core security mechanisms (java.security.Security, java.security.Provider et al).  
      </p>

      <p>
	  <strong><a name="2"></a>[2] User Authentication Framework</strong>. Enable applications to perform a login operation during the client lifecycle. 
      </p>
		
	  <p>
	  <strong><a name="3"></a>[3] User Credential Management</strong>. Provide mechanisms for users and applications to manage passwords, keys and trusted roots.
	  </p>

      <p>
	  <strong><a name="4"></a>[4] Code Authorization Support</strong>. Provide support for authorization of signed code at various decision points - including install-time, load-time and run-time.
   </p>

	<a name="work_items"></a><p class="bar">Work Items</p>
	<p> This section lists the possible Security work items for the Eclipse 3.4 release with the corresponding [goal]. Some of
	the items have a higher priority than others.
	</p>

    <h4><img src="http://www.eclipse.org/images/Adarrow.gif" border="0" height="16" width="16" align="top"> Committed</h4>
		<ul>
			<li>(0 items)</li>
		</ul>
	
	<h4><img src="http://www.eclipse.org/images/Adarrow.gif" border="0" height="16" width="16" align="top"> Proposed</h4>
		<ul>
		   <li>#199330 - Support Java security provider framework (JCA) in Eclipse [1]</li>
           <li>#153850 - Support user authentication based on the JAAS login framework [2]</li>
           <li>#153851 - Implement credential management in support of signed bundles [3]</li>
           <li>#153847 - Support for signature checking at bundle load-time [4]</li>
           <li>#153854 - Analyze and scope impact of enabling Java2 permission checking [4]</li>
		</ul>
	
	<h4><img src="http://www.eclipse.org/images/Adarrow.gif" border="0" height="16" width="16" align="top"> Deferred</h4>
		<ul>
			<li>(0 items)</li>
		</ul>
	
	<p class="bar">Cross Team Issues</p>
	<p>This section contains cross team issues that have to be clarified. The concrete outcome affects the plan items listed above.</p>
	TBD

<?php
   include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/security/releases/r3.4/M2/plan.html";
?>

   <p class="bar">Legend</p>
   <table border="0" cellpadding="2" cellspacing="5" width="100%">
   <tbody>
      <tr>
         <td valign="center"><img src="images/icon-inprogress.gif" border="0" height="5" width="14" align="middle"></td>
		 <td width="50%">item is under development.</td>
	     <td valign="top"><img src="images/icon-investigating.gif" border="0" height="10" width="10"></td>
         <td width="50%">item is under investigation.</td>
      </tr>
      <tr>
         <td valign="center"><img src="images/icon-completed.gif" border="0" height="10" width="10"></td>
         <td width="50%">item is finished.</td>
         <td valign="top">( )</td>
         <td width="50%">item is time permitted.</td>
      </tr>
      <tr>
         <td valign="center">[xyz]</td>
         <td width="50%">item is deferred (&gt;) from xyz or continues in xyz.</td>
         <td valign="center"><font class="indexsub"><img src="images/icon-new.gif" border="0"></font></td>
         <td width="50%">new</td>
      </tr>
   </tbody>
   </table>

</body>
</html>
