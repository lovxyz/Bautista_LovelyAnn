<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->call->model('UsersModel');

            $users = $this->UsersModel->all();

$user = null;

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

            if ($user && password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header('Location: /Lab1/LavaLust/public/index.php/products');
                exit;

            } else {
                echo "Invalid username or password.";
                return;
            }
        }

        $this->call->view('auth/login');
    }
    public function logout()
{
    session_destroy();

    header('Location: /Lab1/LavaLust/public/index.php/login');
    exit;
}
}