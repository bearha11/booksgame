<?php
class SalleController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function salleAction()
    {
        // action body
        $dbD = new Model_DbTable_salle();
        $arr = $dbD->getAll();
        $this->view->result = $arr;
    }
    public function ecrireAction()
    {
        $dbD = new Model_DbTable_salle();
        $dbD->ajouter(array("theme_salle"=>$this->_getParam('theme_salle', 'rien')));
    }
    
    
}
