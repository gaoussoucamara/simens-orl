<?php

namespace Orl\Form;

use Zend\Form\Form;
use Zend\Stdlib\DateTime;

class ConsultationForm extends Form {
	public $decor = array (
			'ViewHelper'
	);
	public function __construct($name = null) {
		parent::__construct ();
		$today = new \DateTime ( 'now' );
		$date = $today->format ( 'dmy-His' );
		$dateOnly = $today->format ( 'Y-m-d' );
		$heure = $today->format ( "H:i" );
		$dateAujourdhui = $today->format( 'Y-m-d' );

		$this->add ( array (
				'name' => 'id_cons',
				'type' => 'hidden',
				'options' => array (
						'label' => 'Code Orl'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'value' => 's-c-' . $date,
						'id' => 'id_cons'
				)
		) );
		$this->add ( array (
				'name' => 'heure_cons',
				'type' => 'Hidden',
				'attributes' => array (
						'value' => $heure
				)
		) );
		
		$this->add ( array (
				'name' => 'id_rv',
				'type' => 'Hidden',
				'attributes' => array (
						'id' => 'id_rv'
				)
		) );
		
		$this->add ( array (
				'name' => 'id_medecin',
				'type' => 'Hidden',
				'options' => array (
						'decorators' => $this->decor
				),
				'attributes' => array (
						'id' => 'id_medecin'
				)
		) );
		
		$this->add ( array (
				'name' => 'id_admission',
				'type' => 'Hidden',
				'options' => array (
						'decorators' => $this->decor
				),
				'attributes' => array (
						'id' => 'id_admission'
				)
		) );
		
		$this->add ( array (
				'name' => 'id_surveillant',
				'type' => 'Hidden',
				'options' => array (
						'decorators' => $this->decor
				),
				'attributes' => array (
						'id' => 'id_surveillant'
				)
		) );
		
		$this->add ( array (
				'name' => 'id_patient',
				'type' => 'Hidden',
				'options' => array (
						'decorators' => $this->decor
				),
				'attributes' => array (
						'id' => 'id_patient'
				)
		) );
		
		$this->add ( array (
				'name' => 'dateonly',
				'type' => 'Hidden',
				'options' => array (
						'decorators' => $this->decor
				),
				'attributes' => array (
						'id' => 'dateonly',
						'value' => $dateOnly
				)
		) );
		$this->add ( array (
				'name' => 'motif_admission',
				'type' => 'Text',
				'options' => array (
						'label' => 'Motif_admission'
				)
		) );
		/**
		 * ********* LES MOTIFS D ADMISSION *************
		 */
		/**
		 * ********* LES MOTIFS D ADMISSION *************
		 */
		$this->add ( array (
				'name' => 'motif_admission1',
				'type' => 'Text',
				'options' => array (
						'label' => 'motif 1'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'motif_admission1'
				)
		) );
		$this->add ( array (
				'name' => 'motif_admission2',
				'type' => 'Text',
				'options' => array (
						'label' => 'motif 2'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'motif_admission2'
				)
		) );
		$this->add ( array (
				'name' => 'motif_admission3',
				'type' => 'Text',
				'options' => array (
						'label' => 'motif 3'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'motif_admission3'
				)
		) );
		$this->add ( array (
				'name' => 'motif_admission4',
				'type' => 'Text',
				'options' => array (
						'label' => 'motif 4'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'motif_admission4'
				)
		) );
		$this->add ( array (
				'name' => 'motif_admission5',
				'type' => 'Text',
				'options' => array (
						'label' => 'motif 5'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'motif_admission5'
				)
		) );
		/**
		 * ********DONNEES DE L EXAMEN PHYSIQUE***********
		 */
		/**
		 * ********DONNEES DE L EXAMEN PHYSIQUE***********
		 */
		$this->add ( array (
				'name' => 'examen_donnee1',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','CAT 1') 
				),
				'attributes' => array (
						'readonly' => 'readonly',
				'id'  => 'examen_donnee1'
				)
		) );
		$this->add ( array (
				'name' => 'examen_donnee2',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','CAT 2') 
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'examen_donnee2'
				)
		) );
		$this->add ( array (
				'name' => 'examen_donnee3',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','CAT 3') 
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'examen_donnee3'
				)
		) );
		$this->add ( array (
				'name' => 'examen_donnee4',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','CAT 4') 
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'examen_donnee4'
				)
		) );
		$this->add ( array (
				'name' => 'examen_donnee5',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','CAT 5') 
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'examen_donnee5'
				)
		) );
		
		/**
		 * ********** EXAMENS COMPLEMENTAIRES (EXAMENS ET ANALYSE) *************
		 */
		/**
		 * ********** EXAMENS COMPLEMENTAIRES (EXAMENS ET ANALYSE) *************
		 */
		
		/* C)))*********ACTES******** */
		$this->add ( array (
				'name' => 'doppler_couleur_pulse',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Doppler couleur, pulsé, continu, tissulaire:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'doppler_couleur_pulse'
				)
		) );
		
		$this->add ( array (
				'name' => 'echographie_de_stress',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Echographie de stress:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'echographie_de_stress'
				)
		) );
		
		$this->add ( array (
				'name' => 'holter_ecg',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Holter ECG:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'holter_ecg'
				)
		) );
		
		$this->add ( array (
				'name' => 'holter_tensionnel',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Holter tensionnel:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'holter_tensionnel'
				)
		) );
		$this->add ( array (
				'name' => 'fibroscopie_bronchique',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fibroscopie bronchique:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'fibroscopie_bronchique'
				)
		) );
		
		$this->add ( array (
				'name' => 'fibroscopie_gastrique',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fibroscopie gastrique:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'fibroscopie_gastrique'
				)
		) );
		
		$this->add ( array (
				'name' => 'colposcopie',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Colposcopie:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'colposcopie'
				)
		) );
		
		$this->add ( array (
				'name' => 'echographie_gynecologique',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Echographie gynécologique:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'echographie_gynecologique'
				)
		) );
		
		$this->add ( array (
				'name' => 'echographie_obstetrique',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Echographie obstétrique:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'echographie_obstetrique'
				)
		) );
		
		$this->add ( array (
				'name' => 'cpn',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'CPN:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'cpn'
				)
		) );
		
		$this->add ( array (
				'name' => 'consultation_senologie',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Orl sénologie:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'consultation_senologie'
				)
		) );
		
		$this->add ( array (
				'name' => 'plannification_familiale',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Plannification familiale:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'plannification_familiale'
				)
		) );
		
		$this->add ( array (
				'name' => 'ecg',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'ECG:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'ecg'
				)
		) );
		
		$this->add ( array (
				'name' => 'eeg',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'EEG:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'eeg'
				)
		) );
		
		$this->add ( array (
				'name' => 'efr',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'EFR:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'efr'
				)
		) );
		
		$this->add ( array (
				'name' => 'emg',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'EMG:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'emg'
				)
		) );
		
		$this->add ( array (
				'name' => 'circoncision',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Circoncision:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'circoncision'
				)
		) );
		
		$this->add ( array (
				'name' => 'vaccination',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Vaccination:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'vaccination'
				)
		) );
		
		$this->add ( array (
				'name' => 'soins_infirmiers',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Soins infirmiers:')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id'  => 'soins_infirmiers'
				)
		) );

		/* A)))*********ANALYSE BIOLOGIQUE******** */
		$this->add ( array (
				'name' => 'groupe_sanguin',
				'type' => 'Text',
				'options' => array (
							'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'NFS:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'groupe_sanguin'
				)
		) );
		$this->add ( array (
				'name' => 'hemogramme_sanguin',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'GSRH:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'hemogramme_sanguin'
				)
		) );
		$this->add ( array (
				'name' => 'bilan_hemolyse',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TEST D\'EMMEL:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'bilan_hemolyse'
				)
		) );
		$this->add ( array (
				'name' => 'bilan_hepatique',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TP:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'bilan_hepatique'
				)
		) );
		$this->add ( array (
				'name' => 'bilan_renal',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TCK:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'bilan_renal'
				)
		) );
		$this->add ( array (
				'name' => 'bilan_inflammatoire',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'CALCEMIE:' )
				),
				'attributes' => array (
							//'readonly' => 'readonly',
						'id'  => 'bilan_inflammatoire'
				)
		) );
		$this->add ( array (
				'name' => 'creatinine',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'CREATININE:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'creatinine'
				)
		) );
		
		$this->add ( array (
				'name' => 't4',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'T4:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 't4'
				)
		) );
		
		$this->add ( array (
				'name' => 'tsh',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TSH:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'tsh'
				)
		) );
		
		$this->add ( array (
				'name' => 'crp',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'CRP:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'crp'
				)
		) );
		
		$this->add ( array (
				'name' => 'glycemie_a_jeun',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'GLYCEMIE A JEUN:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'glycemie_a_jeun'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'aslo',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'ASLO:' )
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id'  => 'aslo'
				)
		) );
		
		/* B)))*********EXAMEN MORPHOLOGIQUE******** */
		/**
		 * * Les balises images dans cette partie ne sont pas utilisï¿½es**
		 */
		$this->add ( array (
				'name' => 'radio',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Radiographie du CAVUM:'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'radio'
				)
		) );
		/**
		 * *** image de la radio ****
		 */
		$this->add ( array (
				'name' => 'radio_image',
				'type' => 'Image'
		) );
		/* --->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
		$this->add ( array (
				'name' => 'ecographie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Radiographie du THORAX: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'ecographie'
				)
		) );
		/**
		 * *** image de l'ecographie ****
		 */
		$this->add ( array (
				'name' => 'ecographie_image',
				'type' => 'Image'
		) );
		/* --->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
		$this->add ( array (
				'name' => 'fibrocospie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Audiogramme tonal: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'fibrocospie'
				)
		) );
		/**
		 * *** image de la fibroscopie ****
		 */
		$this->add ( array (
				'name' => 'fibroscopie_image',
				'type' => 'Image'
		) );
		/* --->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
		$this->add ( array (
				'name' => 'scanner',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TDM des Sinus: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'scanner'
				)
		) );
		/**
		 * *** image du scanner ****
		 */
		$this->add ( array (
				'name' => 'scanner_image',
				'type' => 'Image'
		) );
		/* --->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
		$this->add ( array (
				'name' => 'irm',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Echographie Cervicale: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'irm'
				)
		) );
		/**
		 * *** image de l'irm ****
		 */
		$this->add ( array (
				'name' => '$irm_image',
				'type' => 'Image'
		) );
		/* --->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */

		/**
		 * ********************************* DIAGNOSTICS *******************************
		 */
		/**
		 * ********************************* DIAGNOSTICS *******************************
		 */
		$this->add ( array (
				'name' => 'diagnostic1',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Diagnostic 1: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'diagnostic1'
				)
		) );
		$this->add ( array (
				'name' => 'diagnostic2',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Diagnostic 2: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'diagnostic2'
				)
		) );
		$this->add ( array (
				'name' => 'diagnostic3',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Diagnostic 3: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'diagnostic3'
				)
		) );
		$this->add ( array (
				'name' => 'diagnostic4',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Diagnostic 4: ' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'diagnostic4'
				)
		) );
		/**
		 * ************************* CONSTANTES *****************************************************
		 */
		/**
		 * ************************* CONSTANTES *****************************************************
		 */
		/**
		 * ************************* CONSTANTES *****************************************************
		 */
		$this->add ( array (
				'name' => 'date_cons',
				'type' => 'hidden',
				'options' => array (
						'label' => 'Date'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'date_cons'
				)
		) );
		$this->add ( array (
				'name' => 'poids',
				'type' => 'Text',
				'options' => array (
						'label' => 'Poids (kg)'
				),
				'attributes' => array (
						'class' => 'poids_only_numeric',
						'readonly' => 'readonly',
						'id' => 'poids'
				)
		) );
		$this->add ( array (
				'name' => 'taille',
				'type' => 'Text',
				'options' => array (
						'label' => 'Taille (cm)'
				),
				'attributes' => array (
						'class' => 'taille_only_numeric',
						'readonly' => 'readonly',
						'id' => 'taille'
				)
		) );
		$this->add ( array (
				'name' => 'temperature',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Température (°C)' )
				),
				'attributes' => array (
						'class' => 'temperature_only_numeric',
						'readonly' => 'readonly',
						'id' => 'temperature'
				)
		) );
		
		$this->add ( array (
				'name' => 'tension',
				'type' => 'Text',
				'options' => array (
						'label' => 'Tension'
				),
				'attributes' => array (
						'class' => 'tension_only_numeric',
						'readonly' => 'readonly',
						'id' => 'tension'
				)
		) );
		
		$this->add ( array (
				'name' => 'pressionarterielle',
				'type' => 'Text',
				'options' => array (
						//'label' => iconv('ISO-8859-1', 'UTF-8', 'Pression artérielle (mmHg)')
				),
				'attributes' => array (
						'class' => 'tension_only_numeric',
						'id' => 'pressionarterielle'
				)
		) );
		
		$this->add ( array (
				'name' => 'tensionmaximale',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'tension_only_numeric',
						'id' => 'tensionmaximale'
				)
		) );
		
		$this->add ( array (
				'name' => 'tensionminimale',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'tension_only_numeric',
						'id' => 'tensionminimale'
				)
		) );
		
		$this->add ( array (
				'name' => 'pouls',
				'type' => 'Text',
				'options' => array (
						'label' => 'Pouls (bat/min)'
				),
				'attributes' => array (
						'class' => 'pouls_only_numeric',
						'readonly' => 'readonly',
						'id' => 'pouls'
				)
		) );
		$this->add ( array (
				'name' => 'frequence_respiratoire',
				'type' => 'Text',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Fréquence respiratoire')
				),
				'attributes' => array (
						'class' => 'frequence_only_numeric',
						'readonly' => 'readonly',
						'id' => 'frequence_respiratoire'
				)
		) );
		$this->add ( array (
				'name' => 'glycemie_capillaire',
				'type' => 'Text',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8', 'Glycémie capillaire (g/l)') 
				),
				'attributes' => array (
						'class' => 'glycemie_only_numeric',
						'readonly' => 'readonly',
						'id' => 'glycemie_capillaire'
				)
		) );
		$this->add ( array (
				'name' => 'bu',
				'type' => 'Text',
				'options' => array (
						'label' => 'Bandelette urinaire'
				),
				'attributes' => array (
						'class' => 'bu_only_numeric',
						'readonly' => 'readonly',
						'id' => 'bu'
				)
		) );
		
		/*** LES TYPES DE BANDELETTES URINAIRES ***/
		/*** LES TYPES DE BANDELETTES URINAIRES ***/
		/*** LES TYPES DE BANDELETTES URINAIRES ***/
		$this->add ( array (
				'name' => 'albumine',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'0' => 'â€“',
								'1' => '+',
						)
				),
				'attributes' => array (
						'id' => 'albumine' 
						
				)
		) );
		$this->add ( array (
				'name' => 'croixalbumine',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4',
						)
				),
				'attributes' => array (
						'id' => 'croixalbumine',
		
				)
		) );
