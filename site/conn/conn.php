<?php
	$mysqli = new mysqli('127.0.0.1','parte','parte2012*/','parte');
	if ($mysqli->connect_error)
	{
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
?>