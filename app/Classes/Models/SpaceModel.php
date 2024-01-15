<?php

namespace Classes\Models;

class SpaceModel extends \Core\Models
{
    public function handle($action, $params = [])
    {
        $methodName = $action . 'Event';

        if (method_exists($this, $methodName)) {
            return $this->$methodName($params);
        } else {
            // $this->notFoundEvent();
        }
    }

    protected function fetchroomEvent($params = [])
    {
        $query = '
        Select p.first_name, p.last_name from rooms
        join patients as p on rooms.patient_id = p.id
        where rooms.id = :id
        ';

        $result = $this->db->query($query, ['id' => $params['number']])->find();

        if ($result) {
            return $result;
        }
        return [];
    }

    protected function fetchwardEvent($params = []) {}

    protected function updateroomEvent($params = [])
    {

        $query = 'Update rooms set patient_id = :patient_id where id = :id';
        $result = $this->db->query($query, ['patient_id' => $_POST['patientId'], 'id' => $params['number']]);
        if ($result) {
            return ['data' => 'Room updated successfully', 'statusCode' => 200];
        }
        return ['data' => 'Internal Server Error', 'statusCode' => 500];
    }

    protected function updatewardEvent($params = []) {}

    protected function storeroomEvent($params = []) {}

    protected function storewardEvent($params = []) {}

    protected function destroyroomEvent($params = []) {}

    protected function destroywardEvent($params = []) {}
}
