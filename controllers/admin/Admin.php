<?php

namespace Controllers\admin;

class Admin extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('admin\index.view');
    }
}
