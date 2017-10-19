<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Produit.class.php');
require_once('./modele/ProduitDAO.class.php');

class AfficherProduitAction implements Action {
	public function execute(){
                           //$dao = new ProduitDAO();
                           //$liste = $dao->findAll();                                 
               return "afficherProduits";
	}


}

?>

