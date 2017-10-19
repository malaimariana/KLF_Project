<?php

$num = $_REQUEST['num'];
$name = $_REQUEST['name'];
$package = $_REQUEST['package'];
$dateBuy = $_REQUEST['datebuy'];
$qtyBuy = $_REQUEST['qtybuy'];

echo "<h1>More Information on the product</h1>";
echo "<table border='1'>";
echo "<tr><td>" . $num . "</td><td>" . $name . "</td><td>" . $package . "</td><td>" . $dateBuy . "</td><td>" . $qtyBuy . "</td></tr>";                   
echo "</table><br /><br />";
echo "<input type='hidden' name='number' value='" . $num . "' id='number'>";
echo "<h1> Show produit (json)</h1>";
echo "<div id='afficherjson'> </div>";
?>
    <script>
        $(document).ready(function(){
            var num = $("#number").val(); 
            $.getJSON('getProduit.php', {produitnum: num}, function(data){
                var s = data.prodNum + "   " + data.prodName + "   " + data.prodPack + "   " + data.prodDateBuy + "   " + data.prodQtyBuy;
                      $("#afficherjson").html(s);
            });
        });           
        
    </script>  



