<?php
include_once('./modele/classes/Database.class.php'); 
include_once('./modele/classes/produit.class.php'); 
include_once('./modele/classes/Liste.class.php'); 

class ProduitDAO {
    public function createProduit($produit) {
            $db = Database::getInstance();
            try {
                $requete = "INSERT INTO Products (prodNum, prodName, prodPack, prodDateBuy, prodQtyBuy, prodColorId) VALUES ('" . $produit->getProdNum() . "', '" . $produit->getProdName() . "', " . $produit->getProdPack() . ", '" . $produit->getProdDateBuy() . "', " . $produit->getProdQtyBuy() . ",1)";
                //$requete = "INSERT INTO Products (prodNum, prodName, prodPack, prodDateBuy, prodQtyBuy, prodColorId) VALUES ('" . $produit->getProdNum() . "', '" . $produit->getProdName() . "', " . $produit->getProdPack() . ", '" . $produit->getProdDateBuy() . "', " . $produit->getProdQtyBuy() . ", 1)";
                //echo "<script>alert('" . $produit->getProdNum() . "');</script>";
                
             /*   $pstmt = $db->prepare("INSERT INTO Products (prodNum, prodName, prodPack, prodDateBuy, prodQtyBuy)".
                                                  " VALUES (:u, :n, :p, :d, :q)");
                $pstmt->execute(array(':u' => $produit->getProdNum(),
                                      ':n' => $produit->getProdName(),
                                      ':p' => $produit->getProdPack(),
                                      ':d' => $produit->getProdDateBuy(),                                      
                                      ':q' => $produit->getProdQtyBuy()
                        ));                
                $pstmt->closeCursor();
                $pstmt = NULL;*/
               // echo "<script>alert('" . $db->query($requete) . "');</script>";
                $res = $db->query($requete);
               // echo "<script>alert('" . $res . "');</script>";
                //$res->closeCursor();
		$cnx = null;
            }
            catch (PDOException $ex){
            }             
    }
    
    public static function findAll()
	{
		try {
			$liste = new Liste();
			$requete = 'SELECT * FROM Products';
			$cnx = Database::getInstance();
			
			$res = $cnx->query($requete);
                        foreach($res as $row) {
				$p = new Produit();
				$p->loadFromRecordProduit($row);
				$liste->add($p);
		    }
			$res->closeCursor();
		    $cnx = null;
			return $liste;
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    return $liste;
		}	
	}
        
    public static function find($num)
    {
            $db = Database::getInstance();

            $pstmt = $db->prepare("SELECT * FROM Products WHERE prodNum = :x");//requ�te param�tr�e par un param�tre x.
            $pstmt->execute(array(':x' => $num));

            $result = $pstmt->fetch(PDO::FETCH_OBJ);
            $l = new Produit();

            if ($result)
            {
                    $l->setProdNum($result->prodNum);
                    $l->setProdName($result->prodName);
                    $l->setProdPack($result->prodPack);
                    $l->setProdDateBuy($result->prodDateBuy);
                    $l->setProdQtyBuy($result->prodQtyBuy);
                    

                    $pstmt->closeCursor();
                    return $l;
            }
            $pstmt->closeCursor();
            return null;
    }
}