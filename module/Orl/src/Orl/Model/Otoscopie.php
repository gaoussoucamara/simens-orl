<?php
namespace Orl\Model;


class Otoscopie {
	public $id_otoscopie;
	public $id_cons;
	public $otoscopie;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_otoscopie = (! empty ( $data ['id_otoscopie'] )) ? $data ['id_otoscopie'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->otoscopie = (! empty ( $data ['otoscopie'] )) ? $data ['otoscopie'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}