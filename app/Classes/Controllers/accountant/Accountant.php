<?php

namespace Controllers\accountant;

class Accountant extends \Core\Controller
{
    public function viewHomeAction(): void
    {
        $this->renderView('accountant\index.view');
    }

}
