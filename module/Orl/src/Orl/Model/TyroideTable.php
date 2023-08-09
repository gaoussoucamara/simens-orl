<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Sql;
use Facturation\View\Helper\DateHelper;


class TyroideTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getTyroide($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addTyroide($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				//'hypertrophie_globale' => $data->hypertrophie_globale,
				'hypertrophie_localise' => $data->hypertrophie_localise,
				'hypertrophie_nodulaire' => $data->hypertrophie_nodulaire,
				'hypertrophie_sensibilite' => $data->hypertrophie_sensibilite,
				'consistance' => $data->consistance,
				'mobilite_transversale' => $data->mobilite_transversale,
				'taille_tyroide' => $data->taille_tyroide,
				//'aires_ganglionnaires' => $data->aires_ganglionnaires,
				'laryngoscopie_indirecte' => $data->laryngoscopie_indirecte,	
				'examens_autres_appareils' => $data->examens_autres_appareils,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		//var_dump($donnees); exit();
		$this->tableGateway->insert( $donnees );
			
	}
	public function deleteTyroide($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}