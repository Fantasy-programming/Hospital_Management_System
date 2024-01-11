<?php

namespace Classes\Controllers\auth;

use Core\App;
use Core\Database;

class Mutate extends \Core\Controller
{
    public function updateStaffAction(): void
    {
        $db = App::resolve(Database::class);
        $spec = $_POST['specialisation'] ?? $this->defaultspec($_POST['role']);


        if (!isset($_POST['_purpose'])) {
            http_response_code(400);
            echo json_encode(['error' => 'wrong request', 'statusCode' => 400]);
        }

        if ($_POST['_purpose'] === 'changepass') {
            $this->updatepass($db);
        } else if ($_POST['_purpose'] === 'updateprofile') {
            $this->updateprofile($db, $spec);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'wrong request', 'statusCode' => 400]);
        }
    }
    /**
     * @return void
     * @param mixed $db
     */
    protected function updatepass($db): void
    {
        $query = "SELECT password FROM staff WHERE id = :id";
        $queryiedpassword = $db->query($query, ['id' => 6])->find();
        $queryiedpassword = $queryiedpassword['password'];
        if ($queryiedpassword) {
            $oldpassword = $_POST['oldPassword'];
            if (password_verify($oldpassword, $queryiedpassword)) {
                $newpassword = $_POST['newPassword'];
                $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                $updatequery = "UPDATE staff SET password = :password WHERE id = :id";
                $db->query($updatequery, ['password' => $newpassword, 'id' => 6]);
                http_response_code(200);
                echo json_encode(['message' => 'password updated sucessfully', 'statusCode' => 200]);
            } else {
                http_response_code(400);
                echo json_encode([
                    'message' => 'wrong password',
                    'statusCode' => 400
                ]);
            }
        } else {
            http_response_code(400);
            echo json_encode([
                'message' => 'user has no password',
                'statusCode' => 400
            ]);
        }
    }
    /**
     * @return void
     * @param mixed $db
     * @param mixed $spec
     */
    protected function updateprofile($db, $spec): void
    {
        $originalName = $_FILES['image']['name'];
        $newName = uniqid() . time() . "." . pathinfo($originalName, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], "assets/uploads/" . $newName);

        $query = "UPDATE staff SET first_name = :first_name, last_name = :last_name, email = :email, image = :image, mobile = :mobile, address = :address, country = :country, city = :city, specialisation = :spec WHERE id = :id";
        $db->query($query, [
            'first_name' => $_POST['firstName'],
            'last_name' => $_POST['lastName'],
            'email' => $_POST['email'],
            'image' => $newName,
            'mobile' => $_POST['mobileNumber'],
            'address' => $_POST['address'],
            'country' => $_POST['country'],
            'city' => $_POST['city'],
            'spec' => $spec,
            'id' => 6
        ]);
        http_response_code(200);
        echo json_encode(['message' => 'Profile updated successfully 😃', 'statusCode' => 200]);
    }
    /**
     * @param string $role
     */
    protected function defaultspec($role): string
    {
        switch ($role) {
            case 'Doctor':
                return 'general';
                break;
            case 'Nurse':
                return 'general';
                break;
            case 'Accountant':
                return 'Accountancy';
                break;
            case 'Pharmacist':
                return 'Pharmacy';
                break;
            case 'Laboratorist':
                return 'general';
                break;
            case 'admin':
                return 'admin';
                break;
            default:
                return 'general';
                break;
        }
    }
}
