<?php 
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
class ListView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function getUser($user){
        $this->smarty->assign('user', $user);
    }
    function ShowList($lighters){
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('lighters', $lighters); 
        $this->smarty->display('list.tpl');
    }
    function ShowItem(){
        $this->smarty->assign('basehref', BASE_URL);
        $this ->smarty->display('listPage.tpl');
    }
    function ShowForm($id){ 
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('id',$id);
        $this ->smarty->display('adminform.tpl');    
    }
}


?>