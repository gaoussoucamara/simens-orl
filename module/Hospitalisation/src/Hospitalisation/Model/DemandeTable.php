<?php

namespace Hospitalisation\Model;

use Zend\Db\TableGateway\TableGateway;
use Facturation\View\Helper\DateHelper;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate\NotIn;
use Zend\Db\Sql\Predicate\In;

class DemandeTable {
	protected $tableGateway;
	protected $conversionDate;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function getDemande($idDemande)
	{
		$rowset = $this->tableGateway->select(array(
				'idDemande' => (int) $idDemande,
		));
		
		$row = $rowset->current();
		if (!$row) {
			$row = null;
		}
		return $row;
	}
	
	/**
	 * LISTE DE TOUS LES EXAMENS DEMANDES (BIOLOGIQUES ET MORPHOLOGIQUES)
	 * @param unknown $id_cons
	 * @return \Zend\Db\Adapter\Driver\ResultInterface
	 */
	public function getDemandesExamens($id_cons) 
	{
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select();
		$sQuery->from(array('d' => 'demande'))->columns(array('*'))
		->where(array('d.idCons' => $id_cons))
		->order('d.idDemande ASC');

		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
		
		return $Result;
	}
	
	
	/**
	 * LISTE DES EXAMENS MORPHOLOGIQUES DEMANDES
	 * @param $id_cons
	 */
	
	public function getDemandesExamensMorphologiques($id_cons)
	{
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select();
		$sQuery->from(array('d' => 'demande'))->columns(array('*'))
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('d.idCons' => $id_cons, 'e.idType' => 2))
		->order('d.idDemande ASC');
	
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
	
