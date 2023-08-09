<?php
namespace Hospitalisation\Model;

class ResultatVisitePreanesthesiqueHo{
	public $id;
	public $numeroVpa;
	public $typeIntervention;
	public $dateVpa;
	public $aptitude;
	public $idVpa;
	public $id_personne;

	public function exchangeArray($data) {
		$this->id = (! empty ( $data ['id'] )) ? $data ['id'] : null;
		$this->numeroVpa = (! empty ( $data ['numeroVpa'] )) ? $data ['numeroVpa'] : null;
		$this->typeIntervention = (! empty ( $data ['typeIntervention'] )) ? $data ['typeIntervention'] : null;
		$this->dateVpa = (! empty ( $data ['dateVpa'] )) ? $data ['dateVpa'] : null;
		$this->aptitude = (! empty ( $data ['aptitude'] )) ? $data ['aptitude'] : null;
		$this->idVpa = (! empty ( $data ['idVpa'] )) ? $data ['idVpa'] : null;
		$this->id_personne = (! empty ( $data ['id_personne'] )) ? $data ['id_personne'] : null;
	}
}