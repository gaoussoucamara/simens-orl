<?php
namespace Orl\Model;


class ResteExamenCliniquelso {
	public $id_resultat_examenLso;
	public $id_cons;
	public $tdm_cervico_thoracique;
	public $tdm_sinus_face;
	public $autres_result_exam;
	public $avis_rcp;
	public $cro_lso;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_resultat_examenLso = (! empty ( $data ['id_resultat_examenLso'] )) ? $data ['id_resultat_examenLso'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->tdm_cervico_thoracique = (! empty ( $data ['tdm_cervico_thoracique'] )) ? $data ['tdm_cervico_thoracique'] : null;
		$this->tdm_sinus_face = (! empty ( $data ['tdm_sinus_face'] )) ? $data ['tdm_sinus_face'] : null;
		$this->autres_result_exam = (! empty ( $data ['autres_result_exam'] )) ? $data ['autres_result_exam'] : null;
		$this->avis_rcp = (! empty ( $data ['avis_rcp'] )) ? $data ['avis_rcp'] : null;
		$this->cro_lso = (! empty ( $data ['cro_lso'] )) ? $data ['cro_lso'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}