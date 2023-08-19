<?php

namespace Classes\Controllers;

use Core\App;
use Core\Database;

class Requests extends \Core\Controller
{
    public function fetchAction()
    {
        $db = App::resolve(Database::class);
        $query = '
        SELECT
            n.id AS notification_id,
            u.id AS request_id,
            r.last_name AS requestee_name,
            n.notification_url,
            s.service_name,
            s.Description,
            u.request_date,
            IF(u.requester_type = "patient", p.last_name, k.last_name) AS requester_name,
            IF(u.requester_type = "patient", p.role, k.role) AS requester_role,
            n.state
        FROM
            patientnotifications n
        JOIN
            patients r on n.patient_id = r.id
        JOIN
            requests u ON n.request_id = u.id
        JOIN
            services s ON u.services_id = s.id
        LEFT JOIN
            staff k ON u.requester_id = k.id AND u.requester_type = "Staff"
        LEFT JOIN
            patients p ON u.requester_id = p.id AND u.requester_type = "Patient"
        WHERE
            n.patient_id = :id
';

        $medications = $db->query($query, [
            ':id' => 8
        ])->findAll();

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($medications);
    }


    public function fetchStuffAction($params)
    {
        $db = App::resolve(Database::class);

        $req = "";


        if ($params['type'] === "Pending") {
            $req = "Pending";
        } else {
            $req = "Fullfiled";
        }

        $query = '
    SELECT
        n.id AS notification_id,
        u.id AS request_id,
        r.last_name AS requestee_name,
        r.role As requestee_role,
        u.status,
        u.fulfilation_date,
        n.notification_url,
        s.service_name,
        s.Description,
        s.Purpose,
        u.request_date,
        IF(u.Target_type = "patient", tg.last_name, stg.last_name) AS target_last_name,
        IF(u.Target_type = "patient", tg.first_name, stg.first_name) AS target_first_name,
        IF(u.Target_type = "patient", tg.id, stg.id) AS target_id,
        IF(u.requester_type = "patient", p.last_name, k.last_name) AS requester_name,
        IF(u.requester_type = "patient", p.role, k.role) AS requester_role,
        n.state
    FROM
        staffnotifications n
    JOIN
        staff r on n.staff_id = r.id
    JOIN
        requests u ON n.request_id = u.id
    JOIN
        services s ON u.services_id = s.id
    LEFT JOIN
        staff k ON u.requester_id = k.id AND u.requester_type = "Staff"
    LEFT JOIN
        patients p ON u.requester_id = p.id AND u.requester_type = "Patient"
    LEFT JOIN
        patients tg ON u.Target_id = tg.id AND u.Target_type = "Patient"
    LEFT JOIN
        staff stg ON u.Target_id = stg.id AND u.Target_type = "Staff"
    WHERE
        n.staff_id = :id and u.status = :status
';

        $medications = $db->query($query, [
            'id' => $params['id'],
            'status' => $req
        ])->findAll();

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($medications);
    }
}
