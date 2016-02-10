<?php
require 'config.php';
$collection = $db->player;
$playerId = (string)htmlspecialchars($_GET["playerId"]);
$query = array('playerId' => $playerId);
$result = $collection->findOne($query,array('_id'=>0));
echo json_encode($result);
?>
