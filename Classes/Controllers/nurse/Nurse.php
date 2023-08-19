<?php

namespace Controllers\nurse;

use Core\App;
use Core\Database;

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