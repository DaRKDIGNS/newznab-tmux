<?php

$newzpath = getenv('NEWZPATH');
require_once("$newzpath/www/config.php");
require_once("lib/groups.php");
require_once("lib/binaries.php");

if (isset($argv[1]))
{
	$group = $argv[1];
	echo "Updating group {$group}\n";

	$g = new Groups;
	$group = $g->getByName($group);

	$bin = new Binaries;
	$bin->updateGroup(null, $group);	
}
else
{
	$binaries = new Binaries;
	$binaries->updateAllGroups();
}

?>