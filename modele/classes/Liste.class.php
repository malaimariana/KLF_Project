<?php
require_once('./modele/classes/Navigable.interface.php');

class Liste implements Navigable {
	private $produits;
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->produits = array();
	}	
	
	public function add($produit)
	{
			array_push($this->produits,$produit);
	}
	
	public function previous()
	{
		if ($this->current>0)
		{
			$this->current--;
			return true;
		}
		return false;
	}
	public function next()
	{
		if ($this->current<count($this->produits)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->produits[$this->current]))
				echo $this->produits[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->produits[$this->current]))
			return $this->produits[$this->current];
		return null;	
	}	
	public function size()
	{
		return count($this->produits);
	}
}
?>