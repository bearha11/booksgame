<?php
 
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

