<html>
<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Home page</title>
</head>

<body>
    <div>
        <ul>
            <li><a href="?action=afficher">Wine list</a></li>
            <li><a href="#suppliers">Suppliers</a></li>
            <li><a href="#regions">Regions</a></li>
        </ul>
    </div>
    <br />
    <br />
    
    <div>
        <?php           
                include $vue.".php";          
        ?>                           
   </div>
</body>
</html>


