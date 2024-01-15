<?php

namespace Classes\Controllers;

class Home extends \Core\Controller
{
    public function showAction()
    {
        $this->renderView('home');
    }
}
