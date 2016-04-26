<!DOCTYPE html>
<html>
    
    <head>
		<?php $this->load->view('style.php')?>
    </head>
    <body>
    <?php
	$this->load->helper('url');
	$path = base_url();
	 $this->load->view('navbar.php')?>
	 
    <h1> Liste de vos comptes rendus</h1>
    <br>

 <table>
                <tr>
                    <th>ID</th>
                    <th>Nom du praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>          
                </tr>
               
                <tr>
                <?php 
   				      foreach($compterendus as $compterendu)
   					{
   						echo "<tr><td>".$compterendu['VIS_MATRICULE']."</td>";
   						echo "<td>".$compterendu['PRA_NOM']."</td>";
   						echo "<td>".$compterendu['RAP_DATE']."</td>";
   						echo "<td>".$compterendu['RAP_MOTIF']."</td>";
   						echo "<td>".$compterendu['RAP_BILAN']."</td></tr>";
   					}
   					?>
                </tr>
</table>

   </body>
</html>
