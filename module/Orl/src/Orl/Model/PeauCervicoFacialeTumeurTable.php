<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class PeauCervicoFacialeTumeurTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getPeauCervicoFacialeTumeur($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addPeauCervicoFacialeTumeur($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'peau_cervico_faciale' => $data->peau_cervico_faciale,
				'autres_peau' => $data->autres_peau,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deletePeauCervicoFacialeTumeur($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}