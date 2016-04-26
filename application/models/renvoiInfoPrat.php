<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 
class Authentif extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	
	public function renvoie($praticien,$date,$motif,$bilan)
	{	// TODO : s'assurer que les paramètres reçus sont cohérents avec ceux mémorisés en session

		$renvoiPrat = array(
				'praticien'  => $praticien,
				'date' => $date,
				'motif'=> $motif,
				'bilan'=> $bilan,
				
				
		);


	}


	
}
