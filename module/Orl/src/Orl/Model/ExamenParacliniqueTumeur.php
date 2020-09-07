<?php
namespace Orl\Model;


class ExamenParacliniqueTumeur {
	public $id_examen_para_clinique;
	public $id_cons;
	public $echographie_parotidienne;
	public $citoponction;
	public $autres_examen_para;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->	id_examen_para_clinique = (! empty ( $data ['id_examen_para_clinique'] )) ? $data ['id_examen_para_clinique'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->echographie_parotidienne = (! empty ( $data ['echographie_parotidienne'] )) ? $data ['echographie_parotidienne'] : null;
		$this->citoponction = (! empty ( $data ['citoponction'] )) ? $data ['citoponction'] : null;
		$this->autres_examen_para = (! empty ( $data ['autres_examen_para'] )) ? $data ['autres_examen_para'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}