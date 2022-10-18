<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class AdminView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function ShowForm($id) {
        // asigno variables al tpl smarty
        $this->smarty->assign('id', $id); 

        // mostrar el tpl
        $this->smarty->display('formEditRow.tpl');
    }
}
