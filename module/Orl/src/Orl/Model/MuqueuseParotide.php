<?php
namespace Orl\Model;


class MuqueuseParotide {
	public $id_muqueuse;
	public $id_cons;
	public $cavite_bucale;
	public $oropharynx;
	public $fosses_nasales;
	public $li;
	public $aires_ganglionnaires;
	public $paires_cranienne;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_muqueuse = (! empty ( $data ['id_muqueuse'] )) ? $data ['id_muqueuse'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->cavite_bucale = (! empty ( $data ['cavite_bucale'] )) ? $data ['cavite_bucale'] : null;
		$this->oropharynx = (! empty ( $data ['oropharynx'] )) ? $data ['oropharynx'] : null;
		$this->fosses_nasales = (! empty ( $data ['fosses_nasales'] )) ? $data ['fosses_nasales'] : null;
		$this->li = (! empty ( $data ['li'] )) ? $data ['li'] : null;
		$this->aires_ganglionnaires = (! empty ( $data ['aires_ganglionnaires'] )) ? $data ['aires_ganglionnaires'] : null;
		$this->paires_cranienne = (! empty ( $data ['paires_cranienne'] )) ? $data ['paires_cranienne'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}