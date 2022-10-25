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
    
    public function ShowLighters(){
        $lighters = $this->model->getAllItems();
        $categories = $this->model->getCategories();
        $this-> view->ShowList($lighters, $categories);
        // $this->view->ShowItemsByCategory($categories);
    }
    
    public function ShowLightersAdmin(){
        $lighters = $this->model->getAllItems();
        $categories = $this->model->getCategories();
        $this-> view->ShowListAdmin($lighters, $categories);
        // $this->view->ShowItemsByCategory($categories);
    }

    public function ShowLightersByCategory($category){
        $lightersBC = $this->model->sortByCategory($category);
        $categories = $this->model->getCategories();
        $this->view->ShowList($lightersBC, $categories);
        
    }

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
    
    // function GetShowLighters(){
    //     $lighters = $this->model->getAllItems();
    //     $this->view->ShowList($lighters);
    // }
      
    
         
    }
?>