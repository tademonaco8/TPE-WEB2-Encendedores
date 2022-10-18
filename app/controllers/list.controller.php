<?php 
require_once 'app/models/list.model.php';
require_once 'app/views/list.view.php';
require_once 'app/helpers/auth.helper.php';
    
class ListController {
    private $model;
    private $view;  
    private $helper;
     
    public function __construct(){
        $this->helper = new AuthHelper();  
        $this->model = new ListModel();
        $this->view = new ListView($this->helper->getUser());
    }  
     //mostrar la bse de datos de los libros osea los productos 
    public function ShowLighters(){
        $lighters = $this->model->getAllItems();
        $this-> view->ShowList($lighters);
    }
    //añadir libros al carrito    
    function GetLighter($id){
        $lighter = $this->model->GetLighter($id);
        return $lighter;
    }   

    //  function ShowLighters($lighters){
    //   $this->view->Showlist($lighters);
    //   }
    //   function ShowForm($id){
    //      $this->view->ShowForm($id);
    //   }
    
    function GetShowLighters(){
        $lighters = $this->model->getAllItems();
        $this->view->ShowList($lighters);
    }
      
    
         
    }
?>