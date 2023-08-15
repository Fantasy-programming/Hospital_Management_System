<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "Select * from medications";
$medications = $db->query($query)->findAll();

header('Content-Type: application/json');
echo json_encode($medications);
