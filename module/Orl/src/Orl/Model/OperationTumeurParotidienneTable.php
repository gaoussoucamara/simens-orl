<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class OperationTumeurParotidienneTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getOperationTumeurParotidienne($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addOperationTumeurParotidienne($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'incidents_paro' => $data->incidents_paro,
				'cro_paro' => $data->cro_paro,
				'date_sortie' => $data->date_sortie,
				'suites_simples' => $data->suites_simples,
				'suites_compliquees' => $data->suites_compliquees,
				'groupeItum' => $data->groupeItum,
				'groupeIIatum' => $data->groupeIIatum,
				'groupeIIbtum' => $data->groupeIIbtum,
				'groupeIIItum' => $data->groupeIIItum,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteOperationTumeurParotidienne($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}