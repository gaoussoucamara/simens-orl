<?php
namespace Orl\Model;


class OperationTumeurParotidienne {
	public $id_operation_tumeur;
	public $id_cons;
	public $incidents_paro;
	public $cro_paro;
	public $date_sortie;
	public $suites_simples;
	public $suites_compliquees;
	public $groupeItum;
	public $groupeIIatum;
	public $groupeIIbtum;
	public $groupeIIItum;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->	id_operation_tumeur = (! empty ( $data ['id_operation_tumeur'] )) ? $data ['id_operation_tumeur'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->incidents_paro = (! empty ( $data ['incidents_paro'] )) ? $data ['incidents_paro'] : null;
		$this->	cro_paro = (! empty ( $data ['cro_paro'] )) ? $data ['cro_paro'] : null;
		$this->date_sortie = (! empty ( $data ['date_sortie'] )) ? $data ['date_sortie'] : null;
		$this->suites_simples = (! empty ( $data ['suites_simples'] )) ? $data ['suites_simples'] : null;
		$this->suites_compliquees = (! empty ( $data ['suites_compliquees'] )) ? $data ['suites_compliquees'] : null;
		$this->groupeItum = (! empty ( $data ['groupeItum'] )) ? $data ['groupeItum'] : null;
		$this->groupeIIatum = (! empty ( $data ['groupeIIatum'] )) ? $data ['groupeIIatum'] : null;
		$this->groupeIIbtum = (! empty ( $data ['groupeIIbtum'] )) ? $data ['groupeIIbtum'] : null;
		$this->groupeIIItum = (! empty ( $data ['groupeIIItum'] )) ? $data ['groupeIIItum'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}