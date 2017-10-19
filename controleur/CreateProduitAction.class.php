<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/ProduitDAO.class.php');
require_once('./modele/classes/produit.class.php');

class CreateProduitAction implements Action {
    
	public function execute(){
          $dao = new ProduitDAO();  
            if (ISSET($_REQUEST['bOK'])) {                 
                   //echo "<script>alert();</script>";
                    $produit = new Produit();
                    
                    $produit->setProdNum($_REQUEST['num']);
                    //echo "<script>alert('" . $_REQUEST['num'] . "');</script>";
                    $produit->setProdName($_REQUEST['name']);
                    $produit->setProdPack($_REQUEST['package']);
                    $produit->setProdDateBuy($_REQUEST['datebuy']);
                    $produit->setProdQtyBuy($_REQUEST['qtybuy']);  
                    
                    $dao->createProduit($produit);                    
               }
		return "afficherProduits";
	}
}
?>
