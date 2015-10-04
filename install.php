<?php
if (! function_exists("out")) {
	function out($text) {
		echo $text."<br />";
	}
}

if (! function_exists("outn")) {
	function outn($text) {
		echo $text;
	}
}

global $db;
global $amp_conf;

if($amp_conf["AMPDBENGINE"] == "sqlite3")  {
	$sql = "
	CREATE TABLE IF NOT EXISTS smarthomeroute 
	(
		`cid` varchar(45) NOT NULL PRIMARY KEY, 
		`destination` varchar(50) NOT NULL 
	);
	";
}
else  {
	$sql = "
	CREATE TABLE IF NOT EXISTS smarthomeroute 
	(
		`cid` varchar(45) NOT NULL PRIMARY KEY,  
		`destination` varchar(50) NOT NULL 
	);
	";
}
$check = $db->query($sql);
if(DB::IsError($check)) {
	die_freepbx("Can not create SmartHomeRoute DB table");
}

?>
