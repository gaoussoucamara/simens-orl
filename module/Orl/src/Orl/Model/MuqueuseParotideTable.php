<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class MuqueuseParotideTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getMuqueuseParotide($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addMuqueuseParotide($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'cavite_bucale' => $data->cavite_bucale,
				'oropharynx' => $data->oropharynx,
				'fosses_nasales' => $data->fosses_nasales,
				'li' => $data->li,
				'aires_ganglionnaires' => $data->aires_ganglionnaires,
				'paires_cranienne' => $data->paires_cranienne,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteMuqueuseParotide($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}