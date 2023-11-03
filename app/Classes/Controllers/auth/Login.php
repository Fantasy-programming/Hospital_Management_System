<?php

namespace Classes\Controllers\auth;

use Classes\Login\LoginForm;
use Core\App;
use Core\Database;

class Login extends \Core\Controller
{

    public function showUserLoginAction()
    {
        $this->renderView('auth/view.user.login', ['title' => 'Login', 'bg' => 'bd-users']);
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

        $db = App::resolve(Database::class);
        $form = new LoginForm();

        if (!$form->validate($_POST['email'], $_POST['password'])) {
            $this->renderView('auth/view.user.login', [
                'title' => 'Login',
                'bg' => 'bd-users',
                'errors' => $form->getErrors()
            ]);
            return;
        }

        // TODO: Extract this to a model
        $query = "SELECT id, email, first_name, last_name, password, role FROM patients WHERE email = :mail LIMIT 1";
        $user = $db->query($query, [
            'mail' => $_POST['email']
        ])->find();

        if (!$user) { 
            header("Location: /login?error=usernotfound");
            exit();
        }

        if (password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            session_regenerate_id();
            
            // Send to dashboard
            header("Location: /patient/dashboard");
            exit();
        }

        header("Location: /login?error=incorrectpassword");
        exit();
       
    }

    public function adminLoginAction()
    {

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
                session_regenerate_id();

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
                session_regenerate_id();

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
