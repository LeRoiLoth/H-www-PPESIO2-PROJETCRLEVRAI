<!DOCTYPE html>
<html>
    
    <head>
		<?php $this->load->view('style.php')?>
    </head>
    <body>
    <?php
	$this->load->helper('url');
	$path = base_url();
?>
<?php $this->load->view('navbar.php')?>
    <h1> Nouveau compte rendu de visite</h1>
    <br>
<div class="container">
	<div class="col-sm-6" style="height:75px;">
	   <div class='col-md-5'>
  			<form action="<?php echo $path.'c_compterendu/formulaireajoutCR';?>" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">  			
  			<h2>Praticiens :</h2>

   					<select name="listePraticiens">
   					<?php 
   					foreach($praticiens as $praticien)
   					{
   						echo "<option value=".$praticien['PRA_NUM'].">";
   						echo $praticien['PRA_NOM']."</option>";
   					}
   					?>
   					</SELECT>

<br>
<div class="container">
	<div class="col-sm-6" style="height:75px;">
	   <div class='col-md-5'>
			<div class="form-group">
				<h2>Date :</h2>
				<div class='input-group date' id='startDate'>
					<input type='date' class="form-control" name="startDate"/>

				</div>
			</div>
		</div>
</div>
</div>
<div class="container">
	<div class="col-sm-6" style="height:75px;">
	   <div class='col-md-5'>
<h2>Motif :</h2>
<input type="text" NAME="motif" rows="6" cols="40">
		</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="col-sm-6" style="height:75px;">
	   <div class='col-md-5'>
<h2>Bilan:</h2>
<input type="text" NAME="bilan" rows="6" cols="40">
		</div>
</div>
</div>
<div class="container">
	<div class="col-sm-6" style="margin-top:100px; margin-left:-15px;">
	   <div class='col-md-5'>
<div class="form-group">
                <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Ajouter";/></div>
                </div>
                </div>
                </div>
                </div>
                </form>
   </body>
</html>