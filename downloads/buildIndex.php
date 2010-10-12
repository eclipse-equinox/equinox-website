<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav	= new Nav(); $Menu = new Menu(); include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageKeywords = "equinox, osgi, framework, runtime, download";
	$pageAuthor = "Equinox committers";

ini_set('display_errors', 1); ini_set('error_reporting', E_ALL);

	$specs;
	$categories;
	$buildTime = "";
	$buildTitle = "";
	$buildDir;
	
	function generateDropSize($zipfile) {
		$filesize = getDropSize($zipfile);
		return "<td>$filesize</td>";
	}
	
	function getDropSize($zipfile) {
		$filesize = "N/A";
		$filesizebytes  = filesize($zipfile);
		if($filesizebytes > 0) {
			if($filesizebytes < 1048576)
				$filesize = round($filesizebytes / 1024, 0) . "K";
			else if ($filesizebytes >= 1048576 && $filesizebytes < 10485760)
				$filesize = round($filesizebytes / 1048576, 1) . "M";
			else
				 	$filesize = round($filesizebytes / 1048576, 0) . "M";
		}
		return($filesize);
	}
	
	function generateChecksumLinks($zipfile, $buildLabel) {
		$result = <<<EOHTML
<td><a href="http://download.eclipse.org/equinox/drops/$buildLabel/checksum/$zipfile.md5"><img src="/equinox/images/md5.png" alt="md5"/></a><a href="http://download.eclipse.org/equinox/drops/$buildLabel/checksum/$zipfile.sha1"><img src="/equinox/images/sha1.png" alt="sha1"/></a></td>

EOHTML;
		return $result;	
	}
	
	function endsWith($source, $target)	{
		$pos = strrpos($source, $target);
		return $pos === FALSE ? FALSE : ($pos + strlen($target)) == strlen ($source); 
	}

	function startsWith($source, $target) {
		$pos = strpos($source, $target);
		$result = $pos !== false && $pos == 0;
		return $result;
	}
	
	function match($source, $template) {
		$i = strpos($template, "|");
		if ($i === FALSE || $i == (strlen($template) - 1))
			return startsWith($source, $template);
		$beginning = strstr($template, "|", true);
		$end = substr($template, $i + 1);
		return startsWith($source, $beginning) && endsWith($source, $end);
	}
	
	function getSpec($file) {
		global $specs;
		foreach ($specs as $spec) 
			if (match($file, $spec["name"]))
				return $spec;
		return null;
	}

	function loadSpecs($dir) {
		global $categories;
		global $specs;
		global $buildDir;
		global $buildLabel;
		global $buildTime;
		global $buildTitle;
		global $path;
		global $root;
				
		$buildDir =$dir;
		$specs = array(); 
		$categories = array(); 
		$contents = substr(file_get_contents($root . $path . '/buildspec.txt'),0,-1);
		$lines = explode("\n", $contents);
		$buildTitle = $lines[0];
		$buildTime = $lines[1];
		$buildLabel = $lines[2];
		unset($lines[0], $lines[1], $lines[2]);
		
		foreach ($lines as $line) {
			$line = trim($line);
			$values = explode(",", $line);
			$spec = array();
			$name = trim($values[0]);
			$spec["name"] = $name;
			$spec["category"] = trim($values[1]);
			$spec["status"] = trim($values[2]);
			if (count ($values) > 3)
				$spec["images"] = explode("&", $values[3]);
			$specs[$name] = $spec;
		}
	}
		
	function analyzeBuild($dir) {	
		global $categories;
		loadSpecs($dir);
		
		while ($anEntry = $dir->read()) {
			$spec = getSpec($anEntry);
			if ($spec != null) {
 				$spec["file"] = $anEntry;
				$categories[$spec["category"]][] = $spec;
				continue;
			}
		}			
	}

	function generateTable($name) {
		global $categories;
		global $buildLabel;
		
		if (! array_key_exists($name, $categories))
			return "";
		$category = $categories[$name];
		$result = <<<EOHTML
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr><td width="5%"/><td width="78%"/><td width="9%"/><td width="8%"/></tr>

EOHTML;

		foreach ($category as $element) {
			$status = $element["status"];
			$statusImage = "/equinox/images/pending.gif";
			if ($status == "F")
				$statusImage = "/equinox/images/FAIL.gif";
			else if ($status == "O")
				$statusImage = "/equinox/images/OK.gif";
			
			$images = "";
			if (array_key_exists("images", $element)) {
				$imageSpec = $element["images"];
				$images = "<img src=\"";
				foreach ($imageSpec as $entry)
					$images .= trim($entry) . "\"/>&nbsp;";
			}
			$file = $element["file"];
			$downloadSize = generateDropSize($file);
			$checksumLinks = generateChecksumLinks($file, $buildLabel);

			$result .= <<<EOHTML
			<tr><td align="center"><img src="$statusImage"/></td>
				<td>$images<a href="download.php?dropFile=$file">$file</a></td>
				$downloadSize
				$checksumLinks
			</tr>

EOHTML;
		}
		$result .= "</table>";
		return $result;		
	}

	$root = $App->getDownloadBasePath();
//	$root = $_SERVER['DOCUMENT_ROOT'];
	$qstring = $_SERVER['QUERY_STRING'];
	$build = array_pop(split("=", $qstring, -1));
	$path = "/equinox/drops/" . $build;

	analyzeBuild(dir($root . $path));
	$generateTable = 'generateTable';

	$html = <<<EOHTML

