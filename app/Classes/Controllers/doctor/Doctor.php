<?php

namespace Classes\Controllers\doctor;

use Classes\Models\PatientModel;


class Doctor extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('doctor\dashboard.view');
    }

    public function viewAppointmentsAction()
    {
        $this->renderView('doctor\appointments.view');
    }

    public function viewPatientsAction()
    {
        $this->renderView('doctor\patients.view');
    }

    public function viewPatientAction($params)
    {

        $staff = (new PatientModel())->handle('fetch', $params);

        // keep the patient id in the session
        $_SESSION['patient_id'] = $params['id'];

        $this->renderView(
            'doctor\patient.view',
            $staff
        );
    }

    public function viewRequestsAction()
    {
        $this->renderView('doctor\requests.view');
    }

    public function viewSettingsAction()
    {
        $this->renderView('doctor\settings.view');
    }
}
