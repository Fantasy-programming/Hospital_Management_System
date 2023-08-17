<?php

namespace Controllers;

class home extends \Core\Controller
{
    public function showAction()
    {
        $this->renderView('home');
    }
}
