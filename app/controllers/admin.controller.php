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
        $this->view = new AdminView($this->helper->checkLoggedIn());
        
    }
    function deleteItem($id){
        $this->model->deleteItemById($id);
        header("Location: " . BASE_URL . 'adminlist');
    }
    function deleteCat($id){
        $this->model->deleteCatById($id);
        header("Location: " . BASE_URL . 'adminlist');
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
        header("Location: " . BASE_URL . 'adminlist');
        }
    }
    public function AddNewCat(){
        //Metodo encargado de editar x producto
        if((isset ($_POST))&&(!empty ($_POST))){
        $description=$_POST['description'];
        $type=$_POST['type'];
        $this->model->InsertCat($type, $description);
        header("Location: " . BASE_URL . 'adminlist');
        }
    }
    public function EditCat($id){
        //Metodo encargado de editar x producto
        if((isset ($_POST))&&(!empty ($_POST))){
        $description=$_POST['description'];
        $type=$_POST['type'];
        $this->model->editCat($type, $description, $id);
        header("Location: " . BASE_URL . 'adminlist');
        }
    }
    public function ShowForm($id){
        $listModel= new ListModel();
        $categories = $listModel->getCategories();
        $this->view->ShowForm($id, $categories);
    }
    public function ShowFormAdd(){
        $this->view->ShowFormAdd();
    }
    
    public function ShowFormAddCat(){
        $this->view->ShowFormAddCat();
    }
    public function ShowFormCat($id){
        $this->view->ShowFormCat($id);
    }
    public function AddNewItem(){
        if((isset ($_POST))&&(!empty ($_POST))){
            $product=$_POST['product'];
            $type=$_POST['type'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $img_url=$_POST['imgUrl'];
            $this->model->InsertItem($product, $type, $price, $description, $img_url);
            header("Location: " . BASE_URL . 'adminlist');
        }
    }
    
         
}