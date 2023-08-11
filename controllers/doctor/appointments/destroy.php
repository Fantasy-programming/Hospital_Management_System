<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$patientID = 8;
$staffID = 2;

// Retrieve json from post body

$json = file_get_contents('php://input');
$data = json_decode($json);

$id = $data->id;

$query = "DELETE FROM appointments WHERE ID = :id";

$db->query($query, [':id' => $id]);

echo json_encode(['status' => 1]);
