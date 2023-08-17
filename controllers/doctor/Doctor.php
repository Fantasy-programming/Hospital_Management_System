<?php

namespace Controllers\doctor;


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

    public function viewRequestsAction()
    {
        $this->renderView('doctor\requests.view');
    }

    public function viewSettingsAction()
    {
        $this->renderView('doctor\settings.view');
    }

    public function viewResultsAction()
    {
        $this->renderView('doctor\results.view');
    }
}
