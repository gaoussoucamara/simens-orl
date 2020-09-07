<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;


class ResteExamenCliniquelsoTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getResteExamenCliniquelso($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addResteExamenCliniquelso($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		
		$donnees = array(
				'id_cons' => $id_cons,
				'tdm_cervico_thoracique' => $data->tdm_cervico_thoracique,
				'tdm_sinus_face' => $data->tdm_sinus_face,
				'autres_result_exam' => $data->autres_result_exam,
				'avis_rcp' => $data->avis_rcp,
				'cro_lso' => $data->cro_lso,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
		//var_dump($donnees); exit();	
	}
	public function deleteResteExamenCliniquelso($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
	

	
}