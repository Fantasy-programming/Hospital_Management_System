<?php

namespace Classes\Controllers\nurse;

use Classes\Models\PatientModel;

class Nurse extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('nurse\index.view');
    }

    public function viewRecordsAction()
    {
        $this->renderView('nurse\records.view');
    }

    public function viewPatientAction($params)
    {
        $patient = (new PatientModel())->handle('fetch', $params);

        // keep the patient id in the session
        $_SESSION['patient_id'] = $params['id'];

        $this->renderView('nurse\patient.view', $patient);
    }

    public function createPatientAction($param)
    {
        if ($_POST["_purpose"] === "logvitals") {
            $result = (new PatientModel())->handle('updateVitals', $param);
        } elseif ($_POST["_purpose"] === "logoperation") {
            $result = (new PatientModel())->handle('createOperation', $param);
        }
        header("Location: /nurse/records/" . $param['id']);
    }

    public function viewRequestsAction()
    {
        $this->renderView('nurse\requests.view');
    }

    public function viewSpacesAction()
    {
        $this->renderView('nurse\spaces.view');
    }

    public function viewSettingsAction()
    {
        $this->renderView('nurse\settings.view');
    }
}
