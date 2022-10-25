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
    
    function GetShowLighter($id){
        $lighter = $this->model->GetItemById($id);
        $lighters = $this->model->getAllItems();
        $this->view->ShowItem($lighter, $lighters);
    }
         
    }
?>