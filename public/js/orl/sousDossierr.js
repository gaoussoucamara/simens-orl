var i=0;
function sousDossier() {
	if(i == 0){
		$(function(){
	        $('#infos_tyroide_contenu_antecedent').toggle(false);
	        $('#infos_tyroide_contenu_motifs').toggle(false);
	        $('#infos_tyroide_contenu_histoireMaladie').toggle(false);
	        $('#infos_tyroide_contenu_peau').toggle(false);
	        $('#infos_tyroide_contenu_soustyroide').toggle(false);
	        $('#infos_tyroide_contenu_ganglions').toggle(false);
	        $('#infos_tyroide_contenu_examComplementair').toggle(false);
	        $('#infos_tyroide_contenu_surveillance').toggle(false);
	        $('#infos_tyroide_contenu_hormones').toggle(false);
	        $('#infos_tyroide_contenu_operation').toggle(false);
	        $('#infos_tyroide_contenu_parotidien').toggle(false);
	        $('#infos_tyroide_contenu_tesc').toggle(false);
	        $('#contenu_parotidien_operation').toggle(false);
	        $('#contenu_otologie').toggle(false);
	        $('#contenu_otologie_autres').toggle(false);
	        $('#contenu_pharynx').toggle(false);
	        $('#contenu_pharynx_lesionClinique').toggle(false);
	        $('#contenu_pharynx_histoireMaladie').toggle(false);
	        $('#contenu_pharynx_imagerie').toggle(false);
	        
	        animationPliantDepliant5();
	        animationPliantDepliant6();
	        animationPliantDepliant7();
	        animationPliantDepliant8();
	        animationPliantDepliant9();
	        animationPliantDepliant10();
	        animationPliantDepliant11();
	        animationPliantDepliant12();
	        animationPliantDepliant13();
	        animationPliantDepliant14();
	        animationPliantDepliant15();
	        animationPliantDepliant16();
	        animationPliantDepliant17();
	        animationPliantDepliant18();
	        animationPliantDepliant19();
	        animationPliantDepliant20();
	        animationPliantDepliant21();
	        animationPliantDepliant22();
	        animationPliantDepliant23();
	    });
		function depliantPlus14() {
	         $('#titre_info_parotidien').click(function(){
	           $("#titre_info_parotidien").replaceWith(
	             "<span class='titre_info_tyroide' id='titre_info_parotidien' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> CIRCONSTANCE DE DECOUVERTE "+
	               "</span>");
	           animationPliantDepliant14();
	           $('#infos_tyroide_contenu_parotidien').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant14() {
	      $('#titre_info_parotidien').click(function(){
	       $("#titre_info_parotidien").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_parotidien' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> CIRCONSTANCE DE DECOUVERTE "+
	           "</span>");
	       depliantPlus14();
	       $('#infos_tyroide_contenu_parotidien').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	    function depliantPlus15() {
	         $('#titre_info_tesc').click(function(){
	           $("#titre_info_tesc").replaceWith(
	             "<span class='titre_info_tyroide' id='titre_info_tesc' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> TEMPS D'EVOLUTION DE LA SYMPTOMATOLOGIE(TESC) "+
	               "</span>");
	           animationPliantDepliant15();
	           $('#infos_tyroide_contenu_tesc').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant15() {
		      $('#titre_info_tesc').click(function(){
		       $("#titre_info_tesc").replaceWith(
		         "<span class='titre_info_tyroide' id='titre_info_tesc' style='margin-left:-5px; cursor:pointer;'>" +
		         "<img src='../img/light/minus.png' /> TEMPS D'EVOLUTION DE LA SYMPTOMATOLOGIE(TESC) "+
		           "</span>");
		       depliantPlus15();
		       $('#infos_tyroide_contenu_tesc').animate({
		         height : 'toggle'
		       },1000);
		     });
		   }
	    
	    function depliantPlus16() {
	         $('#parotidien_operation').click(function(){
	           $("#parotidien_operation").replaceWith(
	             "<span class='titre_info_tyroide' id='parotidien_operation' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> INFORMATIONS OPERATOIRES "+
	               "</span>");
	           animationPliantDepliant16();
	           $('#contenu_parotidien_operation').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant16() {
		      $('#parotidien_operation').click(function(){
		       $("#parotidien_operation").replaceWith(
		         "<span class='titre_info_tyroide' id='parotidien_operation' style='margin-left:-5px; cursor:pointer;'>" +
		         "<img src='../img/light/minus.png' /> INFORMATIONS OPERATOIRES "+
		           "</span>");
		       depliantPlus16();
		       $('#contenu_parotidien_operation').animate({
		         height : 'toggle'
		       },1000);
		     });
		   }
	    
	    function depliantPlus17() {
	         $('#otologie').click(function(){
	           $("#otologie").replaceWith(
	             "<span class='titre_info_tyroide' id='otologie' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> CIRCONSTANCE DE DECOUVERTE "+
	               "</span>");
	           animationPliantDepliant17();
	           $('#contenu_otologie').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant17() {
	      $('#otologie').click(function(){
	       $("#otologie").replaceWith(
	         "<span class='titre_info_tyroide' id='otologie' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> CIRCONSTANCE DE DECOUVERTE "+
	           "</span>");
	       depliantPlus17();
	       $('#contenu_otologie').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }

	    function depliantPlus18() {
	         $('#otologie_autres').click(function(){
	           $("#otologie_autres").replaceWith(
	             "<span class='titre_info_tyroide' id='otologie_autres' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> AUTRES INFORMATIONS "+
	               "</span>");
	           animationPliantDepliant18();
	           $('#contenu_otologie_autres').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant18() {
	      $('#otologie_autres').click(function(){
	       $("#otologie_autres").replaceWith(
	         "<span class='titre_info_tyroide' id='otologie_autres' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> AUTRES INFORMATIONS "+
	           "</span>");
	       depliantPlus18();
	       $('#contenu_otologie_autres').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	    
	    function depliantPlus20() {
	         $('#pharynx_lesionClinique').click(function(){
	           $("#pharynx_lesionClinique").replaceWith(
	             "<span class='titre_info_tyroide' id='pharynx_lesionClinique' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> LESION CLINIQUE "+
	               "</span>");
	           animationPliantDepliant20();
	           $('#contenu_pharynx_lesionClinique').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant20() {
	      $('#pharynx_lesionClinique').click(function(){
	       $("#pharynx_lesionClinique").replaceWith(
	         "<span class='titre_info_tyroide' id='pharynx_lesionClinique' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> LESION CLINIQUE "+
	           "</span>");
	       depliantPlus20();
	       $('#contenu_pharynx_lesionClinique').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	    function depliantPlus19() {
	         $('#pharynx').click(function(){
	           $("#pharynx").replaceWith(
	             "<span class='titre_info_tyroide' id='pharynx' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> CIRCONSTANCE DE DECOUVERTE "+
	               "</span>");
	           animationPliantDepliant19();
	           $('#contenu_pharynx').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant19() {
	      $('#pharynx').click(function(){
	       $("#pharynx").replaceWith(
	         "<span class='titre_info_tyroide' id='pharynx' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> CIRCONSTANCE DE DECOUVERTE "+
	           "</span>");
	       depliantPlus19();
	       $('#contenu_pharynx').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	    
	    function depliantPlus21() {
	         $('#pharynx_histoireMaladie').click(function(){
	           $("#pharynx_histoireMaladie").replaceWith(
	             "<span class='titre_info_tyroide' id='pharynx_histoireMaladie' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> HISTOIRE DE LA MALADIE "+
	               "</span>");
	           animationPliantDepliant21();
	           $('#contenu_pharynx_histoireMaladie').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant21() {
	      $('#pharynx_histoireMaladie').click(function(){
	       $("#pharynx_histoireMaladie").replaceWith(
	         "<span class='titre_info_tyroide' id='pharynx_histoireMaladie' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> HISTOIRE DE LA MALADIE "+
	           "</span>");
	       depliantPlus21();
	       $('#contenu_pharynx_histoireMaladie').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	    function depliantPlus22() {
	         $('#pharynx_imagerie').click(function(){
	           $("#pharynx_imagerie").replaceWith(
	             "<span class='titre_info_tyroide' id='pharynx_imagerie' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> IMAGERIE "+
	               "</span>");
	           animationPliantDepliant22();
	           $('#contenu_pharynx_imagerie').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant22() {
	      $('#pharynx_imagerie').click(function(){
	       $("#pharynx_imagerie").replaceWith(
	         "<span class='titre_info_tyroide' id='pharynx_imagerie' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> IMAGERIE "+
	           "</span>");
	       depliantPlus22();
	       $('#contenu_pharynx_imagerie').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	    
	    
	    function depliantPlus5() {
	         $('#titre_info_antecedent').click(function(){
	           $("#titre_info_antecedent").replaceWith(
	             "<span class='titre_info_tyroide' id='titre_info_antecedent' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> ANTECEDENTS "+
	               "</span>");
	           animationPliantDepliant5();
	           $('#infos_tyroide_contenu_antecedent').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant5() {
	      $('#titre_info_antecedent').click(function(){
	       $("#titre_info_antecedent").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_antecedent' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> ANTECEDENTS "+
	           "</span>");
	       depliantPlus5();
	       $('#infos_tyroide_contenu_antecedent').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /**LISTE MOTIFS **/
	   function depliantPlus6() {
	       $('#titre_info_motifs').click(function(){
	       $("#titre_info_motifs").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_motifs' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> MOTIFS DE CONSULTATION "+
	             "</span>");
	         animationPliantDepliant6();
	         $('#infos_tyroide_contenu_motifs').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   function animationPliantDepliant6() {
	     $('#titre_info_motifs').click(function(){
	       $("#titre_info_motifs").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_motifs' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> MOTIFS DE CONSULTATION "+
	           "</span>");
	       depliantPlus6();
	       $('#infos_tyroide_contenu_motifs').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /** HISTOIRE DE LA MALADIE **/
	   function depliantPlus7() {
	       $('#titre_info_histoireMaladie').click(function(){
	       $("#titre_info_histoireMaladie").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_histoireMaladie' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> HISTOIRE DE LA MALADIE "+
	             "</span>");
	         animationPliantDepliant7();
	         $('#infos_tyroide_contenu_histoireMaladie').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   function animationPliantDepliant7() {
	     $('#titre_info_histoireMaladie').click(function(){
	       $("#titre_info_histoireMaladie").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_histoireMaladie' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> HISTOIRE DE LA MALADIE "+
	           "</span>");
	       depliantPlus7();
	       $('#infos_tyroide_contenu_histoireMaladie').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /** PEAU CERVICO-FASCIALE **/
	   function depliantPlus8() {
	       $('#titre_info_peau').click(function(){
	       $("#titre_info_peau").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_peau' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> PEAU CERVICO FACIALE "+
	             "</span>");
	         animationPliantDepliant8();
	         $('#infos_tyroide_contenu_peau').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   function animationPliantDepliant8() {
	     $('#titre_info_peau').click(function(){
	       $("#titre_info_peau").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_peau' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> PEAU CARVIICO FACIALE "+
	           "</span>");
	       depliantPlus8();
	       $('#infos_tyroide_contenu_peau').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /** TYROIDE **/
	   function depliantPlus9() {
	       $('#titre_info_soustyroide').click(function(){
	       $("#titre_info_soustyroide").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_soustyroide' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> GLANDE THYROIDE "+
	             "</span>");
	         animationPliantDepliant9();
	         $('#infos_tyroide_contenu_soustyroide').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   function animationPliantDepliant9() {
	     $('#titre_info_soustyroide').click(function(){
	       $("#titre_info_soustyroide").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_soustyroide' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> GLANDE THYROIDE"+
	           "</span>");
	       depliantPlus9();
	       $('#infos_tyroide_contenu_soustyroide').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /** LES GROUPES GANGLIONNAIRES CERVICAUX **/
	   function depliantPlus10() {
	       $('#titre_info_ganglions').click(function(){
	       $("#titre_info_ganglions").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_ganglions' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> AIRES GANGLIONNAIRES "+
	             "</span>");
	         animationPliantDepliant10();
	         $('#infos_tyroide_contenu_ganglions').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   /** LES GROUPES GANGLIONNAIRES CERVICAUX **/
	   function animationPliantDepliant10() {
	     $('#titre_info_ganglions').click(function(){
	       $("#titre_info_ganglions").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_ganglions' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> AIRES GANGLIONNAIRES"+
	           "</span>");
	       depliantPlus10();
	       $('#infos_tyroide_contenu_ganglions').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /** LES EXAMENS COMPLEMENTAIRES **/
	   function depliantPlus11() {
	       $('#titre_info_examComplementair').click(function(){
	       $("#titre_info_examComplementair").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_examComplementair' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> LES EXAMENS COMPLEMENTAIRES "+
	             "</span>");
	         animationPliantDepliant11();
	         $('#infos_tyroide_contenu_examComplementair').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   function animationPliantDepliant11() {
	     $('#titre_info_examComplementair').click(function(){
	       $("#titre_info_examComplementair").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_examComplementair' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> LES EXAMENS COMPLEMENTAIRES "+
	           "</span>");
	       depliantPlus11();
	       $('#infos_tyroide_contenu_examComplementair').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /** LES HORMONES TYROIDIENNES **/
	   function depliantPlus12() {
	       $('#titre_info_hormones').click(function(){
	       $("#titre_info_hormones").replaceWith(
	           "<span class='titre_info_tyroide' id='titre_info_hormones' style='margin-left:-5px; cursor:pointer;'>" +
	           "<img src='../img/light/plus.png' /> LES HORMONES TYROIDIENNES"+
	             "</span>");
	         animationPliantDepliant12();
	         $('#infos_tyroide_contenu_hormones').animate({
	           height : 'toggle'
	         },1000);
	       });
	   }
	   function animationPliantDepliant12() {
	     $('#titre_info_hormones').click(function(){
	       $("#titre_info_hormones").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_hormones' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> LES HORMONES TYROIDIENNES"+
	           "</span>");
	       depliantPlus12();
	       $('#infos_tyroide_contenu_hormones').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
	   /**COMPTE RENDU OPERATOIRE**/
	   function depliantPlus13() {
	         $('#titre_info_operation').click(function(){
	           $("#titre_info_operation").replaceWith(
	             "<span class='titre_info_tyroide' id='titre_info_operation' style='margin-left:-5px; cursor:pointer;'>" +
	             "<img src='../img/light/plus.png' /> COPMTE RENDU OPERATOIRE "+
	               "</span>");
	           animationPliantDepliant13();
	           $('#infos_tyroide_contenu_operation').animate({
	             height : 'toggle'
	           },1000);
	         });
	    }
	    function animationPliantDepliant13() {
	      $('#titre_info_operation').click(function(){
	       $("#titre_info_operation").replaceWith(
	         "<span class='titre_info_tyroide' id='titre_info_operation' style='margin-left:-5px; cursor:pointer;'>" +
	         "<img src='../img/light/minus.png' /> COMPTE RENDU OPERATOIRE "+
	           "</span>");
	       depliantPlus13();
	       $('#infos_tyroide_contenu_operation').animate({
	         height : 'toggle'
	       },1000);
	     });
	   }
		   /** LES EXAMENS COMPLEMENTAIRES **/
		   function depliantPlus23() {
		       $('#titre_info_surveillance').click(function(){
		       $("#titre_info_surveillance").replaceWith(
		           "<span class='titre_info_tyroide' id='titre_info_surveillance' style='margin-left:-5px; cursor:pointer;'>" +
		           "<img src='../img/light/plus.png' /> SURVEILLANCE "+
		             "</span>");
		         animationPliantDepliant23();
		         $('#infos_tyroide_contenu_surveillance').animate({
		           height : 'toggle'
		         },1000);
		       });
		   }
		   function animationPliantDepliant23() {
		     $('#titre_info_surveillance').click(function(){
		       $("#titre_info_surveillance").replaceWith(
		         "<span class='titre_info_tyroide' id='titre_info_surveillance' style='margin-left:-5px; cursor:pointer;'>" +
		         "<img src='../img/light/minus.png' /> SURVEILLANCE "+
		           "</span>");
		       depliantPlus23();
		       $('#infos_tyroide_contenu_surveillance').animate({
		         height : 'toggle'
		       },1000);
		     });
		   }
		i=1;
	}
}
$('.labelLibre').toggle(false);  
function getLabelLibre(val){
	if(val==1){
		$("#labelLibre span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#labelLibre span span").html("");
	}	
}
getLabelLibre($('#libre').val());

$('.labelAtteinte').toggle(false);
function getLabelAtteinte(val){ //alert(val);
	if(val==1){
		$("#labelAtteinte span span").html("<img src='../images_icons/tick-icon2.png' >");
		$('.labelAtteinte').fadeIn();
	}else{
		$("#labelAtteinte span span").html("");
		$('.labelAtteinte').fadeOut();
	}	
}
getLabelAtteinte($('#atteinte').val());
function getSousMentoMaxillaire(val){
	if(val==1){
		$("#SousMentoMaxillaire span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#SousMentoMaxillaire span span").html("");
	}	
}
function getJuguloCarotidien(val){
	if(val==1){
		$("#JuguloCarotidien span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#JuguloCarotidien span span").html("");
	}	
}
function getIrradiation(val){
	if(val==1){
		$("#irradiation span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#irradiation span span").html("");
	}
}

function getGoitre(val){
	if(val==1){
		$("#goitre span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#goitre span span").html("");
	}	
}
function getTumefaction(val){
	if(val==1){
		$("#tumefaction span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#tumefaction span span").html("");
	}	
}
getTumefaction($('#tumefaction_cervical_anterieur').val());
function getSignesThyroxicose(val){
	if(val==1){
		$("#signesThyroxicose span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#signesThyroxicose span span").html("");
	}	
}
getSignesThyroxicose($('#signes_thyroxicose').val());

$('.SigneCompression').toggle(false);
function getSigneCompression(val){ 
	if(val==1){
		$("#signeCompression span span").html("<img src='../images_icons/tick-icon2.png' >");
		$('.SigneCompression').fadeIn();
	}else{
		$("#signeCompression span span").html("");
		$('.SigneCompression').fadeOut();
	}	
}
getSigneCompression($('#signe_compression').val());//pour pouvoir visualiser les champs cach�s apr� avoir choisi oui
function getDysphagie(val){
	if(val==1){
		$("#dysphagie span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#dysphagie span span").html("");
	}	
}
function getDysfonie(val){
	if(val==1){
		$("#dysfonie span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#dysfonie span span").html("");
	}	
}
function getDyspnee(val){
	if(val==1){
		$("#dyspnee span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#dyspnee span span").html("");
	}	
}
function getDepigmentation(val){
	if(val==1){
		$("#depigmentation span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#depigmentation span span").html("");
	}	
}
getDepigmentation($('#depigmentation_artificielle').val());
function getCicatrices(val){
	if(val==1){
		$("#cicatrices span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#cicatrices span span").html("");
	}	
}
getCicatrices($('#cicatrices_taches_fistules').val());
function getHypertrophieGlobale(val){
	if(val==1){
		$("#globale span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#globale span span").html("");
	}	
}
function getHypertrophieLocalise(val){
	if(val==1 || val==2 || val==3 || val==4){
		$("#localise span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#localise span span").html("");
	}	
}
getHypertrophieLocalise($('#hypertrophie_localise').val());
function getHypertrophieNodulaire(val){
	if(val==1){
		$("#nodulaire span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#nodulaire span span").html("");
	}	
}
getHypertrophieNodulaire($('#hypertrophie_nodulaire').val());
function getHypertrophieSensibilite(val){
	if(val==1){
		$("#sensibilite span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#sensibilite span span").html("");
	}	
}
getHypertrophieSensibilite($('#hypertrophie_sensibilite').val());
function getConsistance(val){
	if(val==1 || val==2 || val==3 || val==4){
		$("#consistanceee span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#consistanceee span span").html("");
	}	
}
getConsistance($('#consistance').val());
function getMobiliteTransversale(val){
	if(val==1){
		$("#mobilite span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#mobilite span span").html("");
	}	
}
getMobiliteTransversale($('#mobilite_transversale').val());
function getGesteSurNerf(val){
	if(val==1){
		$("#gesteNerf span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#gesteNerf span span").html("");
	}	
}
getGesteSurNerf($('#geste_sur_nerf').val());

function getLoboithmectomie(val){
	if(val==1 || val==2 || val==3 || val==4 ){
		$("#labelLoboithmectomie span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#labelLoboithmectomie span span").html("");
	}	
}
getLoboithmectomie($('#loboithmectomie').val());
$('.labelIthmectomie').toggle(false);
function getIthmectomie(val){
	if(val==1){
		$("#labelIthmectomie span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#labelIthmectomie span span").html("");
	}	
}
getIthmectomie($('#ithmectomie').val());
function getThyroidectomieSubtotale(val){
	if(val==1){
		$("#thyroidectomieSubtotale span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#thyroidectomieSubtotale span span").html("");
	}	
}
getThyroidectomieSubtotale($('#thyroidectomie_subtotale').val());
function getThyroidectomieTotale(val){
	if(val==1){
		$("#thyroidectomieTotal span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#thyroidectomieTotal span span").html("");
	}	
}
getThyroidectomieTotale($('#thyroidectomie_totale').val());

function getGlandeParathyroide(val){
	if(val==1){
		$("#glandeParathyroides span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#glandeParathyroides span span").html("");
	}	
}
getGlandeParathyroide($('#glande_parathyroide').val());
$('.labelIncidentAnesthesique').toggle(false);
function getIncidentAnesthesique(val){
	if(val==1){
		$("#labelIncidentAnesthesique span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#labelIincidentAnesthesique span span").html("");
	}	
}
getIncidentAnesthesique($('#incident_anesthesique').val());
function getIncidentHemoragique(val){
	if(val==1){
		$("#incidentHemoragique span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#incidentHemoragique span span").html("");
	}	
}
function getIncidentNerveux(val){
	if(val==1){
		$("#incidentNerveux span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#incidentNerveux span span").html("");
	}	
}
$('.incidentChirurgicaux').toggle(false);
function getIncidentChirurgicaux(val){ 
	if(val==1){
		$("#incidentChirurgicaux span span").html("<img src='../images_icons/tick-icon2.png' >");
		$('.incidentChirurgicaux').fadeIn();
	}else{
		$("#incidentChirurgicaux span span").html("");
		$('.incidentChirurgicaux').fadeOut();
	}	
}
getIncidentChirurgicaux($('#incident_chirurgicaux').val()); //r�cup�ration de la valeur oui pour pouvoir afficher les 2 champs(nerveux..)

$('.incidentGlandulaire ').toggle(false);
function getIncidentGlandulaire(val){
	if(val==1){
		$("#incidentGlandulaire span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#incidentGlandulaire span span").html("");
	}	
}
getIncidentGlandulaire($('#incident_glandulaire').val());
$('.incidentTracheotomie').toggle(false);
function getIncidentracheotomie(val){
	if(val==1){
		$("#incidentTracheotomie span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#incidentTracheotomie span span").html("");
	}	
}
getIncidentracheotomie($('#incident_tracheotomie').val());
function getAccidentHemoragie(val){
	if(val==1){
		$("#accidentHemoragie span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#accidentHemoragie span span").html("");
	}	
}
function getAccidentInfectieux(val){
	if(val==1){
		$("#accidentInfectieux span span").html("<img src='../images_icons/tick-icon2.png' >");
	}else{
		$("#accidentInfectieux span span").html("");
	}	
}






$('.SuitesCompliquees').toggle(false);
function getSuitesCompliquees(val){ 
	if(val==1){
		$("#suitesCompliquees span span").html("<img src='../images_icons/tick-icon2.png' >");
		$('.SuitesCompliquees').fadeIn();
	}else{
		$("#suitesCompliquees span span").html("");
		$('.SuitesCompliquees').fadeOut();
	}	
}
getSuitesCompliquees($('#suites_compliquees').val());//pour pouvoir visualiser les champs cach�s apr� avoir choisi oui


$('.SuiteCompliqueesce').toggle(false);
function getSuiteCompliqueesce(val){ 
	if(val==1){
		$("#suiteCompliqueesce span span").html("<img src='../images_icons/tick-icon2.png' >");
		$('.SuiteCompliqueesce').fadeIn();
	}else{
		$("#suiteCompliqueesce span span").html("");
		$('.SuiteCompliqueesce').fadeOut();
	}	
}
getSuiteCompliqueesce($('#suite_compliqueesce').val());

/////// POP UP





function imprimerCROF(){
	var id_patient = $('#id_patient').val();
	var id_admission = $('#id_admission').val();
	var anesthesiste = $('#anesthesiste').val();
	var indication = $('#indication').val();
	var intervention_prevue = $('#intervention_prevue').val();
	var type_anesthesie = $('#type_anesthesie').val();
	var numero_vpa = $('#numero_vpa').val();
	var protocole_operatoire = $('#protocole_operatoire').val();
	var soins_post_operatoire = $('#soins_post_operatoire').val();
	var vart =  tabUrl[0]+'public/orl/imprimer-protocole-operatoireF';
	var FormulaireImprimerProtocoleOperatoire = document.getElementById("FormulaireImprimerProtocoleOperatoire");
	FormulaireImprimerProtocoleOperatoire.setAttribute("action", vart);
	FormulaireImprimerProtocoleOperatoire.setAttribute("method", "POST");
	FormulaireImprimerProtocoleOperatoire.setAttribute("target", "_blank");
	
	// Ajout dynamique de champs dans le formulaire
	var champ = document.createElement("input");
	champ.setAttribute("type", "hidden");
	champ.setAttribute("name", 'id_patient');
	champ.setAttribute("value", id_patient);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ);
	var champ1 = document.createElement("input");
	champ1.setAttribute("type", "hidden");
	champ1.setAttribute("name", 'id_admission');
	champ1.setAttribute("value", id_admission);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ1);
	var champ2 = document.createElement("input");
	champ2.setAttribute("type", "hidden");
	champ2.setAttribute("name", 'anesthesiste');
	champ2.setAttribute("value", anesthesiste);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ2);
	var champ3 = document.createElement("input");
	champ3.setAttribute("type", "hidden");
	champ3.setAttribute("name", 'indication');
	champ3.setAttribute("value", indication);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ3);
	var champ4 = document.createElement("input");
	champ4.setAttribute("type", "hidden");
	champ4.setAttribute("name", 'type_anesthesie');
	champ4.setAttribute("value", type_anesthesie);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ4);
	var champ5 = document.createElement("input");
	champ5.setAttribute("type", "hidden");
	champ5.setAttribute("name", 'intervention_prevue');
	champ5.setAttribute("value", intervention_prevue);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ5);
	var champ6 = document.createElement("input");
	champ6.setAttribute("type", "hidden");
	champ6.setAttribute("name", 'numero_vpa');
	champ6.setAttribute("value", numero_vpa);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ6);
	var champ7 = document.createElement("input");
	champ7.setAttribute("type", "hidden");
	champ7.setAttribute("name", 'protocole_operatoire');
	champ7.setAttribute("value", protocole_operatoire);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ7);
	var champ8 = document.createElement("input");
	champ8.setAttribute("type", "hidden");
	champ8.setAttribute("name", 'soins_post_operatoire');
	champ8.setAttribute("value", soins_post_operatoire);
	FormulaireImprimerProtocoleOperatoire.appendChild(champ8);
	$("#ImprimerProtocoleOperatoire").trigger('click');
}