		return $Result;
	}
	
	/**
	 * LISTE DES EXAMENS BIOLOGIQUES DEMANDES
	 * @param $id_cons
	 */
	
	public function getDemandesExamensBiologiques($id_cons)
	{
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select();
		$sQuery->from(array('d' => 'demande'))->columns(array('*'))
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('d.idCons' => $id_cons, 'e.idType' => 1))
		->order('d.idDemande ASC');
	
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
	
		return $Result;
	}
	
	
	
	
	
	public function getDernierPatient($mois, $annee){
	
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns( array( '*' ))
		->where(array('MOIS'  => $mois, 'ANNEE' => $annee,))
		->order('ORDRE DESC');
	
		return $sql->prepareStatementForSqlObject($sQuery)->execute()->current();
	
	}
	
	public function numeroOrdreCinqChiffre($ordre) {
		$nbCharNum = 4 - strlen($ordre);
	
		$chaine ="";
		for ($i=1 ; $i <= $nbCharNum ; $i++){
			$chaine .= '0';
		}
		$chaine .= $ordre;
	
		return $chaine;
	}
	
	public function addPatient($donnees , $date_enregistrement , $id_employe){
		$date = new \DateTime();
		$mois = $date ->format('m');
		$annee = $date ->format('Y');
	
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->insert()
		->into('personne')
		->values( $donnees );
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$id_personne = $stat->execute()->getGeneratedValue();
	
		$dernierPatient = $this->getDernierPatient($mois, $annee);
	
		if($dernierPatient){
			$suivant = $this->numeroOrdreCinqChiffre(( (int)$dernierPatient['ORDRE'] )+1);
			$numeroDossier = $suivant.' '.$mois.''.$annee;
			$this->tableGateway->insert ( array('ID_PERSONNE' => $id_personne , 'NUMERO_DOSSIER' => $numeroDossier, 'ORDRE' => $suivant, 'MOIS' => $mois, 'ANNEE' => $annee , 'DATE_ENREGISTREMENT' => $date_enregistrement , 'ID_EMPLOYE' => $id_employe) );
		}else{
			$numeroDossier = $this->numeroOrdreCinqChiffre('1').' '.$mois.''.$annee;
			$this->tableGateway->insert ( array('ID_PERSONNE' => $id_personne , 'NUMERO_DOSSIER' => $numeroDossier, 'ORDRE' => 1, 'MOIS' => $mois, 'ANNEE' => $annee , 'DATE_ENREGISTREMENT' => $date_enregistrement , 'ID_EMPLOYE' => $id_employe) );
		}
	}
	
	
	
	
	
	
	
	
	/**
	 * Recuperer un enregistrement
	 * @param l'id de la consultation : $id_cons
	 */
	public function getDemandeWithIdcons($id_cons, $id_type) 
	{
		$db = $this->tableGateway->getAdapter();
		
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('d' => 'demande'), 'd.idCons = cons.ID_CONS' , array('*'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('d.idCons' => $id_cons, 'e.idType' => $id_type))
		->group('d.idCons');
		
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
		
		return $Result;
	}
	
	public function VerifierDemandeExamenSatisfaite($id_cons)
	{
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select();
		$sQuery->from(array('d' => 'demande'))->columns(array('*'))
		->where(array('d.idCons' => $id_cons));
			
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
		
		foreach ($Result as $ligne) {
			
			/*
			 *On cherche dans la table resultat si toutes les demandes sont satisfaites  
			 */
			$sql2 = new Sql($db);
			$sQuery2 = $sql2->select();
			$sQuery2->from(array('re' => 'resultats_examens2'))->columns(array('*'))
			->where(array('re.idDemande' => $ligne['idDemande']));
			$stat2 = $sql2->prepareStatementForSqlObject($sQuery2);
			$Result2 = $stat2->execute()->current();
			if($Result2['envoyer'] == 0) {
				return false;
			}
			
		}
	
		return true;
	}
	
	
	/**
	 * V�rifier si toutes les demandes d'examens morphologiques sont satifaites
	 */
	public function VerifierDemandeExamenMorphoSatisfaite($id_cons)
	{
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select();
		$sQuery->from(array('d' => 'demande'))->columns(array('*'))
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('d.idCons' => $id_cons, 'e.idType' => 2));
			
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
	
		foreach ($Result as $ligne) {
				
			/*
			 * On cherche dans la table resultat si toutes les demandes sont satisfaites
			 */
			$sql2 = new Sql($db);
			$sQuery2 = $sql2->select();
			$sQuery2->from(array('re' => 'resultats_examens'))->columns(array('*'))
			->where(array('re.idDemande' => $ligne['idDemande']));
			$stat2 = $sql2->prepareStatementForSqlObject($sQuery2);
			$Result2 = $stat2->execute()->current();
			if($Result2['envoyer'] == 0) {
				return false;
			}
				
		}
	
		return true;
	}
	
	
	/**
	 * V�rifier si toutes les demandes d'examens biologiques sont satifaites
	 */
	public function VerifierDemandeExamenBioSatisfaite($id_cons)
	{
		$db = $this->tableGateway->getAdapter();
		$sql = new Sql($db);
		$sQuery = $sql->select();
		$sQuery->from(array('d' => 'demande'))->columns(array('*'))
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('d.idCons' => $id_cons, 'e.idType' => 1));
			
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
	
		foreach ($Result as $ligne) {
	
			/*
			 * On cherche dans la table resultat si toutes les demandes sont satisfaites
			*/
			$sql2 = new Sql($db);
			$sQuery2 = $sql2->select();
			$sQuery2->from(array('re' => 'resultats_examens'))->columns(array('*'))
			->where(array('re.idDemande' => $ligne['idDemande']));
			$stat2 = $sql2->prepareStatementForSqlObject($sQuery2);
			$Result2 = $stat2->execute()->current();
			if($Result2['envoyer'] == 0) {
				return false;
			}
	
		}
	
		return true;
	}
	
	
	/**
	 * EXAMENS BIOLOGIQUES ,  EXAMENS BIOLOGIQUES , EXAMENS BIOLOGIQUES
	 * Recuperation de la liste des patients pour lesquels tous les examens sont deja effectues
	 */
	public function getListeExamensEffectues()
	{
	
		$db = $this->tableGateway->getAdapter();
	
		$aColumns = array('Nom','Prenom','Datenaissance','Sexe', 'dateDemande', 'medecinDemandeur' , 'id');
	
		/* Indexed column (used for fast and accurate table cardinality) */
		$sIndexColumn = "id";
	
		/*
		 * Paging
		*/
		$sLimit = array();
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit[0] = $_GET['iDisplayLength'];
			$sLimit[1] = $_GET['iDisplayStart'];
		}
	
		/*
		 * Ordering
		*/
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			$sOrder = array();
			$j = 0;
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
			{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder[$j++] = $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
								 	".$_GET['sSortDir_'.$i];
				}
			}
		}
	
		/*
		 * SQL queries
		*/
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('d' => 'demande'), 'd.idCons = cons.ID_CONS' , array('*'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('e.idType' => 1))
		->order('d.idDemande DESC')
		->group('d.idCons');
	
		/* Data set length after filtering */
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$rResultFt = $stat->execute();
		$iFilteredTotal = count($rResultFt);
	
		$rResult = $rResultFt;
	
		$output = array(
				//"sEcho" => intval($_GET['sEcho']),
				//"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
		);
	
		/*
		 * $Control pour convertir la date en fran�ais
		*/
		$Control = new DateHelper();
	
		/*
		 * ADRESSE URL RELATIF
		*/
		$baseUrl = $_SERVER['REQUEST_URI'];
		$tabURI  = explode('public', $baseUrl);
	
		/*
		 * Preparer la liste
		*/
		
		/* EXAMENS BIOLOGIQUES
		 * EXAMENS BIOLOGIQUES
		 * EXAMENS BIOLOGIQUES
		 * 
		 * Liste examens satisfaits
		 */

		/*
		 * Liste satisfaite
		 */
		$rResult2 = $stat->execute();
		foreach ( $rResult2 as $aRow )
		{
		  if($this->VerifierDemandeExamenBioSatisfaite($aRow[ 'Idcons' ]) == true ) {
			$row = array();
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				if ( $aColumns[$i] != ' ' )
				{
					/* General output */
					if ($aColumns[$i] == 'Nom'){
						$row[] = "<khass id='nomMaj'>".$aRow[ $aColumns[$i]]."</khass>";
					}
	
					else if ($aColumns[$i] == 'Datenaissance') {
						$row[] = $Control->convertDate($aRow[ $aColumns[$i] ]);
					}
					
					else if ($aColumns[$i] == 'dateDemande') {
						$row[] = $Control->convertDateTime($aRow[ $aColumns[$i] ]);
					}
	
					else if ($aColumns[$i] == 'Adresse') {
						$row[] = $this->adresseText($aRow[ $aColumns[$i] ]);
					}
	
					else if ($aColumns[$i] == 'id') {
	
						$html  ="<infoBulleVue><a href='javascript:listeExamensBio(". $aRow[ $aColumns[$i] ] .",". $aRow[ 'idDemande' ] .")'>";
						$html .="<img src='".$tabURI[0]."public/images_icons/voir2.png' title='détails'></a><infoBulleVue>";
	
						if($this->VerifierDemandeExamenBioSatisfaite($aRow[ 'Idcons' ]) == true ) {
							$html .="<infoBulleVue><a>";
							$html .="<img style='margin-left: 20%;' src='".$tabURI[0]."public/images_icons/tick_16.png' title='Terminer'></a><infoBulleVue>";
						}else {
							$html .="<a>";
							$html .="<img style='margin-left: 20%; color: white; opacity: 0.09;' src='".$tabURI[0]."public/images_icons/tick_16.png' title='Terminer'></a>";
						}
						
						
						$html .="<input id='".$aRow[ 'idDemande' ]."'  type='hidden' value='".$aRow[ 'Idcons' ]."'>";
	
						$row[] = $html;
					}
	
					else if ($aColumns[$i] == 'medecinDemandeur') {
						$row[] = $aRow[ 'PrenomMedecin' ]." ".$aRow[ 'NomMedecin' ];
					}
						
					else if ($aColumns[$i] == 'Datedemande') {
						$row[] = $Control->convertDateTime($aRow[ 'Datedemande' ]);
					}
	
					else {
						$row[] = $aRow[ $aColumns[$i] ];
					}
	
				}
			}
	
			$output['aaData'][] = $row;
		  }
		}
		return $output;
	}
	
	/**
	 * EXAMENS BIOLOGIQUES ,  EXAMENS BIOLOGIQUES , EXAMENS BIOLOGIQUES
	 * Recuperation de la liste des patients pour les demandes d'examens bio
	 */
	public function getListeDemandesExamens()
	{
	
		$db = $this->tableGateway->getAdapter();
	
		$aColumns = array('Nom','Prenom','Datenaissance','Sexe', 'dateDemande', 'medecinDemandeur' , 'id');
	
		/* Indexed column (used for fast and accurate table cardinality) */
		$sIndexColumn = "id";
	
		/*
		 * Paging
		*/
		$sLimit = array();
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit[0] = $_GET['iDisplayLength'];
			$sLimit[1] = $_GET['iDisplayStart'];
		}
	
		/*
		 * Ordering
		*/
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			$sOrder = array();
			$j = 0;
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
			{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder[$j++] = $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
								 	".$_GET['sSortDir_'.$i];
				}
			}
		}
	
		/*
		 * SQL queries
		*/
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('d' => 'demande'), 'd.idCons = cons.ID_CONS' , array('*'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('e.idType' => 1))
		->order('d.idDemande ASC')
		->group('d.idCons');
	
		/* Data set length after filtering */
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$rResultFt = $stat->execute();
		$iFilteredTotal = count($rResultFt);
	
		$rResult = $rResultFt;
	
		$output = array(
				//"sEcho" => intval($_GET['sEcho']),
				//"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
		);
	
		/*
		 * $Control pour convertir la date en fran�ais
		*/
		$Control = new DateHelper();
	
		/*
		 * ADRESSE URL RELATIF
		*/
		$baseUrl = $_SERVER['REQUEST_URI'];
		$tabURI  = explode('public', $baseUrl);
	
		/*
		 * Preparer la liste
		*/
	
		/* EXAMENS BIOLOGIQUES
		 * EXAMENS BIOLOGIQUES
		* EXAMENS BIOLOGIQUES
		*
		* Liste non encore satisfaite
		*/
		foreach ( $rResult as $aRow )
		{
			if($this->VerifierDemandeExamenBioSatisfaite($aRow[ 'Idcons' ]) == false ) {
				$row = array();
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ( $aColumns[$i] != ' ' )
					{
						/* General output */
						if ($aColumns[$i] == 'Nom'){
							$row[] = "<khass id='nomMaj'>".$aRow[ $aColumns[$i]]."</khass>";
						}
	
						else if ($aColumns[$i] == 'Datenaissance') {
							$row[] = $Control->convertDate($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'dateDemande') {
							$row[] = $Control->convertDateTime($aRow[ $aColumns[$i] ]);
						}
						
						else if ($aColumns[$i] == 'Adresse') {
							$row[] = $this->adresseText($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'id') {
	
							$html  ="<infoBulleVue><a href='javascript:listeExamensBio(". $aRow[ $aColumns[$i] ] .",". $aRow[ 'idDemande' ] .")'>";
							$html .="<img src='".$tabURI[0]."public/images_icons/voir2.png' title='détails'></a><infoBulleVue>";
	
							if($this->VerifierDemandeExamenBioSatisfaite($aRow[ 'Idcons' ]) == true ) {
								$html .="<infoBulleVue><a>";
								$html .="<img style='margin-left: 20%;' src='".$tabURI[0]."public/images_icons/tick_16.png' title='Terminer'></a><infoBulleVue>";
							}else {
								$html .="<a>";
								$html .="<img style='margin-left: 20%; color: white; opacity: 0.09;' src='".$tabURI[0]."public/images_icons/tick_16.png' ></a>";
							}
	
	
							$html .="<input id='".$aRow[ 'idDemande' ]."'  type='hidden' value='".$aRow[ 'Idcons' ]."'>";
	
							$row[] = $html;
						}
	
						else if ($aColumns[$i] == 'medecinDemandeur') {
							$row[] = $aRow[ 'PrenomMedecin' ]." ".$aRow[ 'NomMedecin' ];
						}
	
						else if ($aColumns[$i] == 'Datedemande') {
							$row[] = $Control->convertDateTime($aRow[ 'Datedemande' ]);
						}
	
						else {
							$row[] = $aRow[ $aColumns[$i] ];
						}
	
					}
				}
	
				$output['aaData'][] = $row;
			}
		}
	
		return $output;
	}
	
	
	/**
	 * EXAMENS MORPHOLOGIQUES ,  EXAMENS MORPHOLOGIQUES , EXAMENS MORPHOLOGIQUES
	 * Recuperation de la liste des patients pour les demandes d'examens
	 */
	public function getListeDemandesExamensMorpho()
	{
	
		$db = $this->tableGateway->getAdapter();
	
		$aColumns = array('Nom','Prenom','Datenaissance','Sexe', 'dateDemande', 'medecinDemandeur' , 'id');
	
		/* Indexed column (used for fast and accurate table cardinality) */
		$sIndexColumn = "id";
	
		/*
		 * Paging
		*/
		$sLimit = array();
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit[0] = $_GET['iDisplayLength'];
			$sLimit[1] = $_GET['iDisplayStart'];
		}
	
		/*
		 * Ordering
		*/
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			$sOrder = array();
			$j = 0;
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
			{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder[$j++] = $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
								 	".$_GET['sSortDir_'.$i];
				}
			}
		}
	
		/*
		 * SQL queries
		*/
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('d' => 'demande'), 'd.idCons = cons.ID_CONS' , array('*'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))

		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('e.idType' => 2))
		->order('d.idDemande ASC')
		->group('d.idCons');
	
		/* Data set length after filtering */
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$rResultFt = $stat->execute();
		$iFilteredTotal = count($rResultFt);
	
		$rResult = $rResultFt;
	
		$output = array(
				//"sEcho" => intval($_GET['sEcho']),
				//"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
		);
	
		/*
		 * $Control pour convertir la date en fran�ais
		*/
		$Control = new DateHelper();
	
		/*
		 * ADRESSE URL RELATIF
		*/
		$baseUrl = $_SERVER['REQUEST_URI'];
		$tabURI  = explode('public', $baseUrl);
	
		/*
		 * Preparer la liste
		*/
	
		foreach ( $rResult as $aRow )
		{
			if($this->VerifierDemandeExamenMorphoSatisfaite($aRow[ 'Idcons' ]) == false ) {
				$row = array();
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ( $aColumns[$i] != ' ' )
					{
						/* General output */
						if ($aColumns[$i] == 'Nom'){
							$row[] = "<khass id='nomMaj'>".$aRow[ $aColumns[$i]]."</khass>";
						}
	
						else if ($aColumns[$i] == 'Datenaissance') {
							$row[] = $Control->convertDate($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'dateDemande') {
							$row[] = $Control->convertDateTime($aRow[ $aColumns[$i] ]);
						}
						
						else if ($aColumns[$i] == 'Adresse') {
							$row[] = $this->adresseText($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'id') {
	
							$html  ="<infoBulleVue><a href='javascript:listeExamensMorpho(". $aRow[ $aColumns[$i] ] .",". $aRow[ 'idDemande' ] .")'>";
							$html .="<img src='".$tabURI[0]."public/images_icons/voir2.png' title='Détails'></a><infoBulleVue>";
	
							if($this->VerifierDemandeExamenMorphoSatisfaite($aRow[ 'Idcons' ]) == true ) {
								$html .="<infoBulleVue><a>";
								$html .="<img style='margin-left: 20%;' src='".$tabURI[0]."public/images_icons/tick_16.png' title='Terminer'></a><infoBulleVue>";
							}else {
								$html .="<a>";
								$html .="<img style='margin-left: 20%; color: white; opacity: 0.09;' src='".$tabURI[0]."public/images_icons/tick_16.png' ></a>";
							}
	
	
							$html .="<input id='".$aRow[ 'idDemande' ]."'  type='hidden' value='".$aRow[ 'Idcons' ]."'>";
	
							$row[] = $html;
						}
	
						else if ($aColumns[$i] == 'medecinDemandeur') {
							$row[] = $aRow[ 'PrenomMedecin' ]." ".$aRow[ 'NomMedecin' ];
						}
	
						else if ($aColumns[$i] == 'Datedemande') {
							$row[] = $Control->convertDateTime($aRow[ 'Datedemande' ]);
						}
	
						else {
							$row[] = $aRow[ $aColumns[$i] ];
						}
	
					}
				}
	
				$output['aaData'][] = $row;
			}
		}
	
		return $output;
	}
	
	//Réduire la chaine addresse
	function adresseText($Text){
		$chaine = $Text;
		if(strlen($Text)>36){
			$chaine = substr($Text, 0, 36);
			$nb = strrpos($chaine, ' ');
			$chaine = substr($chaine, 0, $nb);
			$chaine .=' ...';
		}
		return $chaine;
	}
	
	/**
	 * EXAMENS MORPHOLOGIQUES ,  EXAMENS MORPHOLOGIQUES , EXAMENS MORPHOLOGIQUES
	 * Recuperation de la liste des patients pour lesquels tous les examens sont deja effectues
	 */
	public function getListeExamensMorphoEffectues()
	{
	
		$db = $this->tableGateway->getAdapter();
	
		$aColumns = array('Nom','Prenom','Datenaissance','Sexe', 'dateDemande', 'medecinDemandeur' , 'id');
	
		/* Indexed column (used for fast and accurate table cardinality) */
		$sIndexColumn = "id";
	
		/*
		 * Paging
		*/
		$sLimit = array();
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit[0] = $_GET['iDisplayLength'];
			$sLimit[1] = $_GET['iDisplayStart'];
		}
	
		/*
		 * Ordering
		*/
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			$sOrder = array();
			$j = 0;
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
			{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder[$j++] = $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
								 	".$_GET['sSortDir_'.$i];
				}
			}
		}
	
		/*
		 * SQL queries
		*/
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('d' => 'demande'), 'd.idCons = cons.ID_CONS' , array('*'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		
		->join(array('e' => 'examens'), 'e.idExamen = d.idExamen', array('*'))
		->where(array('e.idType' => 2))
		->order('d.idDemande DESC')
		->group('d.idCons');
	
		/* Data set length after filtering */
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$rResultFt = $stat->execute();
		$iFilteredTotal = count($rResultFt);
	
		$rResult = $rResultFt;
	
		$output = array(
				//"sEcho" => intval($_GET['sEcho']),
				//"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
		);
	
		/*
		 * $Control pour convertir la date en fran�ais
		*/
		$Control = new DateHelper();
	
		/*
		 * ADRESSE URL RELATIF
		*/
		$baseUrl = $_SERVER['REQUEST_URI'];
		$tabURI  = explode('public', $baseUrl);
	
		/*
		 * Preparer la liste
		*/
	
		/* EXAMENS BIOLOGIQUES
		 * EXAMENS BIOLOGIQUES
		* EXAMENS BIOLOGIQUES
		*
		* Liste examens satisfaits
		*/
	
		/*
		 * Liste satisfaite
		*/
		$rResult2 = $stat->execute();
		foreach ( $rResult2 as $aRow )
		{
			if($this->VerifierDemandeExamenMorphoSatisfaite($aRow[ 'Idcons' ]) == true ) {
				$row = array();
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ( $aColumns[$i] != ' ' )
					{
						/* General output */
						if ($aColumns[$i] == 'Nom'){
							$row[] = "<khass id='nomMaj'>".$aRow[ $aColumns[$i]]."</khass>";
						}
	
						else if ($aColumns[$i] == 'Datenaissance') {
							$row[] = $Control->convertDate($aRow[ $aColumns[$i] ]);
						}
						
						else if ($aColumns[$i] == 'dateDemande') {
							$row[] = $Control->convertDateTime($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'Adresse') {
							$row[] = $this->adresseText($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'id') {
	
							$html  ="<infoBulleVue><a href='javascript:listeExamensMorpho(". $aRow[ $aColumns[$i] ] .",". $aRow[ 'idDemande' ] .")'>";
							$html .="<img src='".$tabURI[0]."public/images_icons/voir.png' title='détails'></a><infoBulleVue>";
	
							if($this->VerifierDemandeExamenMorphoSatisfaite($aRow[ 'Idcons' ]) == true ) {
								$html .="<infoBulleVue><a>";
								$html .="<img style='margin-left: 20%;' src='".$tabURI[0]."public/images_icons/tick_16.png' title='Terminer'></a><infoBulleVue>";
							}else {
								$html .="<a>";
								$html .="<img style='margin-left: 20%; color: white; opacity: 0.09;' src='".$tabURI[0]."public/images_icons/tick_16.png' title='Terminer'></a>";
							}
	
	
							$html .="<input id='".$aRow[ 'idDemande' ]."'  type='hidden' value='".$aRow[ 'Idcons' ]."'>";
	
							$row[] = $html;
						}
	
						else if ($aColumns[$i] == 'medecinDemandeur') {
							$row[] = $aRow[ 'PrenomMedecin' ]." ".$aRow[ 'NomMedecin' ];
						}
	
						else if ($aColumns[$i] == 'Datedemande') {
							$row[] = $Control->convertDateTime($aRow[ 'Datedemande' ]);
						}
	
						else {
							$row[] = $aRow[ $aColumns[$i] ];
						}
	
					}
				}
	
				$output['aaData'][] = $row;
			}
		}
		return $output;
	}
	
	/**
	 * Demande effectuee
	 */
	public function demandeEffectuee($idDemande)
	{
		$this->tableGateway->update(array('appliquer' => 1), array('idDemande' => $idDemande));
	}
	
	
	/**
	 * ANESTHESIE ,  ANESTHESIE , ANESTHESIE , ANESTHESIE , ANESTHESIE
	 * Recuperation de la liste des patients qui font l'objet d'une demande de VPA
	 */
	public function getListeDemandesVpa()
	{
	
		$db = $this->tableGateway->getAdapter();
	
		$aColumns = array('Nom','Prenom','Datenaissance','Sexe', 'Datedemande', 'medecinDemandeur' , 'id');
	
		/* Indexed column (used for fast and accurate table cardinality) */
		$sIndexColumn = "id";
	
		/*
		 * Paging
		*/
		$sLimit = array();
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit[0] = $_GET['iDisplayLength'];
			$sLimit[1] = $_GET['iDisplayStart'];
		}
	
		/*
		 * Ordering
		*/
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			$sOrder = array();
			$j = 0;
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
			{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder[$j++] = $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
								 	".$_GET['sSortDir_'.$i];
				}
			}
		}
		
		/*
		 * Liste des resultats
		 */
		$sql1 = new Sql ( $db );
		$subselect = $sql1->select ();
		$subselect->from ( array (
				'r' => 'resultat_vpa'
		) );
		$subselect->columns ( array (
				'idVpa'
		) );
		
		/*
		 * SQL queries
		*/
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		->join(array('d' => 'demande_visite_preanesthesique'), 'd.ID_CONS = cons.ID_CONS' , array('*'))
		->where(array (	new NotIn ( 'd.idVpa', $subselect ), 'cons.ARCHIVAGE' => '0'))
		->order('d.idVpa ASC');
	
		/* Data set length after filtering */
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$rResultFt = $stat->execute();
		$iFilteredTotal = count($rResultFt);
	
		$rResult = $rResultFt;
	
		
