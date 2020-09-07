<?php
namespace Orl\Model;


class MotifConsultationTumeur {
	public $id_motif_cons_tumeur;
	public $id_cons;
	public $tumefaction_parotidienne;
	public $paralysie_faciale_peripherique;
	public $adenopathie;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_motif_cons_tumeur = (! empty ( $data ['id_motif_cons_tumeur'] )) ? $data ['id_motif_cons_tumeur'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->tumefaction_parotidienne = (! empty ( $data ['tumefaction_parotidienne'] )) ? $data ['tumefaction_parotidienne'] : null;
		$this->paralysie_faciale_peripherique = (! empty ( $data ['paralysie_faciale_peripherique'] )) ? $data ['paralysie_faciale_peripherique'] : null;
		$this->adenopathie = (! empty ( $data ['adenopathie'] )) ? $data ['adenopathie'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}