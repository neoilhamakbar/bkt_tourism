<?php
	$host = "13.76.171.120";
	$user = "postgres";
	$pass = "neo@123456789";
	$port = "3389";
	$dbname = "bkt_tourism";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
