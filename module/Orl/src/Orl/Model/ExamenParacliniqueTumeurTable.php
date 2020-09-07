<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class ExamenParacliniqueTumeurTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getExamenParacliniqueTumeur($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addExamenParacliniqueTumeur($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'echographie_parotidienne' => $data->echographie_parotidienne,
				'citoponction' => $data->citoponction,
				'autres_examen_para' => $data->autres_examen_para,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteExamenParacliniqueTumeur($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}