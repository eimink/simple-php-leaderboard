<?php
require 'config.php';
$collection = $db->player;
$cursor = $collection->find(array(),array('score'=>1,'name'=>1,'_id'=>0));
$sort = $cursor->sort(array('score'=> -1));
$result = $sort->limit(100);
$obj = new stdClass();
$obj->data = iterator_to_array($result);
echo json_encode($obj);
?>
