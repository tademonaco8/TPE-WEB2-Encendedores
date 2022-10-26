<?php
require_once 'app/models/user.model.php';
require_once 'app/views/auth.view.php';
require_once 'app/helpers/auth.helper.php';
class AuthController
{
    private $model;
    private $view;
    private $helper;

    public function __construct()
    {
        $this->helper = new AuthHelper();
        $this->model = new userModel();
        $this->view = new AuthView($this->helper->getUser());
    }
    public function showFormLogin()
    {
        $this->view->showFormLogin();
    }
    public function validateUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $user = $this->model->getUserByEmail($email);
        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && $name == $user->user && password_verify($password, $user->password)) {
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['USER_NAME'] = $user->user;
            $_SESSION['IS_LOGGED'] = true;
            $_SESSION['IS_ADMIN'] = $user->is_admin;

            header("Location: " . BASE_URL . "adminlist");
        } else {
            $this->view->showFormLogin("El usuario o la contraseña no existe.");
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
