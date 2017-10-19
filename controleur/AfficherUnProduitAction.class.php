<?php
require_once('./controleur/Action.interface.php');
class AfficherUnProduitAction implements Action {
	public function execute(){
            
            $dao = new ProduitDAO();
        if(ISSET($_REQUEST['prodnum'])){
            $produit = $dao->find($_REQUEST['prodnum']);            
                if ($produit != NULL) {
                    $_REQUEST['num'] = $produit->getProdNum();
                    $_REQUEST['name'] = $produit->getProdName();
                    $_REQUEST['package'] = $produit->getProdPack();
                    $_REQUEST['datebuy'] = $produit->getProdDateBuy();
                    $_REQUEST['qtybuy'] = $produit->getProdQtyBuy();                    
                    
                }
        }
            
		return "afficherUnProduit";
	}
}
?>

