<h1>List of products</h1>
<br />
<a href="?action=formproduit">New product</a>
<br /><br />
<?php
require_once('./modele/classes/produit.class.php');
require_once('./modele/classes/Liste.class.php');
require_once('./modele/ProduitDAO.class.php');

$dao = new ProduitDAO();
$liste = $dao->findAll();
$s = "";
echo "<table>";
while ($liste->next())
{
	$l = $liste->getCurrent();
	if ($l!=null)
	{
             echo "<tr>"
                           . "<td><a href='?action=afficherUn&prodnum=" . $l->getProdNum() . "'>" . $l->getProdNum() . "</a></td><td>" . $l->getProdName() . "</td></tr>";              
            
}}
echo "</table>";
