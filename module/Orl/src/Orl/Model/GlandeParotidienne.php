<?php
namespace Orl\Model;


class GlandeParotidienne {
	public $id_glande_paro;
	public $id_cons;
	public $siege_parotidienne;
	public $consistance_paro;
	public $surface_paro;
	public $indolence_paro;
	public $taille_mensuration;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_glande_paro = (! empty ( $data ['id_glande_paro'] )) ? $data ['id_glande_paro'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->siege_parotidienne = (! empty ( $data ['siege_parotidienne'] )) ? $data ['siege_parotidienne'] : null;
		$this->consistance_paro = (! empty ( $data ['consistance_paro'] )) ? $data ['consistance_paro'] : null;
		$this->surface_paro = (! empty ( $data ['surface_paro'] )) ? $data ['surface_paro'] : null;
		$this->indolence_paro = (! empty ( $data ['indolence_paro'] )) ? $data ['indolence_paro'] : null;
		$this->taille_mensuration = (! empty ( $data ['taille_mensuration'] )) ? $data ['taille_mensuration'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}