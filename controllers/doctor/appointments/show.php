<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// $config = require base_path('config.php');
// $db = new Database($config['database']);
$id = $_GET['id'] ?? 2;
$start = $_GET['start'] ?? '2023-08-01';
$end = $_GET['end'] ?? '2023-08-30';


// Filter event by calendar date

$filter_query = '';
$events = [];


$query = "SELECT * FROM appointments WHERE `start` BETWEEN :start AND :end AND Staff_ID = :id";
$events = $db->query($query, ['id' => $id, 'start' => $start, 'end' => $end])->findAll();

// Convert allDay field to boolean
foreach ($events as &$event) {
    $event['allDay'] = (bool) $event['allDay'];
}
unset($event); // unset reference to last element to avoid bugs


echo json_encode($events);
