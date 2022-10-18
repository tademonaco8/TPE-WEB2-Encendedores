<?php
require_once 'app/models/admin.model.php';
require_once 'app/views/admin.view.php';
require_once 'app/helpers/auth.helper.php';
    
class AdminController {
    private $model;
    private $view;  
    private $helper;
     
    public function __construct(){
        $this->helper = new AuthHelper();  
        $this->model = new AdminModel();
        $this->view = new AdminView($this->helper->getUser());
        
    }
    function deleteItem($id){
        $this->model->deleteItemById($id);
    }
    public function Edit($id){
        //Metodo encargado de editar x producto
        if((isset ($_POST))&&(!empty ($_POST))){
        $product=$_POST['product'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $img_url=$_POST['imgUrl'];
        $this->model->editItem($product, $type, $price, $description, $img_url, $id);
        header("Location: " . BASE_URL . 'list');
        }
    }
    public function ShowForm($id){
        $this->view->ShowForm($id);
    }
    public function AddNewItem(){
        if((isset ($_POST))&&(!empty ($_POST))){
            $product=$_POST['product'];
            $type=$_POST['type'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $img_url=$_POST['imgUrl'];
            $this->model->InsertItem($product, $type, $price, $description, $img_url);
            header("Location: " . BASE_URL . 'list');
        }
    }
    
         
}