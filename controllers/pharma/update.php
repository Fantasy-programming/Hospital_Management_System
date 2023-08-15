<?php

use Core\App;
use Core\Database;

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
