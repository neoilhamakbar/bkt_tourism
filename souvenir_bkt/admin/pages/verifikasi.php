<?php
include ('../../../connect.php');

$edit = pg_query("update admin set role='C' where username='$_GET[user]'");

if($edit){
	header('location:http://souvenirwebgis.ddns.net/bkt_tourism/index.php');
}
