<?php 
require_once 'app/models/item.model.php';
require_once 'app/views/item.view.php';
require_once 'app/helpers/auth.helper.php';
    
class ItemController {
    private $model;
    private $view;  
    private $helper;
     
    public function __construct(){
        $this->helper = new AuthHelper();  
        $this->model = new ItemModel();
        $this->view = new ItemView($this->helper->getUser());
        
     }  
    // //mostrar la bse de datos de los libros osea los productos 
    // public function ShowLighter($id){
    //     $lighters = $this->model->GetItemById($id);
    //     $this-> view->ShowList($lighters);
    // }   
    // function GetLighter($id){
    //     return $this->model->GetLighter($id);
    // }   

    //  function ShowLighters($lighters){
    //   $this->view->Showlist($lighters);
    //   }
    //   function ShowForm($id){
    //      $this->view->ShowForm($id);
    //   }
    
    function GetShowLighter($id){
        $lighter = $this->model->GetItemById($id);
        $lighters = $this->model->getAllItems();
        $this->view->ShowItem($lighter, $lighters);
    }

      
    // public function Edit($id){
    //     //Metodo encargado de editar x producto
    //     if((isset ($_POST))&&(!empty ($_POST))){
    //     $product=$_POST['product'];
    //     $type=$_POST['type'];
    //     $price=$_POST['price'];
    //     $description=$_POST['description'];
    //     $img_url=$_POST['imgUrl'];
    //     $this->model->editItem($product, $type, $price, $description, $img_url, $id);
    //     header("Location: " . BASE_URL . 'item');
    //     }
    // }
         
    }
?>