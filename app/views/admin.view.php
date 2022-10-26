<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class AdminView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function ShowForm($id, $categories)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('formEditRow.tpl');
    }

    function ShowFormCat($id)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->display('formEditCat.tpl');
    }

    function ShowFormAdd($categories)
    {
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('formAdd.tpl');
    }

    function ShowFormAddCat()
    {
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->display('formAddCat.tpl');
    }
}
