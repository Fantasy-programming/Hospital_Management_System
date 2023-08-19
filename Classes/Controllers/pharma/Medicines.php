<?php

namespace Classes\Controllers\pharma;

use Core\App;
use Core\Database;

class Medicines extends \Classes\Controllers\pharma\Pharmacist
{
    public function showAction()
    {
        $db = App::resolve(Database::class);

        $query = '
        SELECT m.*, c.category AS category
        FROM medications m
        JOIN medicinescategory c ON m.category = c.id

        ';
        $medications = $db->query($query)->findAll();

        header('Content-Type: application/json');
        echo json_encode($medications);
    }

    public function fetchAction()
    {

        $db = App::resolve(Database::class);
        $query = '
        SELECT m.*, c.category AS category
        FROM medications m
        JOIN medicinescategory c ON m.category = c.id
        WHERE m.med_id = :id;
        ';
        $medications = $db->query($query, [
            'id' => $_GET['id']
        ])->find();

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($medications);
    }

    public function storeAction()
    {
        $db = App::resolve(Database::class);

        $query = "INSERT INTO  medications (name, category, type, ammount) VALUES (:name, :category, :type, :ammount)";
        $db->query($query, [
            'name' => $_POST['name'],
            'category' => $_POST['category'],
            'type' => $_POST['type'],
            'ammount' => $_POST['ammountInStock'],
        ]);
        http_response_code(200);
        echo json_encode(['message' => 'Medicine created successfully 😃', 'statusCode' => 200]);
    }

    public function updateAction()
    {
        $db = App::resolve(Database::class);



        $query = "UPDATE medications SET name = :name, category = :category, type = :type, ammount = :ammount Where med_id = :id";
        $db->query($query, [
            'name' => $_POST['name'],
            'category' => $_POST['category'],
            'type' => $_POST['type'],
            'ammount' => $_POST['ammountInStock'],
            'id' => $_POST['id']
        ]);
        http_response_code(200);
        echo json_encode(['message' => 'Medicine updated successfully 😃', 'statusCode' => 200]);
    }

    public function destroyAction()
    {
        $db = App::resolve(Database::class);

        // delete the node wiht id

        $query = "Delete from medications Where med_id = :id";

        $medications = $db->query($query, [
            'id' => $_GET['id']
        ]);

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode([
            'statusCode' => 200,
            'message' => 'Medication deleted successfully'
        ]);
    }
}
