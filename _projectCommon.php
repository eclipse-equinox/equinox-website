<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	$pageAuthor="Equinox Committers";
	$App->ExtraHtmlHeaders = '<link rel="stylesheet" type="text/css" href="/equinox/equinox.css">';
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/Equinox/", "_self", 1);
	$Nav->addCustomNav("Mailing Lists", "http://eclipse.org/mail/", "_self", 1);
	$Nav->addNavSeparator("Components", "index.php");
	$Nav->addCustomNav("Equinox", "http://eclipse.org/equinox/", "_self", 1);
	$Nav->addCustomNav("Incubator", "http://eclipse.org/eclipse/incubator", "_self", 1);
	$Nav->addNavSeparator("Related", "");
	$Nav->addCustomNav("RT", "http://eclipse.org/rt/", "_self", 1);
	$Nav->addCustomNav("Eclipse", "http://eclipse.org/eclipse/", "_self", 1);
	$Nav->addCustomNav("PDE", "http://eclipse.org/pde/", "_self", 1);
	$Nav->addCustomNav("RAP", "http://eclipse.org/rap/", "_self", 1);
	$Nav->addCustomNav("ECF", "http://eclipse.org/ecf/", "_self", 1);
	$Nav->addCustomNav("Development", "http://eclipse.org/eclipse/development/", "_self", 1);

?>