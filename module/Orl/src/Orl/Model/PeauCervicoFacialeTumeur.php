<?php
namespace Orl\Model;


class PeauCervicoFacialeTumeur {
	public $id_pCFT;
	public $id_cons;
	public $peau_cervico_faciale;
	public $autres_peau;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_pCFT = (! empty ( $data ['id_pCFT'] )) ? $data ['id_pCFT'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->peau_cervico_faciale = (! empty ( $data ['peau_cervico_faciale'] )) ? $data ['peau_cervico_faciale'] : null;
		$this->autres_peau = (! empty ( $data ['autres_peau'] )) ? $data ['autres_peau'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}