<script type="text/javascript" src="http://eclipse.org/equinox/expand.js"></script>

<div id="midcolumn">
	<h3>$buildTitle</h3>
	<p><b>$buildTime</b></p> 
	<p>These downloads are provided under the <a href="http://www.eclipse.org/legal/epl/notice.html">
	Eclipse Foundation Software User Agreement</a>. Click <a href="verifyMD5.html">here</a> for instructions
	on verifying download integrity.</p>

	<p><a href="apitools/index.html">API Version Verification Report</a> -- Verification of this build's versions
	against those of Eclipse 3.6. See <a href="org.eclipse.releng/apiexclude/exclude_list_external.txt">here</a> for exclusions.</p> 

	<p><a href="apitools/apitoolsdeprecations/apideprecation.html">API Deprecation Report</a> --
	Report of API deprecated since 3.6.</p> 
 
	<!--p><a href="apitools/report.html">API Tools Post-API Freeze Report</a> -- This report describes API changes 
	since 3.6M6.  Exclusions are listed in org.eclipse.releng/apiexclude/exclude_list.txt.</p--> 

	<div class="homeitem3col">
		<h3>All of Equinox</h3>
		<p> A complete set of all bundles and launchers produced by the Equinox project. This zip is also a p2 repo. </p>
{$generateTable("Equinox")}
	</div>

	<div class="homeitem3col">
		<h3>Framework Only</h3>
		<p>The Equinox OSGi R4 <a href="http://eclipse.org/equinox/framework">framework</a> implementation in a standalone package.
		See the <a href="http://eclipse.org/equinox/quickstart.html">Quick Start Guide</a> for details on how to use this JAR.</p>
{$generateTable("Framework")}
	</div>

	<div class="homeitem3col">
		<h3><a onclick="expandCollapse('addon.bundles');"><img id="addon.bundles.button" src="http://eclipse.org/equinox/images/arrow.png"/></a>&nbsp;Add-on Bundles</h3>
		<p>Individual <a href="http://eclipse.org/equinox/bundles">bundles</a> that provide 
		standalone OSGi specified services or add-on mechanisms (e.g., the Eclipse extension registry) of interest to OSGi programmers.</p>
		<div id="addon.bundles" class="collapsable"> 
{$generateTable("Addon")}
		</div>
	</div>

	<div class="homeitem3col">
		<h3><a onclick="expandCollapse('other.bundles');"><img id="other.bundles.button" src="http://eclipse.org/equinox/images/arrow.png"/></a>&nbsp;Other Required Bundles</h3>
		<p>A convenient set of bundles that are required by some of the Equinox bundles.</p>
		<div id="other.bundles" class="collapsable"> 
{$generateTable("Other")}
		</div>
	</div>

	<div class="homeitem3col">
		<h3><a onclick="expandCollapse('incubator.bundles');"><img id="incubator.bundles.button" src="http://eclipse.org/equinox/images/arrow.png"/></a>&nbsp;Incubator</h3>
		<p>Equinox Incubator downloads supplied as a convenience. While some are quite complete, all should be considered experimental.</p>
		<div id="incubator.bundles" class="collapsable"> 
{$generateTable("Incubator")}
		</div>
	</div>

	<div class="homeitem3col">
		<h3><a onclick="expandCollapse('provisioning.bundles');"><img  id="provisioning.bundles.button" src="http://eclipse.org/equinox/images/arrow.png"/></a>&nbsp;p2 Provisioning Tools</h3>
		<p>The following downloads are produced by the Provisioning team. For more about provisoning, see 
		the <a href="http://wiki.eclipse.org/Category:Provisioning">provisioning articles</a> on the eclipse.org wiki.</p>
		<div id="provisioning.bundles" class="collapsable">
{$generateTable("Provisioning")}
		</div>
	</div>

	<div class="homeitem3col">
		<h3><a onclick="expandCollapse('launcher.bundles');"><img  id="launcher.bundles.button" src="http://eclipse.org/equinox/images/arrow.png"/></a>&nbsp;Native Launchers</h3>
		<p>Platform-specific native launchers (e.g., eclipse.exe) for the Equinox framework. See the list 
		of <a href="http://www.eclipse.org/projects/project-plan.php?projectid=eclipse#target_environments">supported OS configurations</a>.</>
		<div id="launcher.bundles" class="collapsable">
{$generateTable("Launchers")}
		</div>
	</div>

	<div class="homeitem3col"> 
		<h3>Legend</h3> 
		<table border="0" cellspacing="0" cellpadding="0" width="100%"> 
			<tr><td width="5%"/></tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/OK.gif"/></td> 
				<td>Build completed OK</td> 
			</tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/FAIL.gif"/></td> 
				<td>Build failed to complete</td> 
			</tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/pending.gif"/></td> 
				<td>Build is still pending</td> 
			</tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/repo.gif"/></td> 
				<td>Build artifact is also a p2 repository</td> 
			</tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/md5.png"/></td> 
				<td>Click to get the MD5 hash for the corresponding build artifact</td> 
			</tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/sha1.png"/></td> 
				<td>Click to get the SHA1 hash for the corresponding build artifact</td> 
			</tr> 
			<tr> 
				<td align="center"><img src="/equinox/images/egg.gif"/></td> 
				<td>Build artifact is from the Equinox incubator and may not be fully complete or tested.</td> 
			</tr> 
		</table> 
	</div>
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $buildTitle, $html );
?>
