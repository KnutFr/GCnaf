<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GCNAF\NAFBundle\Form;

/**
 * Description of Fonctions
 *
 * @author Brahim
 */
class Fonctions {
    //put your code here

    /*
     * Convertir une date  JJ/MM/AAAA en AAAAMMJJ
     */
    function formatterDateAAAAMMJJ($logger, $strDate)
	{
                $strDate1 = '';
                $strDate1 = $strDate->format("Y")."-".$strDate->format("m")."-".$strDate->format("d");
                $logger->info('Fonctions : jour = '.$strDate->format("d"));
                $logger->info('Fonctions : mois = '.$strDate->format("m"));
                $logger->info('Fonctions : jour = '.$strDate->format("Y"));
                $logger->info('Fonctions : $strDate1 = '.$strDate1);
		return $strDate1;
	}
        
    	function veriferDate($strDate)
	{
		//Vérifier le format de la date
		if( !preg_match( '`(\d{1,2})/(\d{1,2})/(\d{4})`' , $strDate) )
		{  
			afficherMsgErr('Le format de la a date saisie est incorrect.');
			return 1;
		}

		//Vérifier la validité de la date
		$champsDate = explode("/", $strDate);
                if (!checkdate($champsDate[1], $champsDate[0], $champsDate[2])) 
		{  
			afficherMsgErr('La date saisie est invalide');
			return 1;
		}
		return 0; 
	}
        
        	function comparerDate($datdeb,$datfin)
	{
		$deb = explode("/", $datdeb);
		$fin = explode("/", $datfin);
					
		$deb = $deb[2].$deb[1].$deb[0];
		$fin = $fin[2].$fin[1].$fin[0];
		$deb = (int)$deb;
		$fin = (int)$fin;
			
		if($fin < $deb)
		{			
			return false;
		}
		return true;
	}
        
	function afficherMsgErr($msgErr)	
	{
		$msg = "<div style='color : red' align='center'><b>";
		$msg = $msg.$msgErr;
		$msg = $msg."</b></div>";
		echo $msg;	
	} 	        
}
