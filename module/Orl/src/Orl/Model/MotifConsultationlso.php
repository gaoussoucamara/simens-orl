<?php
namespace Orl\Model;


class MotifConsultationlso {
	public $id_motifLso;
	public $id_cons;
	public $malade;
	public $date_apparitionC;
	public $signes_fonctionnels_cancer;
	public $adenopathie_cancer;
	public $tracheotomie_cancer;
	public $decouverte_examen;
	public $autres_motifLso;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->	id_motifLso = (! empty ( $data ['id_motifLso'] )) ? $data ['id_motifLso'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->malade = (! empty ( $data ['malade'] )) ? $data ['malade'] : null;
		$this->date_apparitionC = (! empty ( $data ['date_apparitionC'] )) ? $data ['date_apparitionC'] : null;
		$this->signes_fonctionnels_cancer = (! empty ( $data ['signes_fonctionnels_cancer'] )) ? $data ['signes_fonctionnels_cancer'] : null;
		$this->adenopathie_cancer = (! empty ( $data ['adenopathie_cancer'] )) ? $data ['adenopathie_cancer'] : null;
		$this->tracheotomie_cancer = (! empty ( $data ['tracheotomie_cancer'] )) ? $data ['tracheotomie_cancer'] : null;
		$this->decouverte_examen = (! empty ( $data ['decouverte_examen'] )) ? $data ['decouverte_examen'] : null;
		$this->autres_motifLso = (! empty ( $data ['autres_motifLso'] )) ? $data ['autres_motifLso'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}