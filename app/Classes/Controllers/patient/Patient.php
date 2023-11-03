<?php

namespace Controllers\patient;

use Core\App;
use Core\Database;

class Patient extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('patient\index.view');
    }
}
