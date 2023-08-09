<?php
namespace Orl\Model;


class PfpParotide {
	public $id_pfp;
	public $id_cons;
	public $paires_cranienne;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_pfp = (! empty ( $data ['id_pfp'] )) ? $data ['id_pfp'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->paires_cranienne = (! empty ( $data ['paires_cranienne'] )) ? $data ['paires_cranienne'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}