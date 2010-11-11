<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav	= new Nav(); $Menu = new Menu(); include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageKeywords = "equinox, osgi, framework, runtime, download";
	$pageAuthor = "Equinox committers";

ini_set('display_errors', 1); ini_set('error_reporting', E_ALL);

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
<td>
					<span class="hotspot" 	onmouseover="tooltip.show('Click to get the MD5 hash for this artifact');" onmouseout="tooltip.hide();"><a href="http://download.eclipse.org/equinox/drops/$buildLabel/checksum/$zipfile.md5"><img src="/equinox/images/md5.png" alt="md5"/></a></span><span class="hotspot" 	onmouseover="tooltip.show('Click to get the SHA1 hash for this artifact');" onmouseout="tooltip.hide();"><a href="http://download.eclipse.org/equinox/drops/$buildLabel/checksum/$zipfile.sha1"><img src="/equinox/images/sha1.png" alt="sha1"/></a></span>
				</td>

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
		if ($i === FALSE || $i == (strlen($template) - 1)) {
		
			return startsWith($source, $template);
			}
		$beginning = substr($template, 0, $i);
		$end = substr($template, $i + 1);
		return startsWith($source, $beginning) && endsWith($source, $end);
	}
	
	function &getDrop($file) {
		global $buildSpec;
		foreach ($buildSpec as $category) {
			foreach ($category as $drop) {
				$pattern = trim($drop["pattern"]);
				if ($pattern != null && match($file, $pattern)) {
					return $drop;
				}
			}
		}
		$result = null;
		return $result;
	}
	
	function analyzeBuild($dir) {	
		global $buildSpec;
		global $filesystemPath;

		$buildSpec = simplexml_load_file($filesystemPath . "/buildspec.xml");
//		$buildSpec = simplexml_load_file("buildspec.xml");
		while ($anEntry = $dir->read()) {
			$drop = getDrop($anEntry);
			if ($drop != null)
 				$drop["file"] = $anEntry;
		}
	}
	
	function generateDecorationImages($element) {
		$result = "";
		if (! isset($element["images"]))
			return $result;
		$imageSpec = $element["images"];
		foreach ($imageSpec as $entry) {
			$entry = trim($entry);
			if ($entry == "repo.gif") {
				$image = "/equinox/images/repo.gif";
				$alt = "repo";
				$tooltip = "Build artifact is also a p2 repository";
			} else if ($entry == "egg.gif") {
				$image = "/equinox/images/egg.gif";
				$alt = "incubating";
				$tooltip = "Build artifact is from the Equinox incubator and may not be fully complete or tested.";
			}
			$result .= <<<EOHTML
<span class="hotspot" 	onmouseover="tooltip.show('$tooltip');" onmouseout="tooltip.hide();"><img src="$image" alt="$alt"/></span>&nbsp;
EOHTML;
		}
		return $result;	
	}

	function generateStatusImage($drop) {
		$status = $drop["status"];
		$image = "/equinox/images/pending.gif";
		$alt = "pending";
		$tooltip = "Build output is pending";
		if ($status == "F") {
			$image = "/equinox/images/FAIL.gif";
			$alt = "failed";
			$tooltip = "Build failed";
		} else if ($status == "O") {
			$image = "/equinox/images/OK.gif";
			$alt = "ok";
			$tooltip = "Build completed";
		}
		$result = <<<EOHTML
<span class="hotspot" 	onmouseover="tooltip.show('$tooltip');" onmouseout="tooltip.hide();"><img src="$image" alt="$alt"/></span>
EOHTML;
		return $result;	
	}

	function findCategory($id) {
		global $buildSpec;
		foreach ($buildSpec as $category) {
			if ($category["id"] == $id)
				return $category;
		}
		return null;
	}
	
	function generateTablePreamble($category) {
		$preamble = $category->preamble;
		$title = $category["title"];
		$id = $category["id"];
		$tableClass = "";
		
		if ($category["type"] == "collapsable") {
			$tableClass = " class=\"collapsable\"";
			$title = <<<EOHTML
			<span class="hotspot" 	onmouseover="tooltip.show('Click to expand/collapse');" onmouseout="tooltip.hide();">
				<a onclick="expandCollapse('$id');"><img id="$id.button" src="http://eclipse.org/equinox/images/arrow.png"/></a>	
			</span> &nbsp;$title
EOHTML;
		}
		$result = <<<EOHTML
	<div class="homeitem3col">
		<h3>$title</h3>
		<p>$preamble</p>
		<div id="$id" $tableClass> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr><td width="5%"/><td width="78%"/><td width="9%"/><td width="8%"/></tr>

EOHTML;
		return $result;
	}
	
	function generateTable($id) {
		global $buildSpec;
		global $filesystemPath;
		
		$category = findCategory($id);
		if ($category == null)
			return "";

		$result = generateTablePreamble($category);
		
		foreach ($category as $drop) {
			$file = $drop["file"];
			if ($file == null)
				continue;
			$statusImage = generateStatusImage($drop);
			$images = generateDecorationImages($drop["images"]);
			$downloadSize = generateDropSize($filesystemPath . "/$file");
			$buildLabel = $buildSpec["label"];
			$checksumLinks = generateChecksumLinks($file, $buildLabel);

			$result .= <<<EOHTML
				<tr><td align="center">$statusImage</td>
					<td>$images<a href="http://eclipse.org/downloads/download.php?file=/equinox/drops/$buildLabel/$file">$file</a></td>
					$downloadSize
					$checksumLinks
				</tr>

EOHTML;
		}

		$result .= "\t\t\t</table>\n\t\t</div>\n\t</div>";
		return $result;		
	}

//	$root = $App->getDownloadBasePath();
	$root = $_SERVER['DOCUMENT_ROOT'];
	$qstring = $_SERVER['QUERY_STRING'];
	$path = "/equinox/drops/" . array_pop(explode("=", $qstring));
	$filesystemPath = $root . $path;
	analyzeBuild(dir($filesystemPath));
	$generateTable = 'generateTable';
	$preamble = $buildSpec->preamble;
	$buildTitle = $buildSpec["title"];
	$buildTime = $buildSpec["date"];
	$postscript = $buildSpec->postscript;
	
	$html = <<<EOHTML

<script type="text/javascript" src="http://eclipse.org/equinox/expand.js"></script>

<div id="midcolumn">
	<h3>$buildTitle</h3>
	<p><b>$buildTime</b></p> 
$preamble
{$generateTable("Equinox")}
{$generateTable("StarterKits")}
{$generateTable("Framework")}
{$generateTable("Addon")}
{$generateTable("Other")}
{$generateTable("Incubator")}
{$generateTable("Provisioning")}
{$generateTable("Launchers")}
$postscript
</div>

EOHTML;
	generateRapPage( $App, $Menu, $Nav, $pageAuthor, $pageKeywords, $buildSpec["title"], $html );
?>
