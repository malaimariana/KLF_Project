<?php
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/AfficherProduitAction.class.php');
require_once('./controleur/FormProduitAction.class.php');
require_once('./controleur/CreateProduitAction.class.php');
require_once('./controleur/AfficherUnProduitAction.class.php');
class ActionBuilder{
	public static function getAction($nom){
		switch ($nom)
		{
                    case "afficher" : 
                        return new AfficherProduitAction();
                    break; 
                    case "formproduit" : 
                        return new FormProduitAction();
                    break; 
                    case "create" : 
                        return new CreateProduitAction();
                    break; 
                    case "afficherUn" : 
                        return new AfficherUnProduitAction();
                    break; 
                
                    default :
				return new DefaultAction();
                }
        }
}

