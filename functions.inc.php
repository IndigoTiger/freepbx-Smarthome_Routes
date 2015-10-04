<?php

function smarthomeroute_list(){
	$sql = "SELECT cid FROM smarthomeroute";
	$results= sql($sql, "getAll");

	foreach($results as $result){
		$customers[] = array($result[0]);
	}
	return isset($customers)?$customers:null;
}

function smarthomeroute_get($extdisplay){
	$sql="SELECT * FROM smarthomeroute where cid=$extdisplay";
	$results=sql($sql, "getRow", DB_FETCHMODE_ASSOC);
	return isset($results)?$results:null;
}

function smarthomeroute_add($cid, $destination){
	$sql="INSERT INTO smarthomeroute (cid, destination) values ('$cid', '$destination')";
	sql($sql);
}

function smarthomeroute_del($extdisplay){
	$sql="DELETE FROM smarthomeroute where cid=$extdisplay";
	sql($sql);
}

function smarthomeroute_edit($extdisplay, $cid, $destination){
	$sql="UPDATE smarthomeroute set cid='$cid' where cid='$extdisplay'";
	sql($sql);
	$sql="UPDATE smarthomeroute set destination='$destination' where cid='$extdisplay'";
	sql($sql);
}

function smarthomeroute_getcid(){
	$sql="SELECT DISTINCT cid order by cid";
	$results=sql($sql, "getAll");
	return isset($results)?$results:null;
}
?>
