<?php

namespace Controllers\auth;

use Core\App;
use Core\Database;

class Login extends \Core\Controller
{

    public function showUserLoginAction()
    {
        $this->renderView('auth/view.user.login', [
            'title' => 'Login',
            'bg' => 'bd-users'
        ]);
    }

    public function showAdminLoginAction()
    {
        $this->renderView('auth/view.admin.login', ['title' => 'Admin login', 'bg' => 'bd-admin']);
    }

    public function showStaffLoginAction()
    {
        $this->renderView('auth/view.staff.login', ['title' => 'Staff login', 'bg' => 'bd-staff']);
    }



    public function userLoginAction()
    {
        session_start();

        $db = App::resolve(Database::class);
        $query = "SELECT id, email, first_name, last_name, password, role FROM patients WHERE email = :mail LIMIT 1";
        $user = $db->query($query, [
            'mail' => $_POST['email']
        ])->find();

        if ($user) {
            if (password_verify($_POST['password'], $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                header("Location: /patient/dashboard");
                exit();
            } else {

                // Incorrect password
                header("Location: /login?error=incorrectpassword");
                exit();
            }
        } else {

            // User not found
            header("Location: /login?error=usernotfound");
            exit();
        }
    }

    public function adminLoginAction()
    {
        session_start();

        $db = App::resolve(Database::class);

        $query = "SELECT id, username, password, role FROM staff WHERE username = :username AND role = :role LIMIT 1";
        $params = [
            'username' => $_POST['userName'],
            'role' => $_POST['role']
        ];

        $user = $db->query($query, $params)->find();

        if ($user) {
            if (password_verify($_POST['password'], $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                header("Location: /admin/dashboard");
                exit();
            } else {
                // Incorrect password
                header("Location: /admin?error=incorrectpassword");
                exit();
            }
        } else {

            // User not found
            header("Location: /admin?error=usernotfound");
            exit();
        }
    }

    public function staffLoginAction()
    {

        session_start();

        $db = App::resolve(Database::class);


        $query = "SELECT id, username, password, role FROM staff WHERE username = :user AND role = :role LIMIT 1";
        $params = [
            'user' => $_POST['userName'],
            'role' => $_POST['role']
        ];

        $user = $db->query($query, $params)->findorfail();


        if ($user) {
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                switch ($user['role']) {
                    case 'Doctor':
                        header("Location: /doctor/dashboard");
                        exit();
                    case 'Nurse':
                        header("Location: /nurse/dashboard");
                        exit();
                    case 'Accountant':
                        header("Location: /accountant/dashboard");
                        exit();
                    case 'Pharmacist':
                        header("Location: /pharmacist/dashboard");
                        exit();
                    case 'Laboratorist':
                        header("Location: /lab/dashboard");
                        exit();
                    default:
                        // Unknown role, redirect back to the login page with an error message
                        header("Location: /staff/login?error=unknownrole");
                        exit();
                }
            } else {
                // Incorrect password, redirect back to the login page with an error message
                header("Location: /staff/login?error=incorrectpassword");
                exit();
            }
        } else {
            // User not found, redirect back to the login page with an error message
            header("Location: /staff/login?error=usernotfound");
            exit();
        }
    }
}
