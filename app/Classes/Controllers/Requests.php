<?php

namespace Classes\Controllers;

use Classes\Models\RequestsModel;
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
            ':id' => 8,
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
        select requests.id as rquID, requester_id, request_date, requests.status, Event_id as prescriptionId, s.first_name as dfname, s.last_name as dlname,  p.first_name as pfname, p.last_name as plname, ss.Description as service_description  from requests
        join staff as s on s.id = requests.requester_id
        join patients as p on p.id = requests.Target_id
        left join services as ss on ss.id = requests.services_id
        left join prescriptions as pr on pr.id = Event_id
        where request_body = :body and requests.status = :status';

        $medications = $db->query($query, [
            'status' => $req,
            'body' => $params['body'],
        ])->findAll();

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($medications);
    }

    public function updateRequestsAction($params)
    {
        $db = new RequestsModel();

        $results = $db->handle('updateRequest', $params);
        http_response_code(200);
        echo json_encode($results);
    }
    public function fetchRequestsAction($params)
    {

        $db = new RequestsModel();

        $results = [];

        if ($params['body'] === "Operation") {
            $results = $db->handle('fetchOperaton');
        } else {
            $results = $db->handle('fetchLabRequest');
        }

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($results);
    }

    public function storeAction()
    {

        if ($_POST["For"] === "operation") {
            $result = (new RequestsModel())->handle('storeOperation');
            showAndClose(['data' => $result, 'statusCode' => 200], 200);
        } elseif ($_POST["For"] === "Test") {
            $result = (new RequestsModel())->handle('storeLab');
            showAndClose(['data' => $result, 'statusCode' => 200], 200);
        } else {

            $result = (new RequestsModel())->handle('storePrescription');
            showAndClose(['data' => $result, 'statusCode' => 200], 200);
        }
    }
}
