<?php

use Core\App;
use Core\Database;

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
