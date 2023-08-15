<?php

use Core\App;
use Core\Database;

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
