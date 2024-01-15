<?php

namespace Classes\Controllers\nurse;

use Classes\Models\SpaceModel;

class Space extends \Classes\Controllers\nurse\Nurse
{
    public function destroyAction($params) {}

    public function storeAction($params) {}

    public function updateAction($params)
    {
        if ($params["type"] === 'room') {
            $result = (new SpaceModel())->handle('updateroom', $params);
            showAndClose($result, 200);
        } elseif ($params['type'] === 'ward') {
            $result = (new SpaceModel())->handle('updateward', $params);
            showAndClose($result, 200);
        }
    }


    public function fetchAction($params)
    {
        if ($params["type"] === 'room') {
            $result = (new SpaceModel())->handle('fetchroom', $params);
            showAndClose($result, 200);
        } elseif ($params['type'] === 'ward') {
            $result = (new SpaceModel())->handle('fetchward', $params);
            showAndClose($result, 200);
        }
    }
}
