<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class ItemView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function ShowItem($lighter) {
        // asigno variables al tpl smarty
        $this->smarty->assign('base_href', BASE_URL);
        $this->smarty->assign('lighter', $lighter); 
        $this->smarty->display('item.tpl');
    }
}
