<?php

namespace Classes\Controllers\doctor;

use Classes\Models\PatientModel;


class Doctor extends \Core\Controller
{
    public function viewHomeAction(): void
    {
        $this->renderView('doctor\dashboard.view');
    }

    public function viewAppointmentsAction(): void
    {
        $this->renderView('doctor\appointments.view');
    }

    public function viewPatientsAction(): void
    {
        $this->renderView('doctor\patients.view');
    }
    /**
     * @return void
     */
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
    /**
     * @return void
     */
    public function viewRequestsAction()
    {
        $this->renderView('doctor\requests.view');
    }
    /**
     * @return void
     */
    public function viewSettingsAction()
    {
        $this->renderView('doctor\settings.view');
    }
}
