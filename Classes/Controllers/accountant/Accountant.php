<?php

namespace Controllers\accountant;


class Accountant extends \Core\Controller
{
    public function viewHomeAction()
    {
        $this->renderView('accountant\index.view');
    }

}