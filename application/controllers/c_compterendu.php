<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contrôleur par défaut de l'application
 * Si aucune spécification de contrôleur n'est précisée dans l'URL du navigateur
 * c'est le contrôleur par défaut qui sera invoqué. Son rôle est :
 * 		+ d'orienter vers le bon contrôleur selon la situation
 * 		+ de traiter le retour du formulaire de connexion 
*/
class C_compterendu extends CI_Controller {

	/**
	 * Fonctionnalité par défaut du contrôleur. 
	 * Vérifie l'existence d'une connexion :
	 * Soit elle existe et on redirige vers le contrôleur de VISITEUR, 
	 * soit elle n'existe pas et on envoie la vue de connexion
	*/
	public function ajoutcompte()
	{
		
		$this->load->model('dataAccess');
		$data = array();
		$data['praticiens']=$this->dataAccess->getPraticien();
		$data['nom']=$this->session->nom;
		$this->load->view('newCRvis',$data);
			
	}
	
	public function formulaireajoutCR()
	{
	
		$id=$this->session->idUser;
		$praticien = $this->input->post('listePraticiens');
		$date = $this->input->post('startDate');
		$motif = $this->input->post('motif');
		$bilan = $this->input->post('bilan');
		
		$this->load->model('dataAccess');
		//$this->load->view('newCRvis',$data);
		$this->dataAccess->setCR($id,$praticien,$date,$bilan,$motif);
		$this->load->view('acceuil');
		
		
	}
	
	public function ajoutTab()
	{
		
		$this->load->model('dataAccess');
		$data = array();
		$data['compterendus']=$this->dataAccess->getCR();
		$data['nom']=$this->session->nom;
		
		$this->load->view('listec',$data);
			
	}
	
	
	
	
	
	
	
}

?>