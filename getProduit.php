<?php
require_once('./modele/ProduitDAO.class.php');
    
    if(ISSET($_REQUEST['produitnum'])) {        
            $dao = new ProduitDAO();
            $num = $_REQUEST['produitnum'];
            $produit = $dao->find($num); 
            $s = $produit->getJson();                
            echo $s;           
        }