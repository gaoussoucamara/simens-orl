<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class ExamenCliniquelsoTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getExamenCliniquelso($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addExamenCliniquelso($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'peau_cervicoCan' => $data->peau_cervicoCan,
				'otoscopieCan' => $data->otoscopieCan,
				'cavite_bucaleCan' => $data->cavite_bucaleCan,
				'fosses_nasalesCan' => $data->fosses_nasalesCan,
				'liCan' => $data->liCan,
				'reste_examen_cliniqueLso' => $data->reste_examen_cliniqueLso,
				'aspect_cancer' => $data->aspect_cancer,
				'zones_atteintes' => $data->zones_atteintes,
				'margelle' => $data->margelle,
				'larynx' => $data->larynx,
				'hypopharynx' => $data->hypopharynx,
				'vallecule' => $data->vallecule,
				'mur_pharyngo_larynge' => $data->mur_pharyngo_larynge,
				'oedeme' => $data->oedeme,
				'superficiel_serpigineux' => $data->superficiel_serpigineux,
				'bien_limite' => $data->bien_limite,
				'keratosique' => $data->keratosique,
				'aires_ganglionnaires_cancer' => $data->aires_ganglionnaires_cancer,
				'tdm_rocherslso' => $data->tdm_rocherslso,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteExamenCliniquelso($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}