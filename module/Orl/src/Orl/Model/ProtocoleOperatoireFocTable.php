<?php
namespace Orl\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Sql;
use Facturation\View\Helper\DateHelper;


class ProtocoleOperatoireFocTable {

	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getProtocoleOperatoireFoc($id_cons){
		$rowset = $this->tableGateway->select ( array (
				'id_cons' => $id_cons
		) );
		$rowset  = $rowset->current();
		if (! $rowset) {
			return null;
		}
		return get_object_vars($rowset);
	}
	
	public function addProtocoleOperatoireFoc($data, $id_cons, $id_employe_e){
		$today = new \DateTime ();
		$date_enregistrement = $today->format ( 'Y-m-d H:i:s' );
		$donnees = array(
				'id_cons' => $id_cons,
				'anesthesiste' => $data->anesthesiste,
				'indication' => $data->indication,
				'protocole_operatoire' => $data->protocole_operatoire,
				'soins_post_operatoire' => $data->soins_post_operatoire,
				'surveillance' => $data->surveillance,
				'date_enregistrement' => $date_enregistrement,
				'id_employe_e' => $id_employe_e,
		);
		
		$this->tableGateway->insert( $donnees );
	}	
	
	public function deleteProtocoleOperatoireFoc($id){
		$this->tableGateway->delete(array('id_cons'=>$id));
	}
}