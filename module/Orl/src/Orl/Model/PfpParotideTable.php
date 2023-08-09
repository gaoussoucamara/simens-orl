<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class PfpParotideTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getPfpParotide($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addPfpParotide($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				//'pfp' => $data->pfp,
				'paires_cranienne' => $data->paires_cranienne,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		//var_dump($donnees); exit();
		$this->tableGateway->insert( $donnees );
			
	}
	public function deletePfpParotide($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}