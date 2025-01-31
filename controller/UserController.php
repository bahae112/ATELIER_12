<?php
require_once 'models/User.php';

class UserController extends BaseController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = new User();
            if ($user->authenticate($email, $password)) {
                header('Location: index.php?controller=chat&action=index');
            } else {
                $this->render('user/login', ['error' => 'Invalid credentials']);
            }
        } else {
            $this->render('user/login');
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userData = [
                'pseudo' => $_POST['pseudo'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'birthdate' => $_POST['birthdate'],
                'telephone' => $_POST['telephone'],
                'visibility' => $_POST['visibility'],
                'site' => $_POST['site'],
                'description' => $_POST['description'],
            ];
            $user = new User();
            $user->register($userData);
            header('Location: index.php?controller=user&action=login');
        } else {
            $this->render('user/register');
        }
    }
}
?>
