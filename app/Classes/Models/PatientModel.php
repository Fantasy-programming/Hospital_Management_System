<?php

namespace Classes\Models;

class PatientModel extends \Core\Models
{
    public function handle($action, $params = [])
    {
        $methodName = $action . 'Event';

        if (method_exists($this, $methodName)) {
            return $this->$methodName($params);
        } else {
            return 0;
        }
    }

    protected function fetchEvent($params = [])
    {
        $query = '
        SELECT p.id, p.first_name, p.last_name, p.email, p.age, p.image, i.Temperature, i.BloodPressure, i.Weight, i.Height, i.Sugar
        FROM patients AS p
        LEFT JOIN vital_info AS i ON p.id = i.patient_id
        WHERE p.id = :id;
        ';
        $id = $params['id'] ?? $_SESSION['patient_id'];
        $result = $this->db->query($query, ['id' => $id])->find();

        if ($result) {
            return $result;
        }
        return [];
    }

    protected function updateVitalsEvent($params = [])
    {
        // check if patient has vital info
        $query = "SELECT * FROM vital_info WHERE patient_id = :id";
        $result = $this->db->query($query, ['id' => $_SESSION['patient_id']])->find();
        if ($result) {
            // update
            $query = "UPDATE vital_info SET Temperature = :temp, BloodPressure = :bp, Weight = :weight, Height = :height, Sugar = :sugar WHERE patient_id = :id";
            $result = $this->db->query($query, [
                'temp' => $_POST['temperature'],
                'bp' => $_POST['bloodPressure'],
                'weight' => $_POST['weight'],
                'height' => $_POST['height'],
                'sugar' => $_POST['sugar'],
                'id' => $_SESSION['patient_id'],
            ]);
            return ['message' => 'Vitals updated successfully', 'statusCode' => 200];
        }
        // create
        $query = "INSERT INTO vital_info (patient_id, Temperature, BloodPressure, Weight, Height, Sugar) VALUES (:id, :temp, :bp, :weight, :height, :sugar)";
        $result = $this->db->query($query, [
            'id' => $_SESSION['patient_id'],
            'temp' => $_POST['temperature'],
            'bp' => $_POST['bloodPressure'],
            'weight' => $_POST['weight'],
            'height' => $_POST['height'],
            'sugar' => $_POST['sugar'],
        ]);
        return ['message' => 'Vitals created successfully', 'statusCode' => 200];
    }

    protected function createOperationEvent($params = [])
    {

        $query = "insert into records (patient_id, Event, report) values (:patient_id, :event, :report)";
        $result = $this->db->query($query, [
            'patient_id' => $_SESSION['patient_id'],
            'event' => "Operation",
            'report' => $_POST['operationLog'],
        ]);
    }

    protected function fetchAllEvent($params = [])
    {
        $query = "Select * from patients";
        $result = $this->db->query($query)->findAll();

        if ($result) {
            return $result;
        }
        return [];
    }

    protected function fetchAllNoRoomEvent($param = [])
    {
        $query = '
        SELECT p.id, p.first_name, p.last_name
        FROM patients p
        LEFT JOIN rooms r ON p.id = r.patient_id
        LEFT JOIN user_ward w ON p.id = w.patient_id
        WHERE r.id IS NULL AND w.ward_id IS NULL
        ';
        $result = $this->db->query($query)->findAll();
        if ($result) {
            return $result;
        }
        return [];
    }
}
