<?php

class Produit {
    private $prodId;
    private $prodNum;
    private $prodName;
    private $prodPack;
    private $prodDateBuy;
    private $prodQtyBuy;
    private $prodColorId;
    
    function getProdId() {
        return $this->prodId;
    }

    function getProdNum() {
        return $this->prodNum;
    }

    function getProdName() {
        return $this->prodName;
    }

    function getProdPack() {
        return $this->prodPack;
    }

    function getProdDateBuy() {
        return $this->prodDateBuy;
    }

    function getProdQtyBuy() {
        return $this->prodQtyBuy;
    }
    
    function getProdColorId() {
        return $this->prodColorId;
    }
    function setProdId($prodId) {
        $this->prodId = $prodId;
    }

    function setProdNum($prodNum) {
        $this->prodNum = $prodNum;
    }

    function setProdName($prodName) {
        $this->prodName = $prodName;
    }

    function setProdPack($prodPack) {
        $this->prodPack = $prodPack;
    }

    function setProdDateBuy($prodDateBuy) {
        $this->prodDateBuy = $prodDateBuy;
    }

    function setProdQtyBuy($prodQtyBuy) {
        $this->prodQtyBuy = $prodQtyBuy;
    }
    
    function setProdColorId($prodColorId) {
        $this->prodColorId = $prodColorId;
    }
    
    public function getJson() {
        return "{"."\"prodNum\"".":".$this->prodNum.",\"prodName\"".":"."\"".$this->prodName."\"".","."\"prodPack\"".":".$this->prodPack."".","."\"prodDateBuy\"".":"."\"".$this->prodDateBuy."\"".","."\"prodQtyBuy\"".":"."\"".$this->prodQtyBuy."\""."}";       
    }
    
    public function loadFromRecordProduit($ligne) {
        //$this->prodId = $ligne["prodld"];
        $this->prodNum = $ligne["prodNum"];
        $this->prodName = $ligne["prodName"];
        $this->prodPack = $ligne["prodPack"];
        $this->prodDateBuy = $ligne["prodDateBuy"];
        $this->prodQtyBuy = $ligne["prodQtyBuy"];        
    }
}

