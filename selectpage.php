<?php>
    include('session.php');


?>
<html>

    <head>
        <title>SelectPage </title>
    </head>
    
    <body>
        <h1>Select Where </h1> 

        <h3><a href = "welcome.php">Bezorgen</a><h3>
        <h3><a href = "welcome.php">Afhalen</a><h3>
        <h3><a href = "welcome.php">Aan tafel</a><h3>

        <form action="menu.php" method="post">
        Name: <input type="checkbox" name="1"><br>
        E-mail: <input type="checkbox" name="2"><br>
        <input type="submit">
        </form>

        <h2><a href = "logout.php">Sign Out</a></h2>
    </body>



</html>