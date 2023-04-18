<?php
class LoginController
{
    private $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function login()
    {
        if ($_SERVER['POST'] == 'POST') {
            $role = $_POST['role'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByRole($role);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: /dashboard');
                exit;
            } else {
                $error = "Invalid username or password";
            }
        }
        include 'views/login.php';
    }
}
