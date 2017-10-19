<h1>Create a new Product</h1>
<form method="POST">
    <table>
        <tr>
            <td>Product number: </td><td><input type="text" name="num" value=""></td>
        </tr>
        <tr>
            <td>Product name: </td><td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Product package: </td><td><input type="text" name="package" value=""></td>
        </tr>
        <tr>
            <td>Product date buy: </td><td><input type="text" name="datebuy" value=""></td>
        </tr>
        <tr>
            <td>Product qty buy: </td><td><input type="text" name="qtybuy" value=""></td>
        </tr>
        <tr>
            <td><input type="hidden" name="action" value="create" />
            </td><td><input type="submit" name = "bOK" value="Submit"></td>
        </tr> 
    </table>
</form>
<?php


