<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class GlandeParotidienneTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getGlandeParotidienne($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addGlandeParotidienne($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'siege_parotidienne' => $data->siege_parotidienne,
				'consistance_paro' => $data->consistance_paro,
				'surface_paro' => $data->surface_paro,
				'indolence_paro' => $data->indolence_paro,
				'taille_mensuration' => $data->taille_mensuration,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteGlandeParotidienne($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}