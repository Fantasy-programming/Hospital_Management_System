<?php

namespace Classes\Models;

class ReportModel extends \Core\Models
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

    protected function showEvent($params = [])
    {
        $query = 'select * from user_lab_tests where testID = :id';
        $id = $params['id'];
        $result = $this->db->query($query, [
            'id' => $id,
        ])->find();

        if ($result) {
            return $result;
        }
        return [];
    }


    protected function createManualEvent($params = [])
    {
        $query = 'insert into user_lab_tests ( TestName, patient_id, severity, results) value (:name, :ptID, :severity, :results)';
        $id = $params['id'] ?? $_SESSION['patient_id'];
        $result = $this->db->query($query, [
            'name' => $_POST['testName'],
            'ptID' => $id,
            'severity' => $_POST['severity'],
            'results' => $_POST['testResult'],
        ]);

        if ($result) {
            return $result;
        }
        return [];
    }

    protected function createFileEvent($params = [])
    {
        $originalName = $_FILES['fileUpload']['name'];
        $newName = uniqid() . time() . "." . pathinfo($originalName, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], "assets/uploads/" . $newName);

        $query = 'insert into user_lab_tests ( TestName, patient_id, severity, file) value (:name, :ptID, :severity, :file)';
        $id = $params['id'] ?? $_SESSION['patient_id'];
        $result = $this->db->query($query, [
            'name' => $_POST['testName'],
            'ptID' => $id,
            'severity' => $_POST['severity'],
            'file' => $newName,
        ]);

        if ($result) {
            return $result;
        }
        return [];
    }
}
