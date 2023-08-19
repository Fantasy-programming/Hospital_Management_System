<?php

namespace Controllers\lab;


class Laboratory extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('laboratorist\index.view');
        
    }

    public function viewDiagnosticAction()
    {
        $this->renderView('laboratorist\diagnostics.view');
        
    }

    public function viewReportsAction()
    {
        $this->renderView('laboratorist\reports.view');
        
    }

    public function viewRequestsAction()
    {
        $this->renderView('laboratorist\requests.view');
        
    }

    public function viewSettingsAction()
    {
        $this->renderView('laboratorist\settings.view');
        
    }

    

}