<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

// delete the node wiht id

$query = "Delete from medications Where med_id = :id";

$medications = $db->query($query, [
    'id' => $_GET['id']
]);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode([
    'statusCode' => 200,
    'message' => 'Medication deleted successfully'
]);