// 		$this->add ( array (
// 				'name' => 'suitesCompliquees',
// 				'type' => 'radio',
// 				'options' => array (
// 						'value_options' => array (
// 								'0' => 'â€“',
// 								'1' => '+',
// 						)
// 				),
// 				'attributes' => array (
// 						'id' => 'suitesCompliquees'
		
// 				)
// 		) );
		
		
		
		
		$this->add ( array (
				'name' => 'signesCompression',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'0' => 'â€“',
								'1' => '+',
						)
				),
				'attributes' => array (
						'id' => 'signesCompression'
		
				)
		) );
		
		
		
		$this->add ( array (
				'name' => 'croixsignesCompression',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'1' => '1',
								'2' => '2',
								'3' => '3',
								'4' => '4',
						)
				),
				'attributes' => array (
						'id' => 'croixsignesCompression',
		
				)
		) );
		$this->add ( array (
				'name' => 'sucre',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'0' => 'â€“',
								'1' => '+',
						)
				),
				'attributes' => array (
						'id' => 'sucre',
		
				)
		) );
		$this->add ( array (
				'name' => 'croixsucre',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'1' => '1',
								'2' => '2',
								'3' => '3',
								'4' => '4',
						)
				),
				'attributes' => array (
						'id' => 'croixsucre',
		
				)
		) );
		
		$this->add ( array (
				'name' => 'corpscetonique',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'0' => 'â€“',
								'1' => '+',
						)
				),
				'attributes' => array (
						'id' => 'corpscetonique',
		
				)
		) );
		$this->add ( array (
				'name' => 'croixcorpscetonique',
				'type' => 'radio',
				'options' => array (
						'value_options' => array (
								'1' => '1',
								'2' => '2',
								'3' => '3',
								'4' => '4',
						)
				),
				'attributes' => array (
						'id' => 'croixcorpscetonique',
						'class' => 'croixcorpscetonique',
		
				)
		) );
		/*** FIN LES TYPES DE BANDELETTES URINAIRES ***/
		/*** FIN LES TYPES DE BANDELETTES URINAIRES ***/
		
		
		$this->add ( array (
				'name' => 'observation',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Observations'
				),
				'attributes' => array (
						'rows' => 1,
						'cols' => 180
				)
		) );
		$this->add ( array (
				'name' => 'submit',
				'type' => 'Submit',
				'options' => array (
						'label' => 'Valider'
				)
		) );
		// ************** TRAITEMENTS *************
		// ************** TRAITEMENTS *************
		// ************** TRAITEMENTS *************
		/**
		 * ************* traitement chirurgicaux ************
		 */
		/**
		 * ************* traitement chirurgicaux ************
		 */
		$this->add ( array (
				'name' => 'diagnostic_traitement_chirurgical',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Indication :'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'diagnostic_traitement_chirurgical'
				)
		) );
		$this->add ( array (
				'name' => 'type_anesthesie_demande',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Type d\'anesthésie :' ),
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Anesthésie1' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Anesthésie2' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'Anesthésie3' )
						)
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'type_anesthesie_demande'
				)
		) );
		$this->add ( array (
				'name' => 'intervention_prevue',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Intervention Prévue :')
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'intervention_prevue'
				)
		) );
		$this->add ( array (
				'name' => 'numero_vpa',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'VPA Numéro:' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'numero_vpa'
				)
		) );
		$this->add ( array (
				'name' => 'observation',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Observation :' )
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'observation'
				)
		) );
		$this->add ( array (
				'name' => 'note_compte_rendu_operatoire',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Protocole opératoire' )
				),
				'attributes' => array (
						'id' => 'note_compte_rendu_operatoire'
				)
		) );
		
		$this->add ( array (
				'name' => 'note_compte_rendu_operatoire_instrumental',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Note :' )
				),
				'attributes' => array (
						'id' => 'note_compte_rendu_operatoire_instrumental'
				)
		) );
		/**
		 * ************* Autres (Transfert / hospitalisation / Rendez-vous! ************
		 */
		/**
		 * ************* Autres (Transfert / hospitalisation / Rendez-vous! ************
		 */
		/**
		 * ************* Autres (Transfert / hospitalisation / Rendez-vous! ************
		 */

		/* A))************** Transfert ************ */
		/*A))************** Transfert *************/
		$this->add ( array (
				'name' => 'hopital_accueil',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Hopital d\'accueil :' ),
// 						'value_options' => array (
// 								'zzz' => 'zzz'
// 						)
				),
				'attributes' => array (
						'registerInArrrayValidator' => false,
						'onchange' => 'getservices(this.value)',
						'id' => 'hopital_accueil'
				)
		) );
		$this->add ( array (
				'name' => 'service_accueil',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Service d\'accueil :' )
// 						'value_options' => array (
// 								'' => ''
// 						)
				),
				'attributes' => array (
						'registerInArrrayValidator' => false,
						'id' => 'service_accueil'
				)
		) );
		$this->add ( array (
				'name' => 'motif_transfert',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Motif du transfert :'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'motif_transfert'
				)
		) );
		/* B))************** Hospitalisation ************ */
		/*B))************** Hospitalisation *************/
		$this->add ( array (
				'name' => 'motif_hospitalisation',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Motif hospitalisation :'
				),
				'attributes' => array (
						'id' => 'motif_hospitalisation'
				)
		) );
		$this->add ( array (
				'name' => 'examen_clinique',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Examen clinique :'
				),
				'attributes' => array (
						'id' => 'examen_clinique'
				)
		) );
		
		$this->add ( array (
				'name' => 'peau_cervicoFo',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Peau cervico faciale  :' )
				),
				'attributes' => array (
						'id' => 'peau_cervicoFo',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'otoscopieFo',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Otoscopie  :' )
				),
				'attributes' => array (
						'id' => 'otoscopieFo',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'cavite_bucaleFo',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Cavité buccale et Oropharynx  :' )
				),
				'attributes' => array (
						'id' => 'cavite_bucaleFo',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'fosses_nasalesFo',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fosses nasales  :' )
				),
				'attributes' => array (
						'id' => 'fosses_nasalesFo',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'liFo',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Li ou nasofibroscopie  :' )
				),
				'attributes' => array (
						'id' => 'liFo',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'reste_examen_cliniqueFo',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Reste examen clinique  :' )
				),
				'attributes' => array (
						'id' => 'reste_examen_cliniqueFo'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'plainte_motif',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Plaintes :'
				),
				'attributes' => array (
						'id' => 'plainte_motif'
				)
		) );
		
		$this->add ( array (
				'name' => 'examen_para_clinique',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Examen paraclinique :'
				),
				'attributes' => array (
						'id' => 'examen_para_clinique'
				)
		) );
		
		/*Avis RCP */
		$this->add ( array (
				'name' => 'cat_fo',
				'type' => 'Textarea',
		
				'attributes' => array (
						'id' => 'cat_fo'
				)
		) );
		
		$this->add ( array (
				'name' => 'surveillance',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Surveillance :'
				),
				'attributes' => array (
						'id' => 'surveillance'
				)
		) );
		
		$this->add ( array (
				'name' => ' ',
				'type' => 'Textarea',
				'options' => array (
						'label' => ' '
				),
				'attributes' => array (
						'id' => ' '
				)
		) );
		$this->add ( array (
				'name' => 'date_fin_hospitalisation_prevue',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Date fin prévue :'),
				),
				'attributes' => array (
						'id' => 'date_fin_hospitalisation_prevue'
				)
		) );
		
		/* C))************** Rendez-vous ************ */
		/*C))************** Rendez-vous *************/
		$this->add ( array (
				'name' => 'motif_rv',
				'type' => 'Textarea',
				'options' => array (
						'label' => 'Motif du rendez-vous :'
				),
				'attributes' => array (
						//'readonly' => 'readonly',
						'id' => 'motif_rv'
				)
		) );
		$this->add ( array (
				'name' => 'habitude_vie1',
				'type' => 'Text',
				'options' => array (
						'label' => 'Habitude de vie 1'
				),
				'attributes' => array (
						'id'  => 'habitude_vie1'
				)
		) );
		$this->add ( array (
				'name' => 'habitude_vie2',
				'type' => 'Text',
				'options' => array (
						'label' => 'Habitude de vie 2'
				),
				'attributes' => array (
						'id'  => 'habitude_vie2'
				)
		) );
		$this->add ( array (
				'name' => 'habitude_vie3',
				'type' => 'Text',
				'options' => array (
						'label' => 'Habitude de vie 3'
				),
				'attributes' => array (
						'id'  => 'habitude_vie3'
				)
		) );
		$this->add ( array (
				'name' => 'habitude_vie4',
				'type' => 'Text',
				'options' => array (
						'label' => 'Habitude de vie 4'
				),
				'attributes' => array (
						'id'  => 'habitude_vie4'
				)
		) );
		$this->add ( array (
				'name' => 'antecedent_familial1',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','Antécédent 1')
				),
				'attributes' => array (
						'id'  => 'antecedent_familial1'
				)
		) );
		$this->add ( array (
				'name' => 'antecedent_familial2',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','Antécédent 2')
				),
				'attributes' => array (
						'id'  => 'antecedent_familial2'
				)
		) );
		$this->add ( array (
				'name' => 'antecedent_familial3',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','Antécédent 3')
				),
				'attributes' => array (
						'id'  => 'antecedent_familial3'
				)
		) );
		$this->add ( array (
				'name' => 'antecedent_familial4',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','Antécédent 4')
				),
				'attributes' => array (
						'id'  => 'antecedent_familial4'
				)
		) );
		$this->add ( array (
				'name' => 'date_rv',
				'type' => 'Text',
				'options' => array (
						'label' => 'Date :'
				),
				'attributes' => array (
						'id' => 'date_rv',
						//'required'=> true,
				)
		) );
		$this->add ( array (
				'name' => 'heure_rv',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'label' => 'Heure :',
						'empty_option' => 'Choisir',
						'value_options' => array (
								'08:00' => '08:00',
								'09:00' => '09:00',
								'10:00' => '10:00',
								'15:00' => '15:00',
								'16:00' => '16:00'
						)
				),
				'attributes' => array (
						'id' => 'heure_rv'
				)
		) );
		$this->add ( array (
				'name' => 'delai_rv',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'label' => 'Delai :',
						'empty_option' => 'Choisir',
						'value_options' => array (
								'10j' => '10j',
								'15j' => '15j',
								'1 mois' => '1 mois',
								'1 mois 15j' => '1 mois 15j',
								'2 mois' => '2 mois',
								'3 mois' => '3 mois',
								'6 mois' => '6 mois'
								
						)
				),
				'attributes' => array (
						'id' => 'delai_rv'
				)
		) );
		
		
		
		$this->add ( array (
				'name' => 'sous_dossier',
				'type' => 'select',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Type Sous-Dossier'),
				),
				'attributes' => array (
						'id' =>'sous_dossier',
						'required' => true
		
				)
		) );
		

		
		/**
		 * LES HISTORIQUES OU TERRAINS PARTICULIERS
		 * LES HISTORIQUES OU TERRAINS PARTICULIERS
		 * LES HISTORIQUES OU TERRAINS PARTICULIERS
		 */
		/**** ANTECEDENTS PERSONNELS ****/
		/**** ANTECEDENTS PERSONNELS ****/
		
		/*LES HABITUDES DE VIE DU PATIENTS*/
		/*Alcoolique*/
		$this->add ( array (
				'name' => 'AlcooliqueHV',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'AlcooliqueHV'
				)
		) );
		$this->add ( array (
				'name' => 'DateDebutAlcooliqueHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DateDebutAlcooliqueHV'
				)
		) );
		$this->add ( array (
				'name' => 'DateFinAlcooliqueHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DateFinAlcooliqueHV'
				)
		) );
		$this->add ( array (
				'name' => 'AutresHV',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'AutresHV'
				)
		) );
		$this->add ( array (
				'name' => 'NoteAutresHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteAutresHV'
				)
		) );
		/*Fumeur*/
		$this->add ( array (
				'name' => 'FumeurHV',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'FumeurHV'
				)
		) );
		$this->add ( array (
				'name' => 'DateDebutFumeurHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DateDebutFumeurHV'
				)
		) );
		$this->add ( array (
				'name' => 'DateFinFumeurHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DateFinFumeurHV'
				)
		) );
		$this->add ( array (
				'name' => 'nbPaquetFumeurHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'nbPaquetFumeurHV'
				)
		) );
		$this->add ( array (
				'name' => 'nbPaquetAnneeFumeurHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'nbPaquetAnneeFumeurHV'
				)
		) );
		/*Drogué*/
		$this->add ( array (
				'name' => 'DroguerHV',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'DroguerHV'
				)
		) );
		$this->add ( array (
				'name' => 'DateDebutDroguerHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DateDebutDroguerHV'
				)
		) );
		$this->add ( array (
				'name' => 'DateFinDroguerHV',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DateFinDroguerHV'
				)
		) );
		
		$this->add ( array (
				'name' => 'TyroideAM',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'TyroideAM'
				)
		) );
		
		
		/*LES SOUS DOSSIERS*/

		$this->add ( array (
				'name' => 'fiche_observation_clinique',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'fiche_observation_clinique'
				)
		) );
		
		$this->add ( array (
				'name' => 'thyroide',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'thyroide'			
						
				)
				
		) );
		
		$this->add ( array (
				'name' => 'tumeur_parotidienne',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'tumeur_parotidienne'
				)
		) );
		
		$this->add ( array (
				'name' => 'corps_etrangers',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'corps_etrangers'
				)
		) );
		
		$this->add ( array (
				'name' => 'lesion_sphere_orl',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'lesion_sphere_orl'
				)
		) );
		
		/*LES ANTECEDENTS MEDICAUX*/
		/*Diabete*/
		$this->add ( array (
				'name' => 'DiabeteAM',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'DiabeteAM'
				)
		) );
		/*HTA*/
		$this->add ( array (
				'name' => 'htaAM',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'htaAM'
				)
		) );
		/*Drepanocytose*/
		$this->add ( array (
				'name' => 'drepanocytoseAM',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'drepanocytoseAM'
				)
		) );
		/*Dislipidemie*/
		$this->add ( array (
				'name' => 'dislipidemieAM',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'dislipidemieAM'
				)
		) );
		/*Asthme*/
		$this->add ( array (
				'name' => 'asthmeAM',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'asthmeAM'
				)
		) );
		/*Autre*/
		$this->add ( array (
				'name' => 'autresAM',
				'type' => 'text',
				'attributes' => array (
						'id' => 'autresAM',
						//'maxlength' => 13,
				)
		) );
		/*nbCheckbox*/
		$this->add ( array (
				'name' => 'nbCheckboxAM',
				'type' => 'hidden',
				'attributes' => array (
						'id' => 'nbCheckboxAM',
				)
		) );
		/*GYNECO-OBSTETRIQUE*/
		/*Menarche*/
		$this->add ( array (
				'name' => 'MenarcheGO',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'MenarcheGO'
				)
		) );
		/*Note Menarche*/
		$this->add ( array (
				'name' => 'NoteMenarcheGO',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteMenarcheGO'
				)
		) );
		
		/*Gestite*/
		$this->add ( array (
				'name' => 'GestiteGO',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'GestiteGO'
				)
		) );
		/*Note Gestite*/
		$this->add ( array (
				'name' => 'NoteGestiteGO',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteGestiteGO'
				)
		) );
		

		/*Parite*/
		$this->add ( array (
				'name' => 'PariteGO',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'PariteGO'
				)
		) );
		/*Note Parite*/
		$this->add ( array (
				'name' => 'NotePariteGO',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NotePariteGO'
				)
		) );
		
		/*Cycle*/
		$this->add ( array (
				'name' => 'CycleGO',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'CycleGO'
				)
		) );
		/*Duree Cycle*/
		$this->add ( array (
				'name' => 'DureeCycleGO',
				'type' => 'text',
				'attributes' => array (
						'id' => 'DureeCycleGO'
				)
		) );
		/*Regularite cycle*/
		$this->add ( array (
				'name' => 'RegulariteCycleGO',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'value_options' => array (
								' ' => '',
								'1' => 'Oui',
								'0' => 'Non',
						)
				),
				'attributes' => array (
						'id' => 'RegulariteCycleGO'
				)
		) );
		/*Dysmenorrhee cycle*/
		$this->add ( array (
				'name' => 'DysmenorrheeCycleGO',
				'type' => 'Zend\Form\Element\Select',
				'options' => array (
						'value_options' => array (
								' ' => '',
								'1' => 'Oui',
								'0' => 'Non',
						)
				),
				'attributes' => array (
						'id' => 'DysmenorrheeCycleGO'
				)
		) );
		
		/*Autres*/
		$this->add ( array (
				'name' => 'AutresGO',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'AutresGO'
				)
		) );
		/*Note Autres*/
		$this->add ( array (
				'name' => 'NoteAutresGO',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteAutresGO'
				)
		) );
		/**** ANTECEDENTS FAMILIAUX ****/
		/**** ANTECEDENTS FAMILIAUX ****/
		
		/*Diabete*/
		$this->add ( array (
				'name' => 'DiabeteAF',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'DiabeteAF'
				)
		) );
		/*Asthme*/
		$this->add ( array (
				'name' => 'AsthmeAF',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'AsthmeAF'
				)
		) );
		/*Note Diabete*/
		$this->add ( array (
				'name' => 'NoteDiabeteAF',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteDiabeteAF'
				)
		) );
		
		/*Drepanocytose*/
		$this->add ( array (
				'name' => 'DrepanocytoseAF',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'DrepanocytoseAF'
				)
		) );
		/*Note Drepanocytose*/
		$this->add ( array (
				'name' => 'NoteDrepanocytoseAF',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteDrepanocytoseAF'
				)
		) );
		
		/*Note Asthme*/
		$this->add ( array (
				'name' => 'NoteAsthmeAF',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteAsthmeAF'
				)
		) );
		
		/*Note Dislipidémie*/
		$this->add ( array (
				'name' => 'NoteDislipAF',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteDislipAF'
				)
		) );
		
		
		/*HTA*/
		$this->add ( array (
				'name' => 'htaAF',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'htaAF'
				)
		) );
		/*Note HTA*/
		$this->add ( array (
				'name' => 'NoteHtaAF',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteHtaAF'
				)
		) );
		
		/*Autres*/
		$this->add ( array (
				'name' => 'autresAF',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'autresAF'
				)
		) );
		/*Note Autres*/
		$this->add ( array (
				'name' => 'NoteAutresAF',
				'type' => 'text',
				'attributes' => array (
						'id' => 'NoteAutresAF'
				)
		) );
		
		/*Autres*/
		$this->add ( array (
				'name' => 'dislipAF',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'dislipAF'
				)
		) );
		/**** TRAITEMENTS CHIRURGICAUX ****/
		/**** TRAITEMENTS CHIRURCICAUX ****/
		$this->add ( array (
				'name' => 'endoscopieInterventionnelle',
				'type' => 'Text',
				'options' => array (
						'label' => 'Endoscopie Interventionnelle :'
				),
				'attributes' => array (
						'id' => 'endoscopieInterventionnelle',
				)
		) );
		
		$this->add ( array (
				'name' => 'radiologieInterventionnelle',
				'type' => 'Text',
				'options' => array (
						'label' => 'Radiologie Interventionnelle :'
				),
				'attributes' => array (
						'id' => 'radiologieInterventionnelle',
				)
		) );
		
		$this->add ( array (
				'name' => 'cardiologieInterventionnelle',
				'type' => 'Text',
				'options' => array (
						'label' => 'Cardiologie Interventionnelle :'
				),
				'attributes' => array (
						'id' => 'cardiologieInterventionnelle',
				)
		) );
		
		$this->add ( array (
				'name' => 'autresIntervention',
				'type' => 'Text',
				'options' => array (
						'label' => 'Autres interventions:'
				),
				'attributes' => array (
						'id' => 'autresIntervention',
				)
		) );

		
		
		
		
		
		////PARTIE ORL --- PARTIE ORL --- PARTIE ORL
		
		/************* PARAMETRES DU DOSSIER TYROIDE *************/
		/* peau cervico-fascial */
		$this->add ( array (
				'name' => 'peau_cervico_fascial',
				'type' => 'Text',
				'options' => array (
						'label' => 'Peau Cervico Fascial :'
				),
				'attributes' => array (
						'readonly' => 'readonly',
						'id' => 'peau_cervico_fascial'
				)
		) );

		
		//------------------------------------ BON ------------------------
		$this->add ( array (
				'name' => 'irradiation_cervical_anterieur',
				'type' => 'Select',
				'options' => array (
						//'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Irradiation cervicale antérieure :' ),
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'irradiation_cervical_anterieur',
						'registerInArrrayValidator' => true,
						'onchange' => 'getIrradiation(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'goitre_atcd',
				'type' => 'Select',
				'options' => array (
					'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
					)
				),
				'attributes' => array (
						'id' => 'goitre_atcd',
						'registerInArrrayValidator' => true,
						'onchange' => 'getGoitre(this.value)',
				)
		) );
		/*Autre antécédent*/
		$this->add ( array (
				'name' => 'autresAntecedent',
				'type' => 'text',
				'attributes' => array (
						'id' => 'autresAntecedent',
						'maxlength' => 13,
				)
		) );
		/* tuméfaction cervicale antérieure */
		$this->add ( array (
				'name' => 'tumefaction_cervical_anterieur',
				'type' => 'Select',
				'options' => array (
					'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
					)
				),
				'attributes' => array (
						'id' => 'tumefaction_cervical_anterieur',
						'registerInArrrayValidator' => true,
						'onchange' => 'getTumefaction(this.value)',
				)
		) );
		/* signes de thyroxicose */
		$this->add ( array (
				'name' => 'signes_thyroxicose',
				'type' => 'Select',
				'options' => array (
					'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
					)
				),
				'attributes' => array (
						'id' => 'signes_thyroxicose',
						'registerInArrrayValidator' => true,
						'onchange' => 'getSignesThyroxicose(this.value)',
				)
		) );
		/* signes de compression */
		$this->add ( array (
				'name' => 'signe_compression',
				'type' => 'Select',
				'options' => array (
					'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
					)
				),
				'attributes' => array (
						'id' => 'signe_compression',
						'registerInArrrayValidator' => true,
						'onchange' => 'getSigneCompression(this.value)',
				)
		) );
		/* Dysphagie */
		
		$this->add ( array (
				'name' => 'groupeIa',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIa',
				)
		) );
		/* Dysfonie */
		$this->add ( array (
				'name' => 'groupeIb',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIb',
				)
		) );
		/* Dyspnee */
		$this->add ( array (
				'name' => 'groupeIc',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIc',
				)
		) );
		$this->add ( array (
				'name' => 'autresMotifHospitalisation',
				'type' => 'text',
				'attributes' => array (
						'id' => 'autresMotifHospitalisation',
						'maxlength' => 13,
				)
		) );
		/*histoire de la maladie */
		$this->add ( array (
				'name' => 'histoire_maladie',
				'type' => 'Textarea',
				
				'attributes' => array (
						'id' => 'histoire_maladie'
				)
		) );
		
		
		/*notes médicales */
		$this->add ( array (
				'name' => 'nouvelle_note_medicale',
				'type' => 'Textarea',
				
				'attributes' => array (
						'id' => 'nouvelle_note_medicale'
				)
		) );
		
		/*Antécédent chirugicaux */
		$this->add ( array (
				'name' => 'ant_chirurgicaux',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Atécédents chirurgicaux' )
				),
				'attributes' => array (
						'id' => 'ant_chirurgicaux'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'antecedents_specifiques',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Antécédents spécifiques' )
				),
				'attributes' => array (
						'id' => 'antecedents_specifiques'
				)
		) );
		
		$this->add ( array (
				'name' => 'examen_complementaire',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Examen complémentaire' )
				),
				'attributes' => array (
						'id' => 'examen_complementaire'
				)
		) );
		/*taille thyroide */
		$this->add ( array (
				'name' => 'taille_tyroide',
				'type' => 'Textarea',
				'options' => array (
					   'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'taille tyroide(en cm) ' )
				),
				'attributes' => array (
						'id' => 'taille_tyroide'
				)
		) );
		
		$this->add ( array (
				'name' => 'fermeture',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fermeture :' )
				),
				'attributes' => array (
						'id' => 'fermeture'
				)
		) );
		
		/* dépigmentation artificielle */
		$this->add ( array (
				'name' => 'depigmentation_artificielle',
				'type' => 'Select',
				'options' => array (
					'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
					)
				),
				'attributes' => array (
						'id' => 'depigmentation_artificielle',
						'registerInArrrayValidator' => true,
						'onchange' => 'getDepigmentation(this.value)',
				)
		) );
		/* cicatrices-taches-fistules */
		$this->add ( array (
				'name' => 'cicatrices_taches_fistules',
				'type' => 'Select',
				'options' => array (
					'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
					)
				),
				'attributes' => array (
						'id' => 'cicatrices_taches_fistules',
						'registerInArrrayValidator' => true,
						'onchange' => 'getCicatrices(this.value)',
				)
		) );
		/********* Hypertrophie **********/
		$this->add ( array (
			'name' => 'hypertrophie_globale',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'hypertrophie_globale',
					'registerInArrrayValidator' => true,
					'onchange' => 'getHypertrophieGlobale(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'hypertrophie_localise',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Droite' ),
						'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Gauche' ),
						'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'Médiane' ),
						'4' => iconv ( 'ISO-8859-1', 'UTF-8', 'Toto Glandulaire' ),
				)
			),
			'attributes' => array (
					'id' => 'hypertrophie_localise',
					'registerInArrrayValidator' => true,
					'onchange' => 'getHypertrophieLocalise(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'hypertrophie_nodulaire',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'hypertrophie_nodulaire',
					'registerInArrrayValidator' => true,
					'onchange' => 'getHypertrophieNodulaire(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'hypertrophie_sensibilite',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'hypertrophie_sensibilite',
					'registerInArrrayValidator' => true,
					'onchange' => 'getSensibilite(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'consistance',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'ferme' => iconv ( 'ISO-8859-1', 'UTF-8', 'Ferme' ),
						'dure' => iconv ( 'ISO-8859-1', 'UTF-8', 'Dure' ),
						'elastique' => iconv ( 'ISO-8859-1', 'UTF-8', 'Elastique' ),
						'renitente' => iconv ( 'ISO-8859-1', 'UTF-8', 'Rénitente' ),
				)
			),
			'attributes' => array (
					'id' => 'consistance',
					'registerInArrrayValidator' => true,
					'onchange' => 'getConsistance(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'mobilite_transversale',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'mobilite_transversale',
					'registerInArrrayValidator' => true,
					'onchange' => 'getMobiliteTransversale(this.value)',
			)
		) );
		/* les groupes ganglionnaires cervicaux */
		$this->add ( array (
				'name' => 'groupeI',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeI',
				)
		) );
				$this->add ( array (
				'name' => 'groupeIIa',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIa'
				)
		) );
			$this->add ( array (
				'name' => 'groupeIIb',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIb'
				)
		) );
		$this->add ( array (
				'name' => 'groupeIII',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIII'
				)
		) );
		$this->add ( array (
		'name' => 'groupeIV',
		'type' => 'checkbox',
		'attributes' => array (
				'id' => 'groupeIV'
		)
		) );
		$this->add ( array (
				'name' => 'groupeV',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeV'
				)
		) );
				$this->add ( array (
				'name' => 'groupeVI',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeVI'
				)
		) );
				$this->add ( array (
						'name' => 'libre',
						'type' => 'Select',
						'options' => array (
								'value_options' => array (
										'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
										'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
								)
						),
						'attributes' => array (
								'id' => 'libre',
								'registerInArrrayValidator' => true,
								'onchange' => 'getLibre(this.value)',
						)
				) );
				$this->add ( array (
						'name' => 'atteinte',
						'type' => 'Select',
						'options' => array (
								'value_options' => array (
										'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
										'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
								)
						),
						'attributes' => array (
								'id' => 'atteinte',
								'registerInArrrayValidator' => true,
								'onchange' => 'getLabelAtteinte(this.value)',
						)
				) );
		/* hormones tyroidiennes */
		$this->add ( array (
				'name' => 't3',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'T3 : ' )
				),
				'attributes' => array (
						'id' => 't3'
				)
		) );

		$this->add ( array (
				'name' => 't4',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'T4 : ' )
				),
				'attributes' => array (
						'id' => 't4'
				)
		) );

		$this->add ( array (
				'name' => 'tsh',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TSH : ' )
				),
				'attributes' => array (
						'id' => 'tsh'
				)
		) );
		/* les hormones thyrïdiennes */
		$this->add ( array (
				'name' => 'groupeIIIa',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIIa',
				)
		) );
		$this->add ( array (
				'name' => 'groupeIIIb',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIIb',
				)
		) );
	    $this->add ( array (
				'name' => 'groupeIIIc',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIIc',
				)
		) );
		$this->add ( array (
				'name' => 'cytologie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Cytologie :' )
				),
				'attributes' => array (
						'id' => 'cytologie',
						//'style' => 'height: 90px;'
				)
		) );
		$this->add ( array (
				'name' => 'autres',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autres :' )
				),
				'attributes' => array ( 
						'id' => 'autres'
				)
		) );
		$this->add ( array (
				'name' => 'echographie_cervicale',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'echographie_cervicale :' )
				),
				'attributes' => array (
						'id' => 'echographie_cervicale'
				)
		) );
		/** LES INFORMATIONS OPERATOIRES **/
		$this->add ( array (
				'name' => 'indication_preoperatoire',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Indication Pré-opératoire')
				),
				'attributes' => array (
						'id' => 'indication_preoperatoire',
						//'required' => true,
    				    'tabindex' => 2,
				)
		) );
		$this->add ( array (
				'name' => 'indication_peroperatoire',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Indication Per-opératoire')
				),
				'attributes' => array (
						'id' => 'indication_peroperatoire',
						//'required' => true,
    				    'tabindex' => 2,
				)
		) );
		$this->add ( array (
				'name' => 'incident_anesthesique',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
							'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
							'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'incident_anesthesique',
						'registerInArrrayValidator' => true,
						'onchange' => 'getIncidentAnesthesique(this.value)',
				)
		) );
	/*incident_hemographique*/
				$this->add ( array (
				'name' => 'groupeIVb',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIVb',
				)
		) );
	/*incident_nerveux*/
				$this->add ( array (
				'name' => 'groupeIVa',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIVa',
				)
		) );
				/*incident_chirurgicaux*/
		$this->add ( array (
				'name' => 'incident_chirurgicaux',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'incident_chirurgicaux',
						'registerInArrrayValidator' => true,
						'onchange' => 'getIncidentChirurgicaux(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'incident_glandulaire',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'incident_glandulaire',
						'registerInArrrayValidator' => true,
						'onchange' => 'getIncidentGlandulaire(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'incident_tracheotomie',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'incident_tracheotomie',
						'registerInArrrayValidator' => true,
						'onchange' => 'getIncidentracheotomie(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'anesthesie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Anesthésie :' )
				),
				'attributes' => array (
						'id' => 'anesthesie'
				)
		) );
		$this->add ( array (
				'name' => 'incision',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Incision :' )
				),
				'attributes' => array ( 
						'id' => 'incision'
				)
		) );
		$this->add ( array (
				'name' => 'exploitation',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Exploitation :' )
				),
				'attributes' => array (
						'id' => 'exploitation'
				)
		) );
		$this->add ( array (
				'name' => 'description_piece',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Description de la pièce :' )
				),
				'attributes' => array ( 
						'id' => 'description_piece'
				)
		) );
		$this->add ( array (
			'name' => 'geste_sur_nerf',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
				'id' => 'geste_sur_nerf',
				'registerInArrrayValidator' => true,
				'onchange' => 'getGesteSurNerf(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'loboithmectomie',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'loboithmectomie',
					'registerInArrrayValidator' => true,
					'onchange' => 'getLoboithmectomie(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'ithmectomie',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'ithmectomie',
					'registerInArrrayValidator' => true,
					'onchange' => 'getIthmectomie(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'thyroidectomie_subtotale',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'thyroidectomie_subtotale',
					'registerInArrrayValidator' => true,
					'onchange' => 'getThyroidectomieSubtotale(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'thyroidectomie_totale',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'thyroidectomie_totale',
					'registerInArrrayValidator' => true,
					'onchange' => 'getThyroidectomieTotale(this.value)',
			)
		) );
		$this->add ( array (
			'name' => 'glande_parathyroide',
			'type' => 'Select',
			'options' => array (
				'value_options' => array (
						'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
						'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
				)
			),
			'attributes' => array (
					'id' => 'glande_parathyroide',
					'registerInArrrayValidator' => true,
					'onchange' => 'getGlandeParathyroide(this.value)',
			)
		) );
		$this->add ( array (
				'name' => 'fermeture',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fermeture :' )
				),
				'attributes' => array ( 
						'id' => 'fermeture'
				)
		) );
		$this->add ( array (
				'name' => 'calcemie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Calcémie (thyroidectomie totale) :' )
				),
				'attributes' => array ( 
						'id' => 'calcemie'
				)
		) );
		$this->add ( array (
				'name' => 'laryngectomie_indirecte',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Laryngescopie indirecte:' )
				),
				'attributes' => array ( 
						'id' => 'laryngectomie_indirecte'
				)
		) );
		$this->add ( array (
				'name' => 'ablation_drain',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Ablation drain :' )
				),
				'attributes' => array ( 
						'id' => 'ablation_drain'
				)
		) );
		$this->add ( array (
				'name' => 'ablation_fil',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Ablation fil :' )
				),
				'attributes' => array ( 
						'id' => 'ablation_fil'
				)
		) );
		$this->add ( array (
				'name' => 'accident_hemoragie',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'accident_hemoragie',
						'registerInArrrayValidator' => true,
						'onchange' => 'getAccidentHemoragie(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'accident_infectieux',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'accident_infectieux',
						'registerInArrrayValidator' => true,
						'onchange' => 'getAccidentInfectieux(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'autresAccident',
				'type' => 'text',
				'attributes' => array (
						'id' => 'autresAccident',
						'maxlength' => 13,
				)
		) );
		$this->add ( array (
				'name' => 'histologie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Histologie:' )
				),
				'attributes' => array ( 
						'id' => 'histologie'
				)
		) );
		$this->add ( array (
				'name' => 'plainte',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Plainte:' )
				),
				'attributes' => array ( 
						'id' => 'plainte'
				)
		) );
		$this->add ( array (
				'name' => 'qualite_voix_parlee',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Qualité voix parlée:' )
				),
				'attributes' => array ( 
						'id' => 'qualite_voix_parlee'
				)
		) );
		$this->add ( array (
				'name' => 'qualite_voix_chantee',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Qualité voix chantée:' )
				),
				'attributes' => array ( 
						'id' => 'qualite_voix_chantee'
				)
		) );
		$this->add ( array (
				'name' => 'qualite_cicatrice',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Qualité cicatrice:' )
				),
				'attributes' => array ( 
						'id' => 'qualite_cicatrice'
				)
		) );
		$this->add ( array (
				'name' => 'laryngoscopie_indirecte',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Laryngoscopie indirecte:' )
				),
				'attributes' => array ( 
						'id' => 'laryngoscopie_indirecte'
				)
		) );
		
		$this->add ( array (
				'name' => 'reste_examen_clinique',
				'type' => 'Textarea',
				
				'attributes' => array (
						'id' => 'reste_examen_clinique'
				)
		) );
		
		
		
		
		$this->add ( array (
				'name' => 'tdm_rochers',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TDM des rochers  :' )
				),
				'attributes' => array (
						'id' => 'tdm_rochers',
						
				)
		) );
		

		
		$this->add ( array (
				'name' => 'palpation_cou',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Palpation du cou :' )
				),
				'attributes' => array ( 
						'id' => 'palpation_cou'
				)
		) );
		$this->add ( array (
				'name' => 'radiographie_pulmonaire',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Radiographie pulmonaire(cancers):' )
				),
				'attributes' => array ( 
						'id' => 'radiographie_pulmonaire'
				)
		) );
		
		
		
		
		
		/*********** Dossier Tumeur parotidienne ********/
		
		$this->add ( array (
				'name' => 'tumefaction_parotidienne',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'petite' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'moyenne' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'énorme' ),
						)
				),
				'attributes' => array (
						'id' => 'tumefaction_parotidienne',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		
		$this->add ( array (
				'name' => 'paralysie_faciale_peripherique',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'paralysie_faciale_peripherique',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getSignesThyroxicose(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'adenopathie',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'adenopathie',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getSignesThyroxicose(this.value)',
				)
		) );
		
// 		$this->add ( array (
// 				'name' => 'autresMotifConsTumeur',
// 				'type' => 'text',
// 				'attributes' => array (
// 						'id' => 'autresMotifConsTumeur',
// 						'maxlength' => 13,
// 				)
// 		) );
		
		$this->add ( array (
				'name' => 'siege_parotidienne',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'sous lobulaire' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'sous-angulo-maxillaire' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'pré tragienne' ),
								//'4' => iconv ( 'ISO-8859-1', 'UTF-8', 'Localisé' ),
						)
				),
				'attributes' => array (
						'id' => 'siege_parotidienne',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'consistance_paro',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'ferme' => iconv ( 'ISO-8859-1', 'UTF-8', 'ferme' ),
								'dure' => iconv ( 'ISO-8859-1', 'UTF-8', 'dure' ),
								'pierreuse' => iconv ( 'ISO-8859-1', 'UTF-8', 'pierreuse' ),
								'elastique' => iconv ( 'ISO-8859-1', 'UTF-8', 'élastique' ),
								'renitente' => iconv ( 'ISO-8859-1', 'UTF-8', 'rénitente' ),
								'molle' => iconv ( 'ISO-8859-1', 'UTF-8', 'molle' ),
						)
				),
				'attributes' => array (
						'id' => 'consistance_paro',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getConsistance(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'surface_paro',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'lisse' => iconv ( 'ISO-8859-1', 'UTF-8', 'lisse' ),
								'lobulee' => iconv ( 'ISO-8859-1', 'UTF-8', 'lobulée' ),
								'nodulaire' => iconv ( 'ISO-8859-1', 'UTF-8', 'nodulaire' ),
								'granitee' => iconv ( 'ISO-8859-1', 'UTF-8', 'granitée' ),
								
						)
				),
				'attributes' => array (
						'id' => 'surface_paro',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getConsistance(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'indolence_paro',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'douloureuse' => iconv ( 'ISO-8859-1', 'UTF-8', 'douloureuse' ),
								'indolore' => iconv ( 'ISO-8859-1', 'UTF-8', 'indolore' ),
								//'sensible' => iconv ( 'ISO-8859-1', 'UTF-8', 'sensible' ),
							
		
						)
				),
				'attributes' => array (
						'id' => 'indolence_paro',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getConsistance(this.value)',
				)
		) );
		
		
		$this->add ( array (
				'name' => 'taille_mensuration',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Mensuration(en cm) ' )
				),
				'attributes' => array (
						'id' => 'taille_mensuration'
				)
		) );
		
		$this->add ( array (
				'name' => 'peau_cervico_faciale',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Peau cervico faciale:' )
				),
				'attributes' => array (
						'id' => 'peau_cervico_faciale'
				)
		) );
		
		
				$this->add ( array (
						'name' => 'autres_peau',
						'type' => 'text',
						'attributes' => array (
								'id' => 'autres_peau',
								'maxlength' => 30,
						)
				) );
		
		
		
		$this->add ( array (
				'name' => 'cavite_bucale',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Cavité buccale et Oropharynx  :' )
				),
				'attributes' => array (
						'id' => 'cavite_bucale',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'oropharynx',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oropharynx :' )
				),
				'attributes' => array (
						'id' => 'oropharynx',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'fosses_nasales',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fosses nasales :' )
				),
				'attributes' => array (
						'id' => 'fosses_nasales',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'li',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'LI :' )
				),
				'attributes' => array (
						'id' => 'li',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'aires_ganglionnaires',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Aires ganglionnaire :' )
				),
				'attributes' => array (
						'id' => 'aires_ganglionnaires',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'paires_cranienne',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Paires crâniennes :' )
				),
				'attributes' => array (
						'id' => 'paires_cranienne',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'pfp',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'pfp',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getLibre(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'otoscopie',
				'type' => 'Textarea',
		
				'attributes' => array (
						'id' => 'otoscopie'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'echographie_parotidienne',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Echographie parotidienne :' )
				),
				'attributes' => array (
						'id' => 'echographie_parotidienne',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'citoponction',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Citoponction :' )
				),
				'attributes' => array (
						'id' => 'citoponction',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'autres_examen_para',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autres :' )
				),
				'attributes' => array (
						'id' => 'autres_examen_para',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'paralysie_faciale',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Paralysie faciale :' )
				),
				'attributes' => array (
						'id' => 'paralysie_faciale',
						//'style' => 'height: 90px;'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'syndrome_frey',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Syndrome de Frey :' )
				),
				'attributes' => array (
						'id' => 'syndrome_frey',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'autres_suites',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autres :' )
				),
				'attributes' => array (
						'id' => 'autres_suites',
						//'style' => 'height: 90px;'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'cro_paro',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Compte rendu opératoire:' )
				),
				'attributes' => array (
						'id' => 'cro_paro'
				)
		) );
		
		$this->add ( array (
				'name' => 'paralisie_faciale',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'paralisie_faciale',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getAccidentHemoragie(this.value)',
				)
		) );
		
		
		$this->add ( array (
				'name' => 'infection',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'infection',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getAccidentHemoragie(this.value)',
				)
		) );
		
		
		$this->add ( array (
				'name' => 'date_sortie',
				'type' => 'Date',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Date sortie'),
				),
				'attributes' => array (
						
						//'onchange' => 'getListeDateFin(this.value)',
						'id' =>'date_sortie',
						'min' => '2016-08-24',
						'max' => "",
						//'required' => true,
				)
		) );
		
		
		$this->add ( array (
				'name' => 'date_intervenu',
				'type' => 'Date',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Date intervention'),
				),
				'attributes' => array (
						
						//'onchange' => 'getListeDateFin(this.value)',
						'id' =>'date_intervenu',
						'min' => '2016-08-24',
						'max' => "",
						//'required' => true,
				)
		) );
		
		
		

		$this->add ( array (
				'name' => 'incidents_paro',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Incidents:' )
				),
				'attributes' => array (
						'id' => 'incidents_paro'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'suites_simples',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
					    'id' => 'suites_simples',
					    'registerInArrrayValidator' => true,
				        'onchange' => 'getLibre(this.value)',
				)
		) );
		
		
		

		$this->add ( array (
				'name' => 'suites_compliquees',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'suites_compliquees',
						'registerInArrrayValidator' => true,
						'onchange' => 'getSuitesCompliquees(this.value)',
				)
		) );
		
		
		
		
		$this->add ( array (
				'name' => 'groupeItum',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeItum',
				)
		) );
		$this->add ( array (
				'name' => 'groupeIIatum',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIatum'
				)
		) );
		$this->add ( array (
				'name' => 'groupeIIbtum',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'groupeIIbtum'
				)
		) );
		$this->add ( array (
				'name' => 'groupeIIItum',
				'type' => 'text',
				'attributes' => array (
						'id' => 'groupeIIItum'
				)
		) );
		
		
		
		
		/*Sous Dossier Corps Etranger*/
		
		$this->add ( array (
				'name' => 'duree_sejour',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Durée de séjour:' )
				),
				'attributes' => array (
						'id' => 'duree_sejour'
				)
		) );
		
		$this->add ( array (
				'name' => 'oreille',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Droite' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Gauche' ),
								
						)
				),
				'attributes' => array (
						'id' => 'oreille',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'fosse_nasale',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Droite' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Gauche' ),
								
						)
				),
				'attributes' => array (
						'id' => 'fosse_nasale',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'pharynx_corps',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Pharynx :' )
				),
				'attributes' => array (
						'id' => 'pharynx_corps',
						//'style' => 'height: 90px;'
				)
		) );
		$this->add ( array (
				'name' => 'vri_corps',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'V.R.I :' )
				),
				'attributes' => array (
						'id' => 'vri_corps',
						//'style' => 'height: 90px;'
				)
		) );
		$this->add ( array (
				'name' => 'autre_localisation',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autre localisation :' )
				),
				'attributes' => array (
						'id' => 'autre_localisation',
						//'style' => 'height: 90px;'
				)
		) );
		$this->add ( array (
				'name' => 'type_corps_etranger',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Type de corps etranger:' )
				),
				'attributes' => array (
						'id' => 'type_corps_etranger'
				)
		) );
		$this->add ( array (
				'name' => 'nature_corps_etranger',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Végétal' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Métallique' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'Plastique' ),
						)
				),
				'attributes' => array (
						'id' => 'nature_corps_etranger',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		$this->add ( array (
				'name' => 'divers_corps',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Divers :' )
				),
				'attributes' => array (
						'id' => 'divers_corps',
						//'style' => 'height: 90px;'
				)
		) );

		
		$this->add ( array (
				'name' => 'mode_extraction',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'consultation(fauteuil)' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'bloc' ),

						)
				),
				'attributes' => array (
						'id' => 'mode_extraction',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'suites_simplece',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'suites_simplece',
						'registerInArrrayValidator' => true,
						'onchange' => 'getLibre(this.value)',
				)
		) );
		
		
		
		
		$this->add ( array (
				'name' => 'suite_compliqueesce',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'suite_compliqueesce',
						'registerInArrrayValidator' => true,
						'onchange' => 'getSuiteCompliqueesce(this.value)',
				)
		) );

		$this->add ( array (
				'name' => 'precision_suite',
				'type' => 'text',
				'attributes' => array (
						'id' => 'precision_suite'
				)
		) );
		

		
		$this->add ( array (
				'name' => 'cro_ce',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Compte rendu opératoire:' )
				),
				'attributes' => array (
						'id' => 'cro_ce'
				)
		) );
		
		
		/*Sous Dossier Cancer*/
		
		$this->add ( array (
				'name' => 'malade',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'déjà traité pour la même tumeur' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'jamais traité' ),
		
						)
				),
				'attributes' => array (
						'id' => 'malade',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		
		
		$this->add ( array (
				'name' => 'decouverte_examen',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'decouverte_examen',
						'registerInArrrayValidator' => true,
		
				)
		) );
		
		/* adenopathie cancer */
		$this->add ( array (
				'name' => 'adenopathie_cancer',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'adenopathie_cancer',
						'registerInArrrayValidator' => true,
						
				)
		) );
		
		/* tracheotomie en urgence cancer */
		$this->add ( array (
				'name' => 'tracheotomie_cancer',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'0' => iconv ( 'ISO-8859-1', 'UTF-8', 'Non' ),
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Oui' ),
						)
				),
				'attributes' => array (
						'id' => 'tracheotomie_cancer',
						'registerInArrrayValidator' => true,
						
				)
		) );
		
		/* signes fonnctionnels cancer */
		$this->add ( array (
				'name' => 'signes_fonctionnels_cancer',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Signes fonctionnels  :' )
				),
				'attributes' => array (
						'id' => 'signes_fonctionnels_cancer',
						//'style' => 'height: 90px;'
				)
		) );
		
		
		
		$this->add ( array (
				'name' => 'autres_motifLso',
				'type' => 'text',
				'attributes' => array (
						'id' => 'autres_motifLso',
						'maxlength' => 13,
				)
		) );
		
		
		$this->add ( array (
				'name' => 'date_apparitionC',
				'type' => 'date',
				'options' => array (
						//'label' => iconv('ISO-8859-1', 'UTF-8','Date d\'apparition du 1er symptôme'),
				),
				'attributes' => array (
						'registerInArrrayValidator' => true,
						//'onchange' => 'getListeDateFin(this.value)',
						'id' =>'date_apparitionC',
						'min' => '2016-08-24',
						'max' => "",
						//'required' => true,
				)
		) );
		
		
		$this->add ( array (
				'name' => 'peau_cervicoCan',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Peau cervico faciale  :' )
				),
				'attributes' => array (
						'id' => 'peau_cervicoCan',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'otoscopieCan',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Otoscopie  :' )
				),
				'attributes' => array (
						'id' => 'otoscopieCan',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'cavite_bucaleCan',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Cavité buccale et Oropharynx  :' )
				),
				'attributes' => array (
						'id' => 'cavite_bucaleCan',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'fosses_nasalesCan',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Fosses nasales  :' )
				),
				'attributes' => array (
						'id' => 'fosses_nasalesCan',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'liCan',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Li ou nasofibroscopie  :' )
				),
				'attributes' => array (
						'id' => 'liCan',
						//'style' => 'height: 90px;'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'reste_examen_cliniqueLso',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Reste examen clinique  :' )
				),
				'attributes' => array (
						'id' => 'reste_examen_cliniqueLso'
				)
		) );
		
		
		
		$this->add ( array (
				'name' => 'tdm_rocherslso',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TDM des rochers  :' )
				),
				'attributes' => array (
						'id' => 'tdm_rocherslso',
		
				)
		) );
		
		
		
		/* Oedeme */
		
		$this->add ( array (
				'name' => 'oedeme',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'oedeme',
				)
		) );
		/* Superficiel serpigineux */
		$this->add ( array (
				'name' => 'superficiel_serpigineux',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'superficiel_serpigineux',
				)
		) );
		/* Bien limité */
		$this->add ( array (
				'name' => 'bien_limite',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'bien_limite',
				)
		) );
		
		/*Keratosique */
		$this->add ( array (
				'name' => 'keratosique',
				'type' => 'checkbox',
				'attributes' => array (
						'id' => 'keratosique',
				)
		) );
		

		
		$this->add ( array (
				'name' => 'evolution_symptomatologie',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Evolution de la symptomatologie :' )
				),
				'attributes' => array (
						'id' => 'evolution_symptomatologie',
						//'style' => 'height: 90px;'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'aspect_cancer',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Ulcération' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Bourgeonnement ' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'Infiltration' ),
								'4' => iconv ( 'ISO-8859-1', 'UTF-8', 'Infiltration sous muqueuse' ),
								'5' => iconv ( 'ISO-8859-1', 'UTF-8', 'Muqueuse normale' ),
		
						)
				),
				'attributes' => array (
						'id' => 'aspect_cancer',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'zones_atteintes',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Point de départ précis' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Point de départ large ' ),		
						)
				),
				'attributes' => array (
						'id' => 'zones_atteintes',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );

		$this->add ( array (
				'name' => 'margelle',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'antérieure' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'latérale' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'Postérieure' ),
								'4' => iconv ( 'ISO-8859-1', 'UTF-8', 'Hémi' ),
								'5' => iconv ( 'ISO-8859-1', 'UTF-8', 'toto' ),
						)
				),
				'attributes' => array (
						'id' => 'margelle',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'larynx',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'sus glottique' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'glottique' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'sous glottique' ),
								'4' => iconv ( 'ISO-8859-1', 'UTF-8', 'pied bande' ),
								'5' => iconv ( 'ISO-8859-1', 'UTF-8', 'toto' ),
						)
				),
				'attributes' => array (
						'id' => 'larynx',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'hypopharynx',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'sinus piriforme' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'paroi latérale' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'paroi postérieure' ),
								'4' => iconv ( 'ISO-8859-1', 'UTF-8', 'Rétro-cricoïde' ),
								'5' => iconv ( 'ISO-8859-1', 'UTF-8', 'bouche oesophagienne' ),
						)
				),
				'attributes' => array (
						'id' => 'hypopharynx',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		
		$this->add ( array (
				'name' => 'vallecule',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Vallecule :' )
				),
				'attributes' => array (
						'id' => 'vallecule',
						//'style' => 'height: 90px;'
				)
		) );
		
		$this->add ( array (
				'name' => 'mur_pharyngo_larynge',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Mur pharyngo-larynge :' )
				),
				'attributes' => array (
						'id' => 'mur_pharyngo_larynge',
						//'style' => 'height: 90px;'
				)
		) );
		
		
		$this->add ( array (
				'name' => 'cartilages',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Cartilages:' )
				),
				'attributes' => array (
						'id' => 'cartilages'
				)
		) );
		
		$this->add ( array (
				'name' => 'membranes_laryngees',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Membranes laryngées :' )
				),
				'attributes' => array (
						'id' => 'membranes_laryngees'
				)
		) );
		
		$this->add ( array (
				'name' => 'loge_hte',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Loge HTE :' )
				),
				'attributes' => array (
						'id' => 'loge_hte'
				)
		) );
		
		$this->add ( array (
				'name' => 'pre_laryngee',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Pré-laryngée :' )
				),
				'attributes' => array (
						'id' => 'pre_laryngee'
				)
		) );
		
		$this->add ( array (
				'name' => 'peau_cancer',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Peau :' )
				),
				'attributes' => array (
						'id' => 'peau_cancer'
				)
		) );
		

		
		$this->add ( array (
				'name' => 'trachee',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Trachée :' )
				),
				'attributes' => array (
						'id' => 'trachee'
				)
		) );
		
		$this->add ( array (
				'name' => 'oesophage',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'OEsophage :' )
				),
				'attributes' => array (
						'id' => 'oesophage'
				)
		) );
		
		$this->add ( array (
				'name' => 'autres_extensions',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autres :' )
				),
				'attributes' => array (
						'id' => 'autres_extensions'
				)
		) );
		
		$this->add ( array (
				'name' => 'mobilite_cancer',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'MOB' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'DIM' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'FIX' ),
						)
				),
				'attributes' => array (
						'id' => 'mobilite_cancer',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'corde_vocale',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Droite' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Gauche' ),
						)
				),
				'attributes' => array (
						'id' => 'corde_vocale',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		$this->add ( array (
				'name' => 'arytenoide',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'Droite' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'Gauche' ),
						)
				),
				'attributes' => array (
						'id' => 'arytenoide',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		/*Dimensions */
		$this->add ( array (
				'name' => 'dimensions',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Dimensions(en cm) ' )
				),
				'attributes' => array (
						'id' => 'dimensions'
				)
		) );
		
		/*Autres caractères */
		$this->add ( array (
				'name' => 'autres_caractères',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autres caractères ' )
				),
				'attributes' => array (
						'id' => 'autres_caractères'
				)
		) );
		
		$this->add ( array (
				'name' => 'n',
				'type' => 'Select',
				'options' => array (
						'value_options' => array (
								'1' => iconv ( 'ISO-8859-1', 'UTF-8', 'clinique' ),
								'2' => iconv ( 'ISO-8859-1', 'UTF-8', 'droit' ),
								'3' => iconv ( 'ISO-8859-1', 'UTF-8', 'gauche' ),
						)
				),
				'attributes' => array (
						'id' => 'n',
						'registerInArrrayValidator' => true,
						//'onchange' => 'getHypertrophieLocalise(this.value)',
				)
		) );
		
		
		$this->add ( array (
				'name' => 'aires_ganglionnaires_cancer',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Aires ganglionnaires:' )
				),
				'attributes' => array (
						'id' => 'aires_ganglionnaires_cancer'
				)
		) );
		
		$this->add ( array (
				'name' => 'postOp_precoce',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Période postopératoire précoce :' )
				),
				'attributes' => array (
						'id' => 'postOp_precoce'
				)
		) );
		
		$this->add ( array (
				'name' => 'postOp_tardive',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Période postopératoire tardive :' )
				),
				'attributes' => array (
						'id' => 'postOp_tardive'
				)
		) );
		
		
		
		$this->add ( array (
				'name' => 'tdm_cervico_thoracique',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TDM cervico thoracique :' )
				),
				'attributes' => array (
						'id' => 'tdm_cervico_thoracique',
						//'style' => 'height: 90px;'
				)
		) );
		$this->add ( array (
				'name' => 'autres_result_exam',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Autres :' )
				),
				'attributes' => array (
						'id' => 'autres_result_exam'
				)
		) );
		$this->add ( array (
				'name' => 'tdm_sinus_face',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'TDM des sinus de la face :' )
				),
				'attributes' => array (
						'id' => 'tdm_sinus_face'
				)
		) );
		
		
		
		
		
		/*Avis RCP */
		$this->add ( array (
				'name' => 'avis_rcp',
				'type' => 'Textarea',
		
				'attributes' => array (
						'id' => 'avis_rcp'
				)
		) );
		
		
		/*CRO_LSO */
		$this->add ( array (
				'name' => 'cro_lso',
				'type' => 'Textarea',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Compte rendu opératoire:' )
				),
				'attributes' => array (
						'id' => 'cro_lso'
				)
		) );
		
		
		
		/*********** CAVITE BUCCALE- OROPHARYNX-nasopharynx ********/
		$this->add ( array (
				'name' => 'malade_deja_traitee',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Malade déjà traité pour la ême tumeur : ' )
				),
				'attributes' => array (
						'id' => 'malade_deja_traitee'
				)
		) );
		$this->add ( array (
				'name' => 'malade_jamais_traitee',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Malade jamais traitee : ' )
				),
				'attributes' => array (
						'id' => 'malade_jamais_traitee'
				)
		) );
		$this->add ( array (
				'name' => 'decouverte_examen_systematique',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Découverte d\'examen systématique :  ' )
				),
				'attributes' => array (
						'id' => 'decouverte_examen_systematique'
				)
		) );
		$this->add ( array (
				'name' => 'aeropathie',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Aeropathie (s) (siège) : ' )
				),
				'attributes' => array (
						'id' => 'aeropathie'
				)
		) );
		$this->add ( array (
				'name' => 'tracheotomie_en_urgence',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Trachéotomie en urgence : ' )
				),
				'attributes' => array (
						'id' => 'tracheotomie_en_urgence'
				)
		) );
		$this->add ( array (
				'name' => 'otite_serieuse',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Otite sérieuse : ' )
				),
				'attributes' => array (
						'id' => 'otite_serieuse'
				)
		) );
		
