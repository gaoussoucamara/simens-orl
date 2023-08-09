<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class MotifConsultationlsoTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getMotifConsultationlso($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addMotifConsultationlso($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'malade' => $data->malade,
				'date_apparitionC' => $data->date_apparitionC,
				'signes_fonctionnels_cancer' => $data->signes_fonctionnels_cancer,
				'adenopathie_cancer' => $data->adenopathie_cancer,
				'tracheotomie_cancer' => $data->tracheotomie_cancer,
				'decouverte_examen' => $data->decouverte_examen,
				'autres_motifLso' => $data->autres_motifLso,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		//var_dump($donnees); exit();
		$this->tableGateway->insert( $donnees );
			
	}
	public function deleteMotifConsultationlso($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}