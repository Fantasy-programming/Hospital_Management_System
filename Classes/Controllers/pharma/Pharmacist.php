<?php

namespace Classes\Controllers\pharma;

use Core\App;
use Core\Database;

class Pharmacist extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('pharmacist\index.view');
    }

    public function viewRequestsAction()
    {
        session_start();
        $id = ["id" => $_SESSION['user_id']];
        $this->renderView('pharmacist\requests.view', $id);
    }

    public function viewMedicinesAction()
    {
        session_start();
        $total = $this->getDashInfo($_SESSION['user_id']);
        $this->renderView('pharmacist\medicines.view', $total);
    }

    public function viewPrescriptionsAction()
    {
        $this->renderView('pharmacist\prescriptions.view');
    }

    public function viewSettingsAction()
    {
        $this->renderView('pharmacist\settings.view');
    }

    protected function getDashInfo($id)
    {
        $db = App::resolve(Database::class);
        $query = "Select * from medications";
        $med = $db->query($query)->findAll();

        // compute the total ammount
        $total = 0;
        foreach ($med as $m) {
            $total += $m['ammount'];
        }
        return [
            'total' => $total,
        ];
    }
}