// 		$this->add ( array (
// 				'name' => 'signes_fonctionnels',
// 				'type' => 'Textarea',
// 				'options' => array (
// 						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Signes fonctionnels :' )
// 				),
// 				'attributes' => array (
// 						'id' => 'signes_fonctionnels'
// 				)
// 		) );
// 		$this->add ( array (
// 				'name' => 'evolution_symptomatologie',
// 				'type' => 'Textarea',
// 				'options' => array (
// 						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'Evolution symptomatologi ...' )
// 				),
// 				'attributes' => array (
// 						'id' => 'evolution_symptomatologie'
// 				)
// 		) );
		$this->add ( array (
				'name' => 'date_apparition_symptome',
				'type' => 'text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8', 'date d\'apparition 1er symptome' )
				),
				'attributes' => array (
						'id' => 'date_apparition_symptome'
				)
		) );
		/*section histoire de la maladie: debut des signes, TESC, traitements reçus,amelioration, aggravation, autres*/
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$this->add ( array (
				'name' => 'anesthesiste',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Anesthésiste')
				),
				'attributes' => array (
						'id' => 'anesthesiste',
						//'required' => true,
						'tabindex' => 1,
				)
		) );
		$this->add ( array (
				'name' => 'indication',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Indication')
				),
				'attributes' => array (
						'id' => 'indication',
						//'required' => true,
						'tabindex' => 2,
				)
		) );
		$this->add ( array (
				'name' => 'type_anesthesie',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Type d\'anesthésie')
				),
				'attributes' => array (
						'id' => 'type_anesthesie',
						//'required' => true,
						'tabindex' => 3,
				)
		) );
		$this->add ( array (
				'name' => 'protocole_operatoire',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Protocole opératoire')
				),
				'attributes' => array (
						'id' => 'protocole_operatoire',
						//'required' => true,
						'maxlength' => 1500,
						'tabindex' => 4,
				)
		) );
		$this->add ( array (
				'name' => 'soins_post_operatoire',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Soins post Opératoire')
				),
				'attributes' => array (
						'id' => 'soins_post_operatoire',
						'maxlength' => 400,
						//'required' => true,
						'tabindex' => 5,
				)
		) );
		
		$this->add ( array (
				'name' => 'operateur_aide',
				'type' => 'Select',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Opérateur')
				),
				'attributes' => array (
						'registerInArrrayValidator' => true,
						//'onchange' => 'getservice(this.value)',
						'id' => 'operateur_aide',
						'required' => true,
						
				)
		) );
		
		
