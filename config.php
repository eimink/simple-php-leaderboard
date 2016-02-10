<?php
$dbhost = 'localhost';
$dbname = 'database';

$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;
?>
