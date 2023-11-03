<?php

namespace Classes\Controllers\pharma;

use Core\App;
use Core\Database;

class Categories extends \Classes\Controllers\pharma\Pharmacist
{

    public function fetchAction()
    {

        $db = App::resolve(Database::class);
        $query = "SELECT * from medicinescategory";
        $categories = $db->query($query)->findAll();

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($categories);
    }

    public function storeAction()
    {

        $db = App::resolve(Database::class);

        $query = "INSERT INTO medicinescategory (category) VALUES (:name)";
        $db->query($query, [
            'name' => $_POST['name'],
        ]);
        http_response_code(200);
        echo json_encode(['message' => 'Category created successfully 😃', 'statusCode' => 200]);
    }

    public function updateAction()
    {

        $db = App::resolve(Database::class);

        $query = "UPDATE medicinescategory SET category = :category Where id = :id";
        $db->query($query, [
            'category' => $_POST['new_name'],
            'id' => $_POST['old_name']
        ]);
        http_response_code(200);
        echo json_encode(['message' => 'Category updated successfully 😃', 'statusCode' => 200]);
    }

    public function destroyAction()
    {
        $db = App::resolve(Database::class);

        // delete the node wiht id

        $query = "Delete from  medicinescategory Where id = :id";

        $categories = $db->query($query, [
            'id' => $_GET['id']
        ]);

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode([
            'statusCode' => 200,
            'message' => 'Category deleted successfully'
        ]);
    }
}
