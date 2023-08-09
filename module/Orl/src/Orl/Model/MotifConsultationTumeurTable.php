<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class MotifConsultationTumeurTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getMotifConsultationTumeur($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addMotifConsultationTumeur($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'tumefaction_parotidienne' => $data->tumefaction_parotidienne,
				'paralysie_faciale_peripherique' => $data->paralysie_faciale_peripherique,
				'adenopathie' => $data->adenopathie,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteMotifConsultationTumeur($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}