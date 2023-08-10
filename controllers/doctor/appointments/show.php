<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$id = $_GET['id'] ?? 2;
$start = $_GET['start'] ?? '2023-08-01';
$end = $_GET['end'] ?? '2023-08-30';


// Filter event by calendar date

$filter_query = '';
$events = [];


if (!empty($_GET['start']) && !empty($_GET['end'])) {

    // Fetch events from database
    $query = "SELECT * FROM appointments WHERE `start` BETWEEN :start AND :end AND Staff_ID = :id";
    $events = $db->query($query, ['id' => $id, 'start' => $start, 'end' => $end])->findAll();
}

echo json_encode($events);
