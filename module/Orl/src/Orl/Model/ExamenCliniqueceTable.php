<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class ExamenCliniqueceTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getExamenCliniquece($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addExamenCliniquece($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'duree_sejour' => $data->duree_sejour,
				'oreille' => $data->oreille,
				'fosse_nasale' => $data->fosse_nasale,
				'pharynx_corps' => $data->pharynx_corps,
				'vri_corps' => $data->vri_corps,
				'autre_localisation' => $data->autre_localisation,
				'type_corps_etranger' => $data->type_corps_etranger,
				'nature_corps_etranger' => $data->nature_corps_etranger,
				'divers_corps' => $data->divers_corps,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteExamenCliniquece($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}