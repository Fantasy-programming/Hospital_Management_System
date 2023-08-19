<?php

namespace Classes\Controllers\doctor;

use Core\App;
use Core\Database;

class Appointment extends \Classes\Controllers\doctor\Doctor
{
    public function showAppointmentsAction()
    {
        $db = App::resolve(Database::class);
        $id = $_GET['id'] ?? 2;
        $start = $_GET['start'] ?? '2023-08-01';
        $end = $_GET['end'] ?? '2023-08-30';

        // Filter event by calendar date

        $query = "SELECT * FROM appointments WHERE `start` BETWEEN :start AND :end AND Staff_ID = :id";
        $events = $db->query($query, ['id' => $id, 'start' => $start, 'end' => $end])->findAll();

        if ($events) {
            foreach ($events as &$event) {
                $event['allDay'] = (bool) $event['allDay'];
            }

            unset($event); // unset reference to last element to avoid bugs
            echo json_encode($events);
            exit;
        }

        echo json_encode([]);
        exit;
    }

    public function destroyAppointmentAction()
    {
        $db = App::resolve(Database::class);

        $patientID = 8;
        $staffID = 2;

        $json = file_get_contents('php://input');
        $data = json_decode($json);

        $id = $data->id ?? null;


        if ($id) {
            $query = "DELETE FROM appointments WHERE ID = :id";
            $db->query($query, ['id' => $id]);
            http_response_code(200);
            echo json_encode(['status' => 1]);
            exit;
        }

        http_response_code(400);
        echo json_encode(['status' => 0]);
        exit;
    }

    public function storeAppointmentAction()
    {
        $db = App::resolve(Database::class);
        $json = file_get_contents('php://input');
        $data = json_decode($json);

        // temp
        $patientID = 8;
        $staffID = 2;

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
    }

    public function updateAppointmentAction()
    {
        $db = App::resolve(Database::class);

        $patientID = 8;
        $staffID = 2;

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
    }
}
