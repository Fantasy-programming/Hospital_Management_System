<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$patientID = 8;
$staffID = 2;

// Retrieve json from post body

$json = file_get_contents('php://input');
$data = json_decode($json);


if ($data->requestType == 'addEvent') {
    $start = $data->start;
    $end = $data->end;
    $event_data = $data->eventData;

    $eventTitle = $event_data[0] ?? '';
    $eventDescription = $event_data[1] ?? '';

    if (!empty($eventTitle)) {

        // Insert event into database

        $query = "INSERT INTO appointments (title, Description, Patient_ID, Staff_ID, Purpose,  start, end, Status) VALUES (:title, :description, :patientID, :staffID, :purpose, :start, :end, :status)";
        $params = [
            ':title' => $eventTitle,
            ':description' => $eventDescription,
            ':patientID' => $patientID,
            ':staffID' => $staffID,
            ':purpose' => 'Appointment',
            ':start' => $start,
            ':end' => $end,
            ':status' => 'Pending'
        ];

        $db->query($query, $params);

        $output = ['status' => 1];
        echo json_encode($output);
    }
}
