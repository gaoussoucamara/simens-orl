<?php

namespace Orl\Model;


class ExamenCliniquelso
{
	public $id_exaamenLso;
	public $id_cons;
	public $peau_cervicoCan;
	public $otoscopieCan;
	public $cavite_bucaleCan;
	public $fosses_nasalesCan;
	public $liCan;
	public $reste_examen_cliniqueLso;
	public $aspect_cancer;
	public $zones_atteintes;
	public $margelle;
	public $larynx;
	public $hypopharynx;
	public $vallecule;
	public $mur_pharyngo_larynge;
	public $oedeme;
	public $superficiel_serpigineux;
	public $bien_limite;
	public $keratosique;
	public $cavumlso;
	public $oesophage_cervical;
	public $aires_ganglionnaires_cancer;
	public $tdm_rocherslso;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;



	public function exchangeArray($data)
	{
		$this->id_exaamenLso = (!empty($data['id_exaamenLso'])) ? $data['id_exaamenLso'] : null;
		$this->id_cons = (!empty($data['id_cons'])) ? $data['id_cons'] : null;
		$this->peau_cervicoCan = (!empty($data['peau_cervicoCan'])) ? $data['peau_cervicoCan'] : null;
		$this->otoscopieCan = (!empty($data['otoscopieCan'])) ? $data['otoscopieCan'] : null;
		$this->cavite_bucaleCan = (!empty($data['cavite_bucaleCan'])) ? $data['cavite_bucaleCan'] : null;
		$this->fosses_nasalesCan = (!empty($data['fosses_nasalesCan'])) ? $data['fosses_nasalesCan'] : null;
		$this->liCan = (!empty($data['liCan'])) ? $data['liCan'] : null;
		$this->reste_examen_cliniqueLso = (!empty($data['reste_examen_cliniqueLso'])) ? $data['reste_examen_cliniqueLso'] : null;
		$this->aspect_cancer = (!empty($data['aspect_cancer'])) ? $data['aspect_cancer'] : null;
		$this->zones_atteintes = (!empty($data['zones_atteintes'])) ? $data['zones_atteintes'] : null;
		$this->margelle = (!empty($data['margelle'])) ? $data['margelle'] : null;
		$this->larynx = (!empty($data['larynx'])) ? $data['larynx'] : null;
		$this->hypopharynx = (!empty($data['hypopharynx'])) ? $data['hypopharynx'] : null;
		$this->vallecule = (!empty($data['vallecule'])) ? $data['vallecule'] : null;
		$this->mur_pharyngo_larynge = (!empty($data['mur_pharyngo_larynge'])) ? $data['mur_pharyngo_larynge'] : null;
		$this->oedeme = (!empty($data['oedeme'])) ? $data['oedeme'] : null;
		$this->superficiel_serpigineux = (!empty($data['superficiel_serpigineux'])) ? $data['superficiel_serpigineux'] : null;
		$this->bien_limite = (!empty($data['bien_limite'])) ? $data['bien_limite'] : null;
		$this->keratosique = (!empty($data['keratosique'])) ? $data['keratosique'] : null;
		$this->cavumlso = (!empty($data['cavumlso'])) ? $data['cavumlso'] : null;
		$this->oesophage_cervical = (!empty($data['oesophage_cervical'])) ? $data['oesophage_cervical'] : null;
		$this->aires_ganglionnaires_cancer = (!empty($data['aires_ganglionnaires_cancer'])) ? $data['aires_ganglionnaires_cancer'] : null;
		$this->tdm_rocherslso = (!empty($data['tdm_rocherslso'])) ? $data['tdm_rocherslso'] : null;
		$this->date_modification = (!empty($data['date_modification'])) ? $data['date_modification'] : null;
		$this->date_enregistrement = (!empty($data['date_enregistrement'])) ? $data['date_enregistrement'] : null;
		$this->id_employe_e = (!empty($data['id_employe_e'])) ? $data['id_employe_e'] : null;
	}
}
