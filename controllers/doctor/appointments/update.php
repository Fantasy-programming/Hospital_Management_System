<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$patientID = 8;
$staffID = 2;

// Retrieve json from post body

$json = file_get_contents('php://input');
$data = json_decode($json);



// udpate the record with the new date

$params = [
    'id' => $data->id,
    'start' => $data->start,
    'end' => $data->end,
    'title' => $data->title,
    'description' => $data->description,
    'status' => $data->status,
    'allDay' => False
];

$query = "UPDATE appointments SET start=:start, end=:end, title=:title, description=:description, status=:status, allDay=:allDay WHERE ID = :id";

$db->query($query, $params);

echo json_encode(['status' => 1]);
