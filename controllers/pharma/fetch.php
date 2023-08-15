<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);



$query = "Select * from medications Where med_id = :id";
$medications = $db->query($query, [
    'id' => $_GET['id']
])->find();

header('Content-Type: application/json');
http_response_code(200);
echo json_encode($medications);
