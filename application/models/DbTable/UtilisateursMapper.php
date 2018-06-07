<?php 
class Application_Model_UtilisateursMapper
{
    protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Utilisateurs');
        }
        return $this->_dbTable;
    }

    public function save(Application_Model_Utilisateurs $utilisateurs)
    {
        $data = array(
            'utilisateurs_nom'   => $utilisateurs->getUtilisateurs_nom(),
            'utilisateurs_prenom'   => $utilisateurs->getUtilisateurs_prenom(),
            'utilisateurs_photo'   => $utilisateurs->getUtilisateurs_photo(),
            'utilisateurs_adresse'   => $utilisateurs->getUtilisateurs_adresse(),
            'utilisateurs_codepostale'   => $utilisateurs->getUtilisateurs_codepostale(),
            'utilisateurs_ville'   => $utilisateurs->getUtilisateurs_ville(),
            'utilisateurs_telephone'   => $utilisateurs->getUtilisateurs_telephone(),
            'utilisateurs_date_added'   => date('Y-m-d H:i:s'),
            'utilisateurs_last_date_modified'   => date('Y-m-d H:i:s'),
        );
 
        if (null === ($utilisateurs_id = $utilisateurs->getUtilisateurs_id())) {
            unset($data['utilisateurs_id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('utilisateurs_id = ?' => $utilisateurs_id));
        }
    }
 
    public function find($utilisateurs_id, Application_Model_Utilisateurs $utilisateurs)
    {
        $result = $this->getDbTable()->find($utilisateurs_id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $utilisateurs->set_Utilisateurs_id($row->utilisateurs_id)
            ->set_Utilisateurs_nom($row->utilisateurs_nom)
            ->set_Utilisateurs_prenom($row->utilisateurs_prenom)
            ->set_Utilisateurs_photo($row->utilisateurs_photo)
            ->set_Utilisateurs_adresse($row->utilisateurs_adresse)
            ->set_Utilisateurs_codepostale($row->utilisateurs_codepostale)
            ->set_Utilisateurs_ville($row->utilisateurs_ville)
            ->set_Utilisateurs_telephone($row->utilisateurs_telephone)
            ->set_Utilisateurs_date_added($row->utilisateurs_date_added)
            ->set_Utilisateurs_last_date_modified($row->utilisateurs_last_date_modified);
    }

    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Utilisateurs();
            $entry->set_Utilisateurs_id($row->utilisateurs_id)
            ->set_Utilisateurs_nom($row->utilisateurs_nom)
            ->set_Utilisateurs_prenom($row->utilisateurs_prenom)
            ->set_Utilisateurs_photo($row->utilisateurs_photo)
            ->set_Utilisateurs_adresse($row->utilisateurs_adresse)
            ->set_Utilisateurs_codepostale($row->utilisateurs_codepostale)
            ->set_Utilisateurs_ville($row->utilisateurs_ville)
            ->set_Utilisateurs_telephone($row->utilisateurs_telephone)
            ->set_Utilisateurs_date_added($row->utilisateurs_date_added)
            ->set_Utilisateurs_last_date_modified($row->utilisateurs_last_date_modified);
            $entries[] = $entry;
        }
        return $entries;
    }
}