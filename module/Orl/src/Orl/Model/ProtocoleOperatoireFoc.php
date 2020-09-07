<?php
namespace Orl\Model;


class ProtocoleOperatoireFoc {
	public $id_pofoc;
	public $id_cons;
	public $anesthesiste;
	public $indication;
	public $protocole_operatoire;
	public $soins_post_operatoire;
	public $surveillance;
	public $date_enregistrement;
	public $id_employe_e;
	
	
	public function exchangeArray($data) {
		$this->id_pofoc = (! empty ( $data ['id_pofoc'] )) ? $data ['id_pofoc'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->anesthesiste = (! empty ( $data ['anesthesiste'] )) ? $data ['anesthesiste'] : null;
		$this->indication = (! empty ( $data ['indication'] )) ? $data ['indication'] : null;
		$this->protocole_operatoire = (! empty ( $data ['protocole_operatoire'] )) ? $data ['protocole_operatoire'] : null;
		$this->soins_post_operatoire = (! empty ( $data ['soins_post_operatoire'] )) ? $data ['soins_post_operatoire'] : null;
		$this->surveillance = (! empty ( $data ['surveillance'] )) ? $data ['surveillance'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}