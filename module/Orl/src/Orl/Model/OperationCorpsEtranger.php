<?php
namespace Orl\Model;


class OperationCorpsEtranger {
	public $id_operation_corps;
	public $id_cons;
	public $suites_simplece;
	public $suite_compliqueesce;
	public $precision_suite;
	public $cro_ce;
	public $date_enregistrement;
	public $date_modification;
	public $id_employe_e;


	
	public function exchangeArray($data) {
		$this->id_operation_corps = (! empty ( $data ['id_operation_corps'] )) ? $data ['id_operation_corps'] : null;
		$this->id_cons = (! empty ( $data ['id_cons'] )) ? $data ['id_cons'] : null;
		$this->suites_simplece = (! empty ( $data ['suites_simplece'] )) ? $data ['suites_simplece'] : null;
		$this->suite_compliqueesce = (! empty ( $data ['suite_compliqueesce'] )) ? $data ['suite_compliqueesce'] : null;
		$this->precision_suite = (! empty ( $data ['precision_suite'] )) ? $data ['precision_suite'] : null;
		$this->cro_ce = (! empty ( $data ['cro_ce'] )) ? $data ['cro_ce'] : null;
		$this->date_modification = (! empty ( $data ['date_modification'] )) ? $data ['date_modification'] : null;
		$this->date_enregistrement = (! empty ( $data ['date_enregistrement'] )) ? $data ['date_enregistrement'] : null;
		$this->id_employe_e = (! empty ( $data ['id_employe_e'] )) ? $data ['id_employe_e'] : null;
		
	}
}