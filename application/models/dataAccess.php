    <?php 
    
    
    
    class DataAccess extends CI_Model {
    	
    	
    	function __construct()
    	{
    		// Call the Model constructor
    		parent::__construct();
    	}
    	 
	public function getInfosVisiteur($login, $mdp){
		$req = "select *
				from visiteur 
				where visiteur.username=? and visiteur.password=?";
		
		$rs = $this->db->query($req, array ($login, $mdp));
		$ligne = $rs->first_row('array');
		return $ligne;
	}
	
	
	public function getPraticien(){
		$req = "select *
		from praticien";
		$rs = $this->db->query($req, array ());
		$ligne = $rs->result_array();
		return $ligne;
	}
	
	
	public function setCR($id,$praticien, $date, $bilan,$motif){
		$req = "insert into rapport_visite(VIS_MATRICULE,PRA_NUM,RAP_DATE,RAP_BILAN,RAP_MOTIF)
		values('$id','$praticien','$date','$bilan','$motif')";
		$rs = $this->db->query($req, array ());
		$ligne = 1;
		return $ligne;
	}
	
	
	public function getCR()
	{
		$id=$this->session->idUser;
		$req = "select *
		from rapport_visite R, praticien P
		where R.PRA_NUM=P.PRA_NUM AND VIS_MATRICULE='$id'";
		$rs = $this->db->query($req, array ());
		$ligne = $rs->result_array();
		return $ligne;
		
	}
	
	
    }
	?>