// 		$this->add ( array (
// 				'name' => 'operateur',
// 				'type' => 'Select',
// 				'options' => array (
// 						'label' => iconv('ISO-8859-1', 'UTF-8','Opérateur (Dr.)')
// 				),
// 				'attributes' => array (
// 						'registerInArrrayValidator' => true,
// 						'onchange' => 'getservice(this.value)',
// 						'id' =>'operateur',
// 						'required' => true,
// 				)
// 		) );
		
		
		
		$this->add ( array (
				'name' => 'check_list_securite',
				'type' => 'Hidden',
				'attributes' => array (
						'id' => 'check_list_securite',
				)
		) );		
	
	
	
		//La liste des participants à l'opération
		//La liste des participants à l'opération
		$this->add ( array (
				'name' => 'aides_operateurs',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Aides opérateurs')
				),
				'attributes' => array (
						'id' => 'aides_operateurs',
						'tabindex' => 6,
				)
		) );
		//Les complications de l'opération
		//Les complications de l'opération
		$this->add ( array (
				'name' => 'complications',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Les complications')
				),
				'attributes' => array (
						'id' => 'complications',
						'maxlength' => 350,
						'tabindex' => 7,
				)
		) );
		//Note relative au protocole opératoire
		//Note relative au protocole opératoire
		$this->add ( array (
				'name' => 'note_audio_cro',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Note')
				),
				'attributes' => array (
						'id' => 'note_audio_cro',
						'maxlength' => 200,
						'tabindex' => 8,
				)
		) );
		
		
		
		
		$this->add ( array (
				'name' => 'numero_vpa',
				'type' => 'Text',
				'options' => array (
						'label' => iconv ( 'ISO-8859-1', 'UTF-8','Numéro VPA') ,
				),
				'attributes' => array (
						'id' => 'numero_vpa',
						//'required' => true
				)
		) );
		
		$this->add ( array (
				'name' => 'type_anesthesie',
				'type' => 'Text',
				'options' => array (
						'label' => "Type d'anesthesie",
				),
				'attributes' => array (
						'id' => 'type_anesthesie',
						//'required' => true
				)
		) );
		
		
		$this->add ( array (
				'name' => 'aides',
				'type' => 'TextArea',
				'options' => array (
						'label' => iconv('ISO-8859-1', 'UTF-8','Aides')
				),
				'attributes' => array (
						'id' => 'aides',
						'maxlength' => 400,
						//'required' => true,
						'tabindex' => 5,
				)
		) );
	
	
	
	
	
	
	
	
	}
}