//		var_dump($rResultFt); exit();
		
		$output = array(
				//"sEcho" => intval($_GET['sEcho']),
				//"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
		);
	
		/*
		 * $Control pour convertir la date en fran�ais
		*/
		$Control = new DateHelper();
	
		/*
		 * ADRESSE URL RELATIF
		*/
		$baseUrl = $_SERVER['REQUEST_URI'];
		$tabURI  = explode('public', $baseUrl);
	
		/*
		 * Preparer la liste
		*/
	
		/* EXAMENS BIOLOGIQUES
		 * EXAMENS BIOLOGIQUES
		* EXAMENS BIOLOGIQUES
		*
		* Liste examens satisfaits
		*/
	
		$rResult2 = $stat->execute();
		foreach ( $rResult2 as $aRow )
		{
				$row = array();
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ( $aColumns[$i] != ' ' )
					{
						/* General output */
						if ($aColumns[$i] == 'Nom'){
							$row[] = "<khass id='nomMaj'>".$aRow[ $aColumns[$i]]."</khass>";
						}
	
						else if ($aColumns[$i] == 'Datenaissance') {
							$row[] = $Control->convertDate($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'Adresse') {
							$row[] = $this->adresseText($aRow[ $aColumns[$i] ]);
						}
	
						else if ($aColumns[$i] == 'id') {
	
							$html  ="<infoBulleVue><a style='padding-left: 20px;' href='javascript:details(". $aRow[ $aColumns[$i] ] .",". $aRow[ 'idVpa' ] .")'>";
							$html .="<img src='".$tabURI[0]."public/images_icons/details.png' title='détails'></a><infoBulleVue>";
	
	
							$html .="<input id='".$aRow[ 'idVpa' ]."'  type='hidden' value='".$aRow[ 'Idcons' ]."'>";
	
							$row[] = $html;
						}
	
						else if ($aColumns[$i] == 'medecinDemandeur') {
							$row[] = $aRow[ 'PrenomMedecin' ]." ".$aRow[ 'NomMedecin' ];
						}
	
						else if ($aColumns[$i] == 'Datedemande') {
							$row[] = $Control->convertDateTime($aRow[ 'Datedemande' ]);
						}
	
						else {
							$row[] = $aRow[ $aColumns[$i] ];
						}
	
					}
				}
	
				$output['aaData'][] = $row;
		}
		return $output;
	}
	
	/**
	 * @param l'id de la consultation : $id_cons
	 */
	public function getDemandeVpaWidthIdcons($id_cons)
	{
		$db = $this->tableGateway->getAdapter();
		
		$sql = new Sql($db);
		$sQuery = $sql->select()
		->from(array('pat' => 'patient'))->columns(array('*'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATEONLY', 'Idcons'=>'ID_CONS'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		->join(array('d' => 'demande_visite_preanesthesique'), 'd.ID_CONS = cons.ID_CONS' , array('*'))
		->where(array('d.ID_CONS' => $id_cons))
		->order('d.idVpa ASC');
	
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$Result = $stat->execute();
	
		return $Result;
	}
	
	
	
	
	protected function nbJours($debut, $fin) {
		//60 secondes X 60 minutes X 24 heures dans une journee
		$nbSecondes = 60*60*24;
	
		$debut_ts = strtotime($debut);
		$fin_ts = strtotime($fin);
		$diff = $fin_ts - $debut_ts;
		return ($diff / $nbSecondes);
	}
	
	public function gestionAges($age, $date_naissance) {
		//Gestion des AGE
		if($age && !$date_naissance){
			return $age." ans";
		}else{
			$aujourdhui = (new \DateTime() ) ->format('Y-m-d');
			$age_jours = (int)$this->nbJours($date_naissance, $aujourdhui);
	
			$age_annees = (int)($age_jours/365);
	
			if($age_annees == 0){
	
				if($age_jours < 31){
					return $age_jours." jours";
				}else if($age_jours >= 31) {
	
					$nb_mois = (int)($age_jours/31);
					$nb_jours = $age_jours - ($nb_mois*31);
					if($nb_jours == 0){
						return $nb_mois."m";
					}else{
						return $nb_mois."m ".$nb_jours."j";
					}
	
				}
	
			}else{
				$age_jours = $age_jours - ($age_annees*365);
	
				if($age_jours < 31){
	
					if($age_annees == 1){
						if($age_jours == 0){
							return $age_annees."an";
						}else{
							return $age_annees."an ".$age_jours."j";
						}
					}else{
						if($age_jours == 0){
							return $age_annees."ans";
						}else{
							return $age_annees."ans ".$age_jours."j";
						}
					}
	
				}else if($age_jours >= 31) {
	
					$nb_mois = (int)($age_jours/31);
					$nb_jours = $age_jours - ($nb_mois*31);
	
					if($age_annees == 1){
						if($nb_jours == 0){
							return $age_annees."an ".$nb_mois."m";
						}else{
							return $age_annees."an ".$nb_mois."m ";
						}
	
					}else{
						if($nb_jours == 0){
							return $age_annees."ans ".$nb_mois."m";
						}else{
							return $age_annees."ans ".$nb_mois."m";
						}
					}
	
				}
	
			}
	
		}
	}
	
	
	
	
	
	
	
	
	
	/**
	 * ANESTHESIE ,  ANESTHESIE , ANESTHESIE , ANESTHESIE , ANESTHESIE
	 * Recuperation de la liste des patients pour qui les resultats sont deja envoyes
	 */
	public function getListeRechercheVpa()
	{
	
		$db = $this->tableGateway->getAdapter();
	
		$aColumns = array('Numero_Dossier','Nom','Prenom','Age','Sexe', 'Adresse', 'medecinDemandeur' , 'id', 'id2');
	
		/* Indexed column (used for fast and accurate table cardinality) */
		$sIndexColumn = "id";
	
		/*
		 * Paging
		*/
		$sLimit = array();
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit[0] = $_GET['iDisplayLength'];
			$sLimit[1] = $_GET['iDisplayStart'];
		}
	
		/*
		 * Ordering
		*/
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			$sOrder = array();
			$j = 0;
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
			{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder[$j++] = $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
								 	".$_GET['sSortDir_'.$i];
				}
			}
		}
	
		/*
		 * Liste des resultats
		*/
		$sql1 = new Sql ( $db );
		$subselect = $sql1->select ();
		$subselect->from ( array (
				'r' => 'resultat_vpa'
		) );
		$subselect->columns ( array (
				'idVpa'
		) );
	
		/*
		 * SQL queries
		*/
		$sql = new Sql($db);
		$sQuery = $sql->select()
		//->from(array('pat' => 'patient'))->columns(array('*'))
		->from(array('pat' => 'patient'))->columns(array('Numero_Dossier'=>'NUMERO_DOSSIER'))
		->join(array('pers' => 'personne'), 'pers.ID_PERSONNE = pat.ID_PERSONNE', array('Nom'=>'NOM','Prenom'=>'PRENOM','Age'=>'AGE','Datenaissance'=>'DATE_NAISSANCE','Sexe'=>'SEXE','Adresse'=>'ADRESSE','id'=>'ID_PERSONNE','id2'=>'ID_PERSONNE'))
		->join(array('cons' => 'consultation'), 'cons.ID_PATIENT = pat.ID_PERSONNE', array('Datedemande'=>'DATE', 'Idcons'=>'ID_CONS'))
		->join(array('med' => 'personne') , 'med.ID_PERSONNE = cons.ID_MEDECIN' , array('NomMedecin' =>'NOM', 'PrenomMedecin' => 'PRENOM'))
		->join(array('d' => 'demande_visite_preanesthesique'), 'd.ID_CONS = cons.id_cons' , array('*'))
		->where(array (	new In ( 'd.idVpa', $subselect )))
		->order('d.idVpa ASC');
	
		/* Data set length after filtering */
		$stat = $sql->prepareStatementForSqlObject($sQuery);
		$rResultFt = $stat->execute();
		$iFilteredTotal = count($rResultFt);
	
		$rResult = $rResultFt;
	
		$output = array(
				//"sEcho" => intval($_GET['sEcho']),
				//"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
		);
	
		/*
		 * $Control pour convertir la date en fran�ais
		*/
		$Control = new DateHelper();
	
		/*
		 * ADRESSE URL RELATIF
		*/
		$baseUrl = $_SERVER['REQUEST_URI'];
		$tabURI  = explode('public', $baseUrl);
	
		/*
		 * Preparer la liste
		*/
	
		$rResult2 = $stat->execute();
		foreach ( $rResult2 as $aRow )
		{
			$row = array();
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				if ( $aColumns[$i] != ' ' )
				{
					/* General output */
					if ($aColumns[$i] == 'Nom'){
						$row[] = "<khass id='nomMaj'>".$aRow[ $aColumns[$i]]."</khass>";
					}
	
					else if ($aColumns[$i] == 'Age') {
						$age = $aRow[ $aColumns[$i] ];
						$row[] = $this->gestionAges($age, $aRow[ 'Datenaissance' ]);
					}
	
					else if ($aColumns[$i] == 'Adresse') {
						$row[] = $this->adresseText($aRow[ $aColumns[$i] ]);
					}
	
					else if ($aColumns[$i] == 'id') {
	
						$html  ="<infoBulleVue><a style='padding-right: 15px;' href='javascript:vuedetails(". $aRow[ $aColumns[$i] ] .",". $aRow[ 'idVpa' ] .")'>";
						$html .="<img src='".$tabURI[0]."public/images_icons/voir2.png' title='détails'></a>";
						$html .="<a><img src='".$tabURI[0]."public/images_icons/tick_16.png' title='Envoyé'></a><infoBulleVue>";
	
	
						$html .="<input id='".$aRow[ 'idVpa' ]."'  type='hidden' value='".$aRow[ 'Idcons' ]."'>";
	
						$row[] = $html;
					}
	
					else if ($aColumns[$i] == 'medecinDemandeur') {
						$row[] = $aRow[ 'PrenomMedecin' ]." ".$aRow[ 'NomMedecin' ];
					}
	
					else if ($aColumns[$i] == 'Datedemande') {
						$row[] = $Control->convertDateTime($aRow[ 'Datedemande' ]);
					}
	
					else {
						$row[] = $aRow[ $aColumns[$i] ];
					}
	
				}
			}
	
			$output['aaData'][] = $row;
		}
		return $output;
	}
	
	/**
	 * Recuperation de la liste des types d'anesth�sie
	 */
	public function listeDesTypeAnesthesie(){
		$adapter = $this->tableGateway->getAdapter();
		$sql = new Sql ( $adapter );
		$select = $sql->select('type_anesthesie');
		$select->columns(array('id','libelle'));
		$stat = $sql->prepareStatementForSqlObject($select);
		$result = $stat->execute();
	
		return $result;
	}
}