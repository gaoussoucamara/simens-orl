<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class OperationCorpsEtrangerTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getOperationCorpsEtranger($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addOperationCorpsEtranger($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'suites_simplece' => $data->suites_simplece,
				'suite_compliqueesce' => $data->suite_compliqueesce,
				'precision_suite' => $data->precision_suite,
				'cro_ce' => $data->cro_ce,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteOperationCorpsEtranger($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}