<?php

namespace Orl\Model;


class ExamenCliniquece
{
	public $id_examen_clinikCE;
	public $id_cons;
	public $duree_sejour;
	public $oreille;
	public $autre_localisation;
	public $type_corps_etranger;
	public $nature_corps_etranger;
	public $divers_corps;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;



	public function exchangeArray($data)
	{
		$this->id_examen_clinikCE = (!empty($data['id_examen_clinikCE'])) ? $data['id_examen_clinikCE'] : null;
		$this->id_cons = (!empty($data['id_cons'])) ? $data['id_cons'] : null;
		$this->duree_sejour = (!empty($data['duree_sejour'])) ? $data['duree_sejour'] : null;
		$this->oreille = (!empty($data['oreille'])) ? $data['oreille'] : null;
		$this->autre_localisation = (!empty($data['autre_localisation'])) ? $data['autre_localisation'] : null;
		$this->type_corps_etranger = (!empty($data['type_corps_etranger'])) ? $data['type_corps_etranger'] : null;
		$this->nature_corps_etranger = (!empty($data['nature_corps_etranger'])) ? $data['nature_corps_etranger'] : null;
		$this->divers_corps = (!empty($data['divers_corps'])) ? $data['divers_corps'] : null;
		$this->date_modification = (!empty($data['date_modification'])) ? $data['date_modification'] : null;
		$this->date_enregistrement = (!empty($data['date_enregistrement'])) ? $data['date_enregistrement'] : null;
		$this->id_employe_e = (!empty($data['id_employe_e'])) ? $data['id_employe_e'] : null;
	}
}
