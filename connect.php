<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "vin4798";
	$port = "5432";
	$dbname = "sovenir";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>