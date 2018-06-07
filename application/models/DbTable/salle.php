<?php
/**
 * Classe ORM qui représente la table 'flux_doc'.
 *
 * @author Samuel Szoniecky
 * @category   Zend
 * @package Zend\DbTable\Flux
 * @license https://creativecommons.org/licenses/by-sa/2.0/fr/ CC BY-SA 2.0 FR
 * @version  $Id:$
 */
class Model_DbTable_salle extends Zend_Db_Table_Abstract
{
    
    /**
     * Nom de la table.
     */
    protected $_name = 'salle';
    
    /**
     * Clef primaire de la table.
     */
    protected $_primary = 'id_salle';
	protected $_dependentTables = array(
		'Model_DbTable_Flux_Rapport'
		);
		
    /**
     * Vérifie si une entrée flux_doc existe.
     *
     * @param array $data
     *
     * @return integer
     */
   
    
    /**
     * Récupère toutes les entrées flux_doc avec certains critères
     * de tri, intervalles
     *
     * @return array
     */
    public function getAll($order=null, $limit=0, $from=0)
    {
        $query = $this->select()
                    ->from( array("salle" => "salle") );
                    
        if($order != null)
        {
            $query->order($order);
        }
        if($limit != 0)
        {
            $query->limit($limit, $from);
        }
        return $this->fetchAll($query)->toArray();
    }
    
    
}