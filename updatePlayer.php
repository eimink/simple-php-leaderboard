<?php
require 'config.php';
$collection = $db->player;
$postdata = file_get_contents("php://input");
$data = json_decode($postdata);
$query = array('playerId' => (string)htmlspecialchars($data->playerId));
$update = array('$set' => array('name' => (string)htmlspecialchars($data->name), 'gold' => (int)$data->gold, 'score' => (float)$data->score ));
$collection->update($query,$update,array('upsert'=>true));
echo 'OK!';
?>
