<?php
namespace Orl\Model;


class DonneesExamenClinique {
	public $id_cons;
	public $examen_clinique;
	public $reste_examen_cliniqueFo;
	public $examen_para_clinique;
	public $peau_cervicoFo;
	public $otoscopieFo;
	public $cavite_bucaleFo;
	public $fosses_nasalesFo;
	public $liFo;
	public $cat_fo;
	public $tdm_rochers;
	
	public function exchangeArray($data) {
		$this->id_examen_clinique = (! empty ( $data ['id_examen_clinique'] )) ? $data ['id_examen_clinique'] : null;
		 $this->examen_clinique = (! empty ( $data ['examen_clinique'] )) ? $data ['examen_clinique'] : null;
		 $this->reste_examen_cliniqueFo = (! empty ( $data ['reste_examen_cliniqueFo'] )) ? $data ['reste_examen_cliniqueFo'] : null;
		 $this->examen_para_clinique = (! empty ( $data ['examen_para_clinique'] )) ? $data ['examen_para_clinique'] : null;
		 $this->peau_cervicoFo = (! empty ( $data ['peau_cervicoFo'] )) ? $data ['peau_cervicoFo'] : null;
		 $this->otoscopieFo = (! empty ( $data ['otoscopieFo'] )) ? $data ['otoscopieFo'] : null;
		 $this->cavite_bucaleFo = (! empty ( $data ['cavite_bucaleFo'] )) ? $data ['cavite_bucaleFo'] : null;
		 $this->fosses_nasalesFo = (! empty ( $data ['fosses_nasalesFo'] )) ? $data ['fosses_nasalesFo'] : null;
		 $this->liFo = (! empty ( $data ['liFo'] )) ? $data ['liFo'] : null;
		 $this->cat_fo = (! empty ( $data ['cat_fo'] )) ? $data ['cat_fo'] : null;
		 $this->tdm_rochers = (! empty ( $data ['tdm_rochers'] )) ? $data ['tdm_rochers'] : null;
}
}