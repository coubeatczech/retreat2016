<?php
	include "/var/www/retreat2016/database.php";
	include "quickstart.php";
	$mysqli = new mysqli("localhost", $db_user, $db_pass, $db_database);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; }
	$result = $mysqli->query("select * from rregistration");
	
	$rows = array();
	while ($row = $result->fetch_assoc()) {
		$r = array($row["hash"], $row["email"], $row["name"], $row["q1"], $row["q2"], $row["q3"],
			$row["q4"], $row["amount"], $row["amount_code"], $row["payment_success"]
			, $row["note"], $row["timestamp"]);
		array_push($rows, $r); }
	
	saveRows($rows);	
