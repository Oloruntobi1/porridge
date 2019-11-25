<?php

require_once('index.html');


$dbconn = pg_connect("host=ec2-54-243-47-196.compute-1.amazonaws.com port=5432 dbname=dd1toaipcsjn9j user=pxpdlmcfxgzeyi password=6914a3d3b77aa6b46b4cd348a56a4f1a13ed2c85f06f768bfed359c9b9a931d5")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'CREATE TABLE test';
$result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());



?>

