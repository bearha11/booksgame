<?php
<<<<<<< HEAD
 
class TestController extends Zend_Controller_Action
{
 
    public function init()
    {
         
    }
 
    function wiwiAction()
    {
        //echo 'action wiwi VIDE';
        $utilisateurTable=new Application_Model_DbTable_utilisateur();
        $select= $utilisateurTable->select()
        ->from(array('p'=>'utilisateur'),array('somme'=>'COUNT(*)'));
        $result = $utilisateurTable->fetchAll($select)->current();
        $this->view->total_utilisateur=$result['somme'];
    }
    
}
?>
=======

class utilisateursController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function utilisateursAction()
    {
        // action body
    }


}
>>>>>>> f5fe1065335f49edb45509d2127c00fa932424c0

