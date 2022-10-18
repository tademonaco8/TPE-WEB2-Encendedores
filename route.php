<?php
require_once 'app/controllers/list.controller.php';
require_once 'app/controllers/auth.controller.php';
require_once 'app/controllers/item.controller.php';
require_once 'app/controllers/admin.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action='list';
}

$params = explode('/', $action);
// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    // case 'home':
    //     $listController = new ListController();
    //     $category = $params[1];
    //     $listController->showByCategory($category);
    //     break;
    case 'list':
        $listController = new ListController();
        $listController->ShowLighters();
        break;
    case 'item':
        $itemController = new ItemController();
        $id = $params[1];
        $itemController->GetShowLighter($id);
        break;    
    case 'delete':
        $adminController = new AdminController();
        $id = $params[1];
        $adminController->deleteItem($id);
        break;  
    case'form':
        $adminController= new AdminController();
        $id = $params[1];
        $adminController->ShowForm($id);
        break;
    case 'edit':
        $adminController= new AdminController();
        $id = $params[1];
        $adminController->Edit($id);
        break;
    default:
        echo('404 Page not found');
        break;
}