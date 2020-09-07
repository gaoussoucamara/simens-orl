<?php
namespace Orl\Model;


class ExamenParacliniquece {
	public $id_exam_paraCE;
	public $id_cons;
	public $mode_extraction;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_exam_paraCE = (! empty ( $data ['id_exam_paraCE'] )) ? $data ['id_exam_paraCE'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->mode_extraction = (! empty ( $data ['mode_extraction'] )) ? $data ['mode_extraction'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}