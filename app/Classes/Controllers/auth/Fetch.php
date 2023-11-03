<?php

namespace Classes\Controllers\auth;

use Classes\Models\Appointments;
use Classes\Models\PatientModel;
use Classes\Models\StaffModel;

class Fetch extends \Core\Controller
{
    // public function fetchStaffAction()
    // {
    //     $result = (new StaffModel())->handle('fetch');

    //     if ($result) {
    //         showAndClose(['data' => $result, 'statusCode' => 200], 200);
    //     } else {
    //         showAndClose(['data' => 'Internal Server Error', 'statusCode' => 500], 500);
    //     }
    // }

    // public function fetchAllUsersAction()
    // {
    //     $result = (new Appointments())->handle('fetchAllPatients');
    //     showAndClose(['data' => $result, 'statusCode' => 200], 200);
    // }

    // public function fetchFilterAllUsersAction($param)
    // {
    //     if ($param['purpose'] === "noroom") {
    //         $result = (new PatientModel())->handle('fetchAllNoRoom');
    //         showAndClose(['data' => $result, 'statusCode' => 200], 200);
    //     } else if ($param['purpose'] === "none") {
    //         $result = (new PatientModel())->handle('fetchAll');
    //         showAndClose(['data' => $result, 'statusCode' => 200], 200);
    //     }
    //     exit;
    // }
